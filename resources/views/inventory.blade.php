@extends('layouts.data')

@section('container')
<div class="container-fluid">
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-2">
            <h1>Inventory</h1>
          </div>
          <div class="col-6">
              <button class="btn btn-danger" data-toggle="modal" data-target="#tambah">Tambah data</button>
          </div>
        </div>
        <div class="modal" id="tambah" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Tambah data baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="mb-5">
                    <div class="form-group mb-3">
                        <label class="col-form-label">Kode Barang</label>
                        <input id="kode" type="text" class="form-control"  placeholder="Masukkan Kode barang">
                    <div class="form-group-append">
                    </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Barang</label>
                        <input id="nama" type="text" class="form-control"  placeholder="Masukkan nama barang">
                    <div class="form-group-append">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label class="col-form-label">Srok Minimal</label>
                                <input id="stok" type="text" class="form-control" placeholder="Contoh: 1">
                            <div class="form-group-append">
                            </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label class="col-form-label">Stok Awal</label>
                                <input id="stok" type="text" class="form-control" placeholder="Contoh: 1">
                            <
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Tambah</button>
            </div>
            </div>
            </div>
        </div>
      </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Inventory</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered text-center table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Minimal Stok</th>
                        <th>Stok</th>
                        <th>Status Stok</th>
                        <th>Aksi</th>
                    </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>1</td>
                        <td>BRG-001</td>
                        <td>Komputer</td>
                        <td>10</td>
                        <td>4</td>
                        <td>Dibawah Minimal</td>
                        <td>X</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>



    <!-- /.login-box -->
</div>
</div>
@endsection
