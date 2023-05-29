@extends('admin.layouts.master')

@section('title')
    Artikel
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <div class="card-body">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">List Data Artikel</h6>
                                <a href="{{ route('inputberita.create') }}">
                                    <button class="btn btn-success">Add Artikel</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="example1" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Judul Artikel</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Isi Artikel</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Gambar</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Judul Artikel</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Isi Artikel</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Gambar</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($beritas as $berita)
                                            <tr>
                                                <th class="text-center" scope="row">{{ $i }}</th>
                                                <td class="text-center">{{ Str::limit($berita->judul_berita, 20) }}</td>
                                                <td class="text-center">{{ $berita->kategori->nama }}</td>
                                                <td class="text-center">{!! substr(strip_tags($berita->isi), 0, 20) !!}</td>
                                                <td class="text-center">{{ $berita->tanggal }}</td>
                                                <td><img src="{{ asset('image') }}/{{ $berita->image }}" alt="gambar berita"
                                                        width="100"></td>
                                                <td class="text-center">
                                                    <a href="{{ route('inputberita.show', [$berita->id]) }}">
                                                        <button class="btn btn-white"><i
                                                                class="fas fa-eye text-success"></i></button>
                                                    </a>
                                                </td>
                                                @php
                                                    $i++;
                                                @endphp
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
