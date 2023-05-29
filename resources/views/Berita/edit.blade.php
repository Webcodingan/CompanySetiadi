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

                <div class="card shadow mb-4 my-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Artikel</h6>
                    </div>

                    <form action="{{ route('inputberita.update', [$berita->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="form-gorup">
                                {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}

                                <div class="mb-3">
                                    <select name="kategori_id"
                                        class="form-control @error('kategori_id') is-invalid @enderror">
                                        <option>Pilih Kategori</option>
                                        @foreach (App\Models\Kategori::all() as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                        <option>Author</option>
                                        @foreach (App\Models\User::all() as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="judul_berita">Judul artikel</label>
                                    <input id="judul_berita" type="text" value="{{ $berita->judul_berita }}" name="judul_berita"
                                        class="form-control @error('judul_berita') is-invalid @enderror">
                                    @error('judul_berita')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="isi">Isi</label>
                                    <textarea name="isi" id="mytextarea"
                                        class="form-control @error('isi') is-invalid @enderror" cols="30" rows="10">        </textarea>
                                    @error('isi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="time" name="tanggal" value="{{ $berita->tanggal }}"
                                        class="form-control  @error('tanggal') is-invalid @enderror">
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image"
                                        class="form-control  @error('image') is-invalid @enderror">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
