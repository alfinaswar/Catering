@extends('layouts.app')

@section('content')
    <div class="page-wrapper mb-3">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Master
                        </div>
                        <h2 class="page-title">
                            Produk
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="{{route('makanan.create')}}" class="btn btn-primary d-none d-sm-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Tambah Produk
                            </a>
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                                data-bs-target="#modal-room" aria-label="Create new report">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">

            <div class="container-xl">

                <div class="card">
                    <div class="card-header bg-azure">
                        <h3 class="card-title">Daftar Produk</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" data-export-title="Export" id="table1" width="100%">
                            <thead class="">
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="auto">Kategori</th>
                                    <th width="auto">Nama</th>
                                    <th width="auto">Harga</th>
                                    <th width="auto">Gambar Produk</th>
                                    <th width="115" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($makanan->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Data belum di isi</td>
                                        </tr>
                                    @else
@foreach ($makanan as $key => $item)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$item->kategori}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->harga}}</td>
        <td>{{$item->gambar}}</td>
        <td>
            <a href="{{ route('makanan.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('makanan.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
@endforeach
@endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
