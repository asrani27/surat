@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Surat Peminjaman</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/superadmin/suratpinjam">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal" value="{{\Carbon\Carbon::today()->format('Y-m-d')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Surat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_surat">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="perihal">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat Tujuan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tujuan">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kegiatan">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal kegiatan</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_kegiatan" value="{{\Carbon\Carbon::today()->format('Y-m-d')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jam Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jam_kegiatan">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jumlah Barang Di Pinjam</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan/Detail</label>
                  <div class="col-sm-10">
                    <textarea name="keterangan" class="form-control"></textarea>
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@endsection