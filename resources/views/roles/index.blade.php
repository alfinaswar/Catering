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
                            Pengguna Sistem
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
                        <h3 class="card-title">Daftar User </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                    <script>
                      Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: '{{ $message }}',
                      });
                    </script>
                    @endif

                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                        <thead>
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
</thead>
<tbody>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>


                <a class="btn btn-primary" style="background-color:#6b6ef5;" href="{{ route('roles.edit',$role->id) }}">Edit</a>


                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

        </td>
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

@endsection



{{-- <p class="text-center text-primary"><small>..</small></p>
@endsection --}}
