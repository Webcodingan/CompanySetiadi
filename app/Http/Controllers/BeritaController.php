<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('Berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'user_id' => 'required',
            'judul_berita' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'image' => 'required|file|mimes:png,jpeg,jpg',
        ]);

        $image = $request->file('image');
        $name =
            time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $name);

        Berita::create([
            'kategori_id' => $request->get('kategori_id'),
            'user_id' => $request->get('user_id'),
            'judul_berita' => $request->get('judul_berita'),
            'isi' => $request->get('isi'),
            'tanggal' => $request->get('tanggal'),
            'image' => $name,
        ]);

        return redirect('inputberita')->with('message', 'Berita berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('Berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('Berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'user_id' => 'required',
            'judul_berita' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'image' => 'required|file|mimes:png,jpeg,jpg',
        ]);

        $berita = Berita::find($id);
        $name = $berita->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name =

                time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/image');
            $image->move($destinationPath, $name);
        }

        $berita->kategori_id = $request->get('kategori_id');
        $berita->user_id = $request->get('user_id');
        $berita->judul_berita = $request->get('judul_berita');
        $berita->isi = $request->get('isi');
        $berita->tanggal = $request->get('tanggal');
        $berita->image = $name;
        $berita->save();

        return redirect('inputberita')->with('message', 'Berita berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('inputberita')->with('message', 'Berita berhasil dihapus');
    }
}
