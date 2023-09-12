@extends('layouts.master')
@section('dashboard-link')
    First
@endsection
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="form-group row">
                        <h5 class="col-sm-1.5">Konten CRUD</h5>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="border-radius: 12px"><i class="nav-icon fas fa-water"></i> Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-blok">
                    <div class="table table-response">
                        <table class="table dt-response nowrap table-striped table-bordered" style="width: 100% !important">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barng</th>
                                    <th>Nama Barang</th>
                                    <th>action</th>
                                </tr>
                                @foreach ($data_barang as $key => $data)
                                <tr>
                                  <td>{{ $key + 1 }}</td> <!-- Nomor urutan -->
                                      <td>{{ $data->kode_barang }}</td> <!-- Kolom Kode Barang -->
                                      <td>{{ $data->nama_barang }}</td>
                                      <td>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                        <a href="#" class="badge badge-warning">Update</a>
                                      </td>
                                    </tr>
                                    @endforeach
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barng</th>
                                    <th>Nama Barang</th>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('cr.simpan') }}" method="POST">
          @csrf
          <!--Di laravel wajib menggunakan @csrf dibawah tag form-->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <button id="simpan" type="submit" hidden></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="$('#simpan').click()">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection