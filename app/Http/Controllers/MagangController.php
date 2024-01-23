<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class MagangController extends Controller
{
    #Fungsi Index
    public function index()
    {
        return view('admin.info-magang.index', [
            'artikels' => Magang::orderBy('id', 'desc')->get()

        ]);
    }

    #Halaman Create
    public function create()
    {
        return view('admin.info-magang.create');
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $rules = [
                'judul' => 'required',
                'nama_perusahaan' => 'required',
                'image' => 'required|max:1000|mimetypes:image/jpeg,image/jpg,image/png,image/webp',
                'desc' => 'required|min:20',
                'formulir' => 'required|mimes:pdf',
            ];

            $messages = [
                'judul.required' => 'Judul wajib diisi!',
                'nama_perusahaan.required' => 'Nama Perusahaan wajib diisi!',
                'image.required' => 'Foto wajib diisi!',
                'desc.required' => 'Deskripsi wajib diisi!',
            ];

            $this->validate($request, $rules, $messages);

            // Image
            $fileName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);

            // Formulir
            $formulirFileName = time() . '.' . $request->file('formulir')->extension();
            $request->file('formulir')->storeAs('public/formulir', $formulirFileName);

            // Deskripsi (HTML)
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();

            // Simpan ke database
            Magang::create([
                'judul' => $request->judul,
                'nama_perusahaan' => $request->nama_perusahaan,
                'slug' => Str::slug($request->judul, '-'),
                'image' => $fileName,
                'formulir' => $formulirFileName,
                'desc' => $dom->saveHTML(),
            ]);

            return redirect(route('magang'))->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            // Tangani error
            dd($e->getMessage());
        }
    }


    #Halaman Edit
    public function edit($id)
    {
        $artikel = Magang::find($id);
        return view('admin.info-magang.edit', [
            'artikel' => $artikel
        ]);
    }


    #Halaman Update
    public function update(Request $request, $id)
    {
        $artikel = Magang::find($id);

        // Simpan nilai formulir dan gambar lama
        $oldFormulir = $artikel->formulir;
        $oldImage = $artikel->image;

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'nama_perusahaan' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'nama_perusahaan.required' => 'Nama Perusahaan wajib diisi!',
            'image.required' => 'image wajib diisi!',
            'desc.required' => 'deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/' . $artikel->image)) {
                \File::delete('storage/artikel/' . $oldImage);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        } else {
            // Gunakan gambar lama jika tidak ada gambar baru
            $fileName = $oldImage;
        }

        // Artikel
        $storage = "storage/content-artikel";
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

        $artikel->update([
            'judul' => $request->judul,
            'nama_perusahaan' => $request->nama_perusahaan,
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        // Simpan kembali nilai formulir lama
        if ($oldFormulir) {
            $artikel->update(['formulir' => $oldFormulir]);
        }

        return redirect(route('magang'))->with('success', 'Data berhasil diupdate');
    }

    #Halaman Delete
    public function destroy($id)
    {
        // Find the model instance by ID
        $artikel = Magang::find($id);

        // Check if the model instance exists\
        if (!$artikel) {
            return redirect()->route('magang')->with('error', 'Data not found.');
        }

        // Delete the model instance
        $artikel->delete();

        // Redirect with success message
        return redirect()->route('magang')->with('success', 'Data deleted successfully.');
    }
}
