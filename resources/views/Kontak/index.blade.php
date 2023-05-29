@extends('admin.layouts.master')

@section('title')
    Contact User
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
                            <h6 class="m-0 font-weight-bold text-primary">List Contact User
                            </h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="example1" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Mobile Phone</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Mobile Phone</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($kontaks as $kontak)
                                            <tr>
                                                <th class="text-center" scope="row">{{ $i }}</th>
                                                <td class="text-center">{{ $kontak->nama }}</td>
                                                <td class="text-center">{{ $kontak->email }}</td>
                                                <td class="text-center">{{ $kontak->no_hp }}</td>
                                                <td class="text-center">{{ Str::limit($kontak->deskripsi,20) }}</td>
                                                <td>
                                                    <a href="{{ route('kontak.show', [$kontak->id]) }}">
                                                        <button class="btn btn-white"><i
                                                                class="fas fa-eye text-success"></i></button>
                                                    </a>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $kontak->id }}">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $kontak->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form
                                                                action="{{ route('kontak.destroy', [$kontak->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Modal
                                                                            title</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">

                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah Anda Yakin ingin menghapus kontak ini ?
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
                                                </td>
                                                @php
                                                    $i++;
                                                @endphp
                                                {{-- @endif --}}
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
