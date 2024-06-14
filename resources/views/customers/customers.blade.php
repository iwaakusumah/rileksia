@extends('base')
@section('title', 'RILEKSIA | Pelanggan')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 text-gray-800 mb-0">Pelanggan</h1>
            <div>
                <button class="btn btn-info"><i class="fas fa-file-export me-2"></i> Export</button>
                <!-- <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#myModalTambah">
                    <i class="fas fa-plus me-2"></i> Tambah Pelanggan
                </button> -->
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $customer->nama_pelanggan }}</td>
                                <td>{{ $customer->jenis_kelamin }}</td>
                                <td>{{ $customer->no_telp }}</td>
                                <td>{{ $customer->alamat }}</td>
                                <td>{{ $customer->kota }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
@endsection