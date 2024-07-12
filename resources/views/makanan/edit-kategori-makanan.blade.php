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
                        <form action="{{ route('makanan.updateKategori', ['id' => $data->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" name="kategori" value="{{ $data->kategori }}" class="form-control"
                                    placeholder="Ketik Nama Kategori" required>
                            </div>

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary w-100" value="Update">
                            </div>
                        </form>

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
