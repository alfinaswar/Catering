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
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-room">
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
                        <form action="{{ route('makanan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kategori Makanan</label>
                                <select name="kategori" class="form-control">
                                    <option value="1">123</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Makanan</label>
                                <input type="text" name="nama" class="form-control" placeholder="Ketik Nama Makanan / Produk" required>
                            </div>
                             <div class="mb-3">
                                <label class="form-label">Dekkripsi Makanan</label>
                                <input type="text" name="deskripsi" class="form-control" placeholder="Ketik Deskripsi Makanan / Produk" required>
                            </div>
                             <div class="mb-3">
                                <label class="form-label">Harga Makanan</label>
                                <input type="number" name="harga" class="form-control" placeholder="Ketik Harga Makanan / Produk" required>
                            </div>
                             <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" placeholder="Ketik Harga Makanan / Produk" required>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
