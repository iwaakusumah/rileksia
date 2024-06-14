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
                                <!-- <th>Status</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <!-- <td>
                                    <div class="tmbl-tggl">
                                        <input type="checkbox" name="" id="toggle-status{{ $user->id }}" class="tggl-btn" data-user-id="{{ $user->id }}" data-user-role="{{ $user->role }}" {{ $user->is_active ? 'checked' : '' }}>
                                        <label for="toggle-status{{ $user->id }}" class="onbtn"><i class="fa-solid fa-check"></i></label>
                                        <label for="toggle-status{{ $user->id }}" class="offbtn"><i class="fa-solid fa-xmark"></i></label>
                                    </div>
                                </td> -->
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning waves-effect waves-light my-0" data-bs-toggle="modal" data-bs-target="#myModalEdit{{ $user->id }}"><i class="fas fa-pencil-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
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
                <form id="addUserForm" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabelTambah">Tambah Pengguna Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name-user" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="name-user" name="nama" autocomplete="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email-user" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email-user" name="email" autocomplete="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password-user" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password-user" name="password" autocomplete="new-password" required>
                        </div>
                        <div class="mb-3">
                            <label for="role-user" class="form-label">Role</label>
                            <select class="form-select" id="role-user" name="role" required>
                                <option value="Admin">Admin</option>
                                <option value="Super Admin">Super Admin</option>
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

    {{-- Modal Form Edit --}}
    @foreach ($users as $user)
    <div id="myModalEdit{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelEdit{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editUserForm{{ $user->id }}" action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabelEdit{{ $user->id }}">Edit Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name{{ $user->id }}" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="name{{ $user->id }}" name="name" value="{{ $user->nama }}" autocomplete="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email{{ $user->id }}" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email{{ $user->id }}" name="email" value="{{ $user->email }}" autocomplete="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="role{{ $user->id }}" class="form-label">Role</label>
                            <select class="form-select" id="role{{ $user->id }}" name="role" required {{ $user->role == 'Super Admin' ? 'disabled' : '' }}>
                                <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="Super Admin" {{ $user->role == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                            </select>
                            @if($user->role == 'Super Admin')
                            <input type="hidden" name="role" value="{{ $user->role }}" readonly>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

</div>
</div>
<!-- End of Main Content -->
@endsection