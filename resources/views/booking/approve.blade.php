@extends('base')
@section('title', 'RILEKSIA | Pengguna')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 text-gray-800 mb-0">Pengguna</h1>
            <div>
                <button class="btn btn-info mx-2"><i class="fas fa-file-export me-2"></i> Export</button>
                <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#myModalTambah">
                    <i class="fas fa-plus me-2"></i> Tambah Pengguna
                </button>
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
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>superadmin@example.com</td>
                                <td>Super Admin</td>
                                <td>Aktif</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning waves-effect waves-light my-0" data-bs-toggle="modal" data-bs-target="#myModalEdit"><i class="fas fa-pencil-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Modal Form Add -->
    <div id="myModalTambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelTambah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addUserForm" action="" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabelTambah">Tambah Pengguna Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-user" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama-user" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email-user" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email-user" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password-user" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password-user" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="role-user" class="form-label">Role</label>
                            <select class="form-select" id="role-user" name="role" required>
                                <option value="Admin">Admin</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->
@endsection