@extends('admin.layouts.master')

@section('title')
    Artikel
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center"><b class="text-success">{{ $berita->judul_berita }}</b></h4>
                                <img src="{{ asset('image') }}/{{ $berita->image }}" class="img-fluid mx-auto d-block"
                                    alt="foto berita"><br>

                                <p style="text-indent: 30px; font-family: Arial;">{!! $berita->isi !!}</p>

                                <div class="mb-2">
                                    <strong>Kategori : {{ $berita->kategori->nama }} <br>
                                        Author : {{ $berita->user->name }} <br>
                                        Tanggal : {{ $berita->tanggal }} <br></strong>
                                </div>

                                <div class="d-grid gap-2 d-md-block">
                                    <a href="{{ route('inputberita.edit', [$berita->id]) }}"><button class="btn btn-warning">Edit
                                        </button></a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $berita->id }}">Delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $berita->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{ route('inputberita.destroy', [$berita->id]) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fs-5" id="exampleModalLabel">
                                                            Modal title</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin ingin menghapus Artikel ini ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>

                                                        <button type="submit"
                                                            class="btn btn-outline-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
