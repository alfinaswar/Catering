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
                            Paket Makanan
                        </h2>
                    </div>
                    <!-- Page title actions -->

                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">

            <div class="container-xl">

                <div class="card">
                    <div class="card-header bg-azure">
                        <h3 class="card-title">Daftar Paket Makanan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('paket-makanan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Paket</label>
                                <input type="text" name="nama" class="form-control" placeholder="Ketik Nama Paket"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Paket</label>
                                <input type="text" name="deskripsi" class="form-control"
                                    placeholder="Ketik Deskripsi Paket" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Paket</label>
                                <input type="number" name="harga" class="form-control" placeholder="Ketik Harga Paket"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Makanan</label>
                                <select name="idmakanan" class="form-control" required>
                                    <option value="">Pilih Makanan</option>
                                    @foreach ($makananringan as $makanan)
                                        <option value="{{ $makanan->nama }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Kue</label>
                                <select name="idkue" class="form-control" required>
                                    <option value="">Pilih Kue</option>
                                    @foreach ($kue as $makanan)
                                        <option value="{{ $makanan->nama }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Minuman</label>
                                <select name="idminuman" class="form-control" required>
                                    <option value="">Pilih Minuman</option>
                                    @foreach ($minuman as $makanan)
                                        <option value="{{ $makanan->nama }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Buah</label>
                                <select name="idbuah" class="form-control" required>
                                    <option value="">Pilih Buah</option>
                                    @foreach ($buah as $makanan)
                                        <option value="{{ $makanan->nama }}">{{ $makanan->nama }}</option>
                                    @endforeach
                                </select>
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
