@extends('base')
@section('title', 'RILEKSIA | Pesanan')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 text-gray-800 mb-0">Pesanan</h1>
            <div>
                <button class="btn btn-info mx-2"><i class="fas fa-file-export me-2"></i> Export</button>
                <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#myModalTambah">
                    <i class="fas fa-plus me-2"></i> Tambah Pesanan
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
                                <th>Jenis Layanan</th>
                                <th>Tempat</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>@foreach ($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $booking->nama_pelanggan }}</td>
                                <td>{{ $booking->jenis_layanan }}</td>
                                <td>{{ $booking->tempat_layanan }}</td>
                                <td>{{ $booking->tanggal }}</td>
                                <td>{{ $booking->jam }}</td>
                                <td>
                                    <div class="
                                    @if ($booking->status === 'Diproses')
                                    badge bg-warning
                                    @elseif ($booking->status === 'Diterima')
                                    badge bg-success
                                    @elseif ($booking->status === 'Ditolak')
                                    badge bg-danger
                                    @endif
                                ">
                                        {{ $booking->status }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-warning waves-effect waves-light my-0" data-bs-toggle="modal" data-bs-target="#myModalEdit{{ $booking->id }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <form id="deleteForm{{ $booking->id }}" action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="deleteBtn">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger waves-effect waves-light ms-1 me-1">
                                                <i class="fas fa-trash-alt" style="color: white;"></i>
                                            </button>
                                        </form>
                                    </div>
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

    <!-- Modal Form Add Booking -->
    <div id="myModalTambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelTambah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addBookingForm" action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabelTambah">Tambah Pesanan Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-pelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama-pelanggan" name="nama_pelanggan" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis-kelamin" name="jenis_kelamin" required>
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="no-telp" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no-telp" name="no_telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis-layanan" class="form-label">Jenis Layanan</label>
                            <select class="form-select" id="jenis-layanan" name="jenis_layanan" required>
                                <option selected disabled>Pilih Jenis Layanan</option>
                                <option value="Terapi Spa">Terapi Spa</option>
                                <option value="Terapi Refleksiologi">Terapi Refleksiologi</option>
                                <option value="Terapi Aromaterapi">Terapi Aromaterapi</option>
                                <option value="Terapi Musikoterapi">Terapi Musikoterapi</option>
                                <option value="Terapi Akupunktur">Terapi Akupunktur</option>
                                <option value="Terapi Meditasi">Terapi Meditasi</option>
                                <option value="Terapi Pernapasan">Terapi Pernapasan</option>
                                <option value="Terapi Reiki">Terapi Reiki</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tempat-layanan" class="form-label">Tempat Layanan</label>
                            <select class="form-select" id="tempat-layanan" name="tempat_layanan" required>
                                <option selected disabled>Pilih Tempat Layanan</option>
                                <option value="Ditempat">Ditempat</option>
                                <option value="Dirumah">Dirumah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label for="jam" class="form-label">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam" required min="{{ date('H:i') }}">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option selected disabled>Pilih Status</option>
                                <option value="Diproses">Diproses</option>
                                <option value="Diterima">Diterima</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
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


    @foreach ($bookings as $booking)
    <!-- Modal Form Edit Booking -->
    <div id="myModalEdit{{ $booking->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelEdit{{ $booking->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editBookingForm{{ $booking->id }}" action="{{ route('bookings.update', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabelEdit{{ $booking->id }}">Edit Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-pelanggan-edit{{ $booking->id }}" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama-pelanggan-edit{{ $booking->id }}" name="nama_pelanggan" value="{{ $booking->nama_pelanggan }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis-kelamin-edit{{ $booking->id }}" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis-kelamin-edit{{ $booking->id }}" name="jenis_kelamin" required>
                                <option value="Laki-laki" {{ $booking->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $booking->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="no-telp-edit{{ $booking->id }}" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no-telp-edit{{ $booking->id }}" name="no_telp" value="{{ $booking->no_telp }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat-edit{{ $booking->id }}" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat-edit{{ $booking->id }}" name="alamat" rows="3" required>{{ $booking->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kota-edit{{ $booking->id }}" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="kota-edit{{ $booking->id }}" name="kota" value="{{ $booking->kota }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis-layanan-edit{{ $booking->id }}" class="form-label">Jenis Layanan</label>
                            <select class="form-select" id="jenis-layanan-edit{{ $booking->id }}" name="jenis_layanan" required>
                                <option value="Terapi Spa" {{ $booking->jenis_layanan == 'Terapi Spa' ? 'selected' : '' }}>Terapi Spa</option>
                                <option value="Terapi Refleksiologi" {{ $booking->jenis_layanan == 'Terapi Refleksiologi' ? 'selected' : '' }}>Terapi Refleksiologi</option>
                                <option value="Terapi Aromaterapi" {{ $booking->jenis_layanan == 'Terapi Aromaterapi' ? 'selected' : '' }}>Terapi Aromaterapi</option>
                                <option value="Terapi Musikoterapi" {{ $booking->jenis_layanan == 'Terapi Musikoterapi' ? 'selected' : '' }}>Terapi Musikoterapi</option>
                                <option value="Terapi Akupunktur" {{ $booking->jenis_layanan == 'Terapi Akupunktur' ? 'selected' : '' }}>Terapi Akupunktur</option>
                                <option value="Terapi Meditasi" {{ $booking->jenis_layanan == 'Terapi Meditasi' ? 'selected' : '' }}>Terapi Meditasi</option>
                                <option value="Terapi Pernapasan" {{ $booking->jenis_layanan == 'Terapi Pernapasan' ? 'selected' : '' }}>Terapi Pernapasan</option>
                                <option value="Terapi Reiki" {{ $booking->jenis_layanan == 'Terapi Reiki' ? 'selected' : '' }}>Terapi Reiki</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tempat-layanan-edit{{ $booking->id }}" class="form-label">Tempat Layanan</label>
                            <select class="form-select" id="tempat-layanan-edit{{ $booking->id }}" name="tempat_layanan" required>
                                <option value="Ditempat" {{ $booking->tempat_layanan == 'Ditempat' ? 'selected' : '' }}>Ditempat</option>
                                <option value="Dirumah" {{ $booking->tempat_layanan == 'Dirumah' ? 'selected' : '' }}>Dirumah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal-edit{{ $booking->id }}" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal-edit{{ $booking->id }}" name="tanggal" value="{{ $booking->tanggal }}" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label for="jam-edit{{ $booking->id }}" class="form-label">Jam</label>
                            <input type="time" class="form-control" id="jam-edit{{ $booking->id }}" name="jam" value="{{ $booking->jam }}" required min="{{ date('H:i') }}">
                        </div>
                        <div class="mb-3">
                            <label for="status-edit{{ $booking->id }}" class="form-label">Status</label>
                            <select class="form-select" id="status-edit{{ $booking->id }}" name="status" required>
                                <option value="Diproses" {{ $booking->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="Diterima" {{ $booking->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="Ditolak" {{ $booking->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
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