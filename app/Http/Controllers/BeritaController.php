<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class BeritaController extends Controller
{



    #Fungsi Index
    public function index()
    {
        // $beritas = DB::table('berita')
        // ->get()
        // ->orderBy('id','desc');

        // return view('admin.berita.index', compact('berita'));

        return view('admin.berita.index', [
            'beritas' => Berita::orderBy('id', 'desc')->get()]);


    }

    #Halaman Create
    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $rules = [
                'judul' => 'required',
                'image' => 'required|max:1000|mimetypes:image/jpeg,image/jpg,image/png,image/webp',
                'desc' => 'required|min:20',
            ];

            $messages = [
                'judul.required' => 'Judul wajib diisi!',
                'image.required' => 'Foto wajib diisi!',
                'desc.required' => 'Deskripsi wajib diisi!',
            ];

            $this->validate($request, $rules, $messages);

            // Image
            $fileName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/berita', $fileName);


            // Deskripsi (HTML)
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();

            // Simpan ke database
            Berita::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'image' => $fileName,
                'desc' => $dom->saveHTML(),
            ]);

            return redirect(route('berita2'))->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            // Tangani error
            dd($e->getMessage());
        }
    }

        #Halaman Edit
        public function edit($id)
        {
            $berita = Berita::find($id);
            return view('admin.berita.edit', [
                'berita' => $berita
            ]);
        }

        #Halaman Update
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'image wajib diisi!',
            'desc.required' => 'deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

            // Cek jika ada image baru
            if ($request->hasFile('image')) {
                if (\File::exists('storage/berita/' . $berita->image)) {
                    \File::delete('storage/berita/' . $request->old_image);
                }
                $fileName = time() . '.' . $request->image->extension();
                $request->file('image')->storeAs('public/berita', $fileName);
            }

            if ($request->hasFile('image')) {
                $checkFileName = $fileName;
            } else {
                $checkFileName = $request->old_image;
            }

            // Artikel
            $storage = "storage/content-berita";
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filePath = ("$storage/$fileNameContentRand.$mimetype");
                    $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                    $new_src = asset($filePath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-responsive');
                }
            }

            $berita->update([
                'judul' => $request->judul,
                'image' => $checkFileName,
                'desc' => $dom->saveHTML(),
            ]);

            return redirect(route('berita2'))->with('success', 'data berhasil di update');
        }

        #Halaman Delete
        public function destroy($id)
        {
            // Find the model instance by ID
            $berita = Berita::find($id);

            // Check if the model instance exists\
            if (!$berita) {
                return redirect()->route('berita2')->with('error', 'Data not found.');
            }

            // Delete the model instance
            $berita->delete();

            // Redirect with success message
            return redirect()->route('berita2')->with('success', 'Data deleted successfully.');
        }
    }
