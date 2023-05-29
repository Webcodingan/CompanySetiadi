<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontaks = Kontak::latest()->get();
        return view('Kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama' => 'Nama harus diisi dengan benar',
            'email' => 'Email harus diisi dengan benar',
            'no_hp' => 'no_hp harus diisi dengan benar',
            'deksirpsi' => 'deskripsi harus diisi dengan benar',
        ]);

        Kontak::create([
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'no_hp' => $request->get('no_hp'),
            'deskripsi' => $request->get('deskripsi'),
        ]);

        return redirect('contact')->with('message', 'Masukan Anda telah diproses!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontak = Kontak::find($id);
        return view('Kontak.detail', compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'deskripsi' => 'required',
        ]);
        $kontak = Kontak::find($id);
        $kontak->nama = $request->get('nama');
        $kontak->email = $request->get('email');
        $kontak->no_hp = $request->get('no_hp');
        $kontak->deskripsi = $request->get('deskripsi');
        $kontak->save();

        return redirect('kontak')->with('message', 'Masukkan Anda berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect('kontak')->with('message', 'Kontak berhasil dihapus');
    }
}
