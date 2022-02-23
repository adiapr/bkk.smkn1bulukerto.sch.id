@extends('administrator.pages.layouts')

@section('title')
    Lowongan Kerja
@endsection

@section('sidebar')
	Data Lowongan
@endsection

@section('content')

{{-- memasukkan sweet alert --}}
@include('sweetalert::alert')


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
                <h4 class="card-title pull-left">List Data</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus-circle"></i> Tambah Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="/tambahlowongan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> <b> Tambah Lowongan </b></h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Perusahaan</label>
                                                <input type="text" name="perusahaan" required placeholder="Masukkan nama perusahaan" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Lokasi</label>
                                                <input type="text" name="lokasi" required placeholder="Masukkan lokasi perusahaan" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Posisi</label>
                                                <input type="text" name="posisi" required placeholder="Masukkan posisi perusahaan" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Lulusan</label>
                                                <input type="text" name="lulusan" required placeholder="TKR, RPL, Akuntansi dll" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Batas Pendaftaran</label>
                                                <input type="date" name="batas" required class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Logo Perusahaan (*gambar square)</label>
                                                <input type="file" name="logo" required class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Deskripsi</label>
                                                <textarea name="deskripsi" required rows="10" class="form-control form-control-sm" placeholder="Anda bisa menggunakan tag html untuk membuat deskripsi agar lebih bagus"></textarea>
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
				<div class="table-responsive">
					<table id="basic-datatables" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>#</th>
								<th>Perusahaan</th>
								<th>Lokasi</th>
								<th>Posisi</th>
								<th>Lulusan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Perusahaan</th>
								<th>Lokasi</th>
								<th>Posisi</th>
								<th>Lulusan</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
                            @foreach ($datalowongan as $data)
                            <tr>
								<td>{{ ++$no }}</td>
								<td>{{ $data->perusahaan }}</td>
								<td>{{ $data->lokasi }}</td>
								<td>{{ $data->posisi }}</td>
								<td>{{ $data->lulusan }}</td>
								<td>
                                    <div style="width:200px;"></div>
                                    <button class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </button>
                                    <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
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
