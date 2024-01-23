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
                'image' => 'required|max:1000|mimetypes:image/jpeg,image/jpg,image/png,image/webp',
                'desc' => 'required|min:20',
                'formulir' => 'required|mimes:pdf',
            ];

            $messages = [
                'judul.required' => 'Judul wajib diisi!',
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
                'slug' => Str::slug($request->judul, '-'),
                'image' => $fileName,
                'formulir' => $fileName,
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
        return view('admin.info-magang.edit');
    }

    #Halaman Update
    public function update(Request $request, $id)
    {
    }

    #Halaman Delete
    public function destroy($id)
    {
    }
}
