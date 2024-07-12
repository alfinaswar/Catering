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
                            Kategori Makanan
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">

                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">

            <div class="container-xl">

                <div class="card">
                    <div class="card-header bg-azure">
                        <h3 class="card-title">Daftar Kategori Makanan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('makanan.storeKategori') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" name="kategori" class="form-control" placeholder="Ketik Nama Kategori"
                                    required>
                            </div>

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary w-100">
                            </div>
                        </form>
                        <table class="table" data-export-title="Export" id="table1" width="100%">
                            <thead class="">
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="80%">Kategori</th>
                                    <th width="115" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($kategori->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data belum di isi</td>
                                    </tr>
                                @else
                                    @foreach ($kategori as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('makanan.destroyKategori', $item->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('makanan.editKategori', $item->id) }}"
                                                        class="btn btn-primary">Edit</a>
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
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: '{{ session('status') }}',
            });
        </script>
    @endif
@endsection
