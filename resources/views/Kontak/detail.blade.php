@extends('admin.layouts.master')

@section('title')
Contact User
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center"><b class="text-primary">Detail Contact user</b></h4>
                            </div>

                            <div class="card-body">
                                Nama : <b>{{ $kontak->nama }}</b><br>
                                Email : <b>{{ $kontak->email }}</b><br>
                                Mobile Phone: <b>{{ $kontak->no_hp}}</b><br>
                                Deskripsi :
                                <p style="text-indent: 30px; font-family: Arial;"><strong>{{ $kontak->deskripsi }}</strong></p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
