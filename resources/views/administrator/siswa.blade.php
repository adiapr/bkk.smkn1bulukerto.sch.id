@extends('administrator.pages.layouts')

@section('title')
    Siswa
@endsection

@section('sidebar')
	Data Siswa
@endsection

@section('content')

{{-- memasukkan sweet alert --}}
@include('sweetalert::alert')


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
                <h4 class="card-title pull-left">List Data</h4>
                {{-- <button type="button" class="btn btn-success btn-sm pull-right " data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-file-excel"></i> Import Excel
                </button> &nbsp;
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm pull-right mr-2" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus-circle"></i> Tambah Data
                </button>&nbsp; --}}

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/tambahuser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> <b> Tambah User </b></h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" name="nama" required placeholder="Masukkan nama" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" required placeholder="email@domain.xx" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" required placeholder="masukkan password" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="card-body">
                @if (count($errors)>0)
                    <ul class="alert alert-danger text-danger" style="list-style: none">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                @endif
				<div class="table-responsive">
					<table id="basic-datatables" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
                                <th>Kelas</th>
                                <th>Lulusan</th>
								<th>Tanggal Lahir</th>
								<th>Alamat</th>
                                <th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Nama</th>
                                <th>Kelas</th>
                                <th>Lulusan</th>
								<th>Tanggal Lahir</th>
								<th>Alamat</th>
                                <th>Status</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
                            @foreach ($user as $data)
                            <tr>
								<td>{{ ++$no }}</td>
								<td>{{ $data->name }}</td>
								<td>
                                    {{ !empty($data->siswa) ? $data->siswa->kelas:''  }}
                                </td>
								<td>{{ !empty($data->siswa) ? $data->siswa->lulusan:''  }}</td>
								<td>{{ !empty($data->siswa) ? $data->siswa->tgl_lahir:''  }}</td>
                                <td>{{ !empty($data->siswa) ? $data->siswa->alamat:''  }}</td>
                                <td>{{ !empty($data->siswa) ? $data->siswa->status:''  }}</td>
                                <td>
                                    <div style="width:200px;"></div>
                                    <form action="/hapususer/{{ $data->id }}" method="post">
                                        @csrf
                                        <a  href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{ $data->id }}"> <i class="fa fa-edit"></i> Edit </a>
                                        <button class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus ?')"> <i class="fa fa-trash"></i> Hapus </button>
                                    </form>
                                    <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="/edituser/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"> <b> Tambah User </b></h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Nama</label>
                                                                    <input type="text" value="{{ $data->name }}" name="nama" required placeholder="Masukkan nama" class="form-control form-control-sm">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Email</label>
                                                                    <input type="email" value="{{ $data->email }}" name="email" required placeholder="email@domain.xx" class="form-control form-control-sm">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Password</label>
                                                                    <input type="password" name="password" placeholder="Kosongi jika tidak ingin diupdate" class="form-control form-control-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
</div>
@endsection
