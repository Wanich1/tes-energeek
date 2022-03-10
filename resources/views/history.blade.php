@extends('layouts.data')

@section('container')
<div class="container-fluid">
    <section class="content-header">
        <div class="container">
          <div class="row text-center rounded bg-secondary py-4 my-3">
              <div class="col-3">
                  <p class="m-0">Kode Barang</p>
                  <p class="detail-item">BRG-001</p>
              </div>
              <div class="col-3">
                  <p class="m-0">Nama Barang</p>
                  <p class="detail-item">Komputer</p>
              </div>
              <div class="col-3">
                  <p class="m-0">Total Stok</p>
                  <p class="detail-item">10</p>
              </div>
              <div class="col-3">
                  <p class="m-0">Stok Minimal</p>
                  <p class="detail-item">1</p>
              </div>
          </div>
        <div class="row mb-2">
          <div class="col-3">
            <h1>History Transaksi</h1>
          </div>
          <div class="col-6">
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
                        <div class="">
                            <label class="col-form-label">Jenis Transaksi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Menambah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Mengurangi</label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label">Jumlah</label>
                        <input id="jumlah" type="text" class="form-control"  placeholder="Masukkan Jumlah">
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
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered text-center table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Transaksi</th>
                        <th>Jumlah</th>
                    </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>BRG-001</td>
                        <td>01-01-2022</td>
                        <td> Menambah</td>
                        <td>10</td>
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
@endsection
