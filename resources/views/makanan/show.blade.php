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
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="{{ route('makanan.paket') }}" class="btn btn-primary d-none d-sm-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Tambah Paket Makanan
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
                        <h3 class="card-title">Daftar Paket Makanan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" data-export-title="Export" id="table1" width="100%">
                            <thead class="">
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="auto">Nama Paket</th>
                                    <th width="auto">Harga Paket</th>
                                    <th width="auto">Deskripsi Paket</th>
                                    <th width="auto">Makanan</th>
                                    <th width="auto">Kue</th>
                                    <th width="auto">Minuman</th>
                                    <th width="auto">Buah</th>
                                    <th width="115" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="vertical-align: middle;">
                                @if ($paket->isEmpty())
                                    <tr>
                                        <td colspan="8" class="text-center">Data belum di isi</td>
                                    </tr>
                                @else
                                    @foreach ($paket as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->idmakanan ?? 'Tidak Ada' }}</td>
                                            <td>{{ $item->idkue ?? 'Tidak Ada' }}</td>
                                            <td>{{ $item->idminuman ?? 'Tidak Ada' }}</td>
                                            <td>{{ $item->idbuah ?? 'Tidak Ada' }}</td>
                                            <td width="20%">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('makanan.hapuspaket', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">HAPUS</button>
                                                </form>
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
