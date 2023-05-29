<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::get();
        return view('admin.layouts.master', compact('profile'));
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
        // $this->validate($request, [
        //     'name' => 'required|string|min:2|max:100',
        //     'email' => 'required|email|unique:users,email',
        //     'old_password' => 'required',
        //     'password' => 'required',
        //     'image' => 'required|file|mimes:png,jpeg,jpg',
        // ]);

        // $image = $request->file('image');
        // $name =
        //     time() . '.' . $image->getClientOriginalExtension();
        // $destinationPath = public_path('/image');
        // $image->move($destinationPath, $name);

        // User::create([
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'old_password' => $request->get('old_password'),
        //     'password' => $request->get('password'),
        //     'image' => $name,
        // ]);

        // return redirect('profile')->with('message', 'Profile berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
        return view('profile', compact('profile'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
