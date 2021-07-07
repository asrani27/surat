@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit Surat Izin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/superadmin/suratizin/{{$data->id}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Surat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_surat" value="{{$data->no_surat}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="perihal" value="{{$data->perihal}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tujuan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tujuan" value="{{$data->tujuan}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kegiatan" value="{{$data->kegiatan}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal kegiatan</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_kegiatan" value="{{$data->tanggal_kegiatan}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jam Kegaitan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jam_kegiatan" value="{{$data->jam_kegiatan}}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat" value="{{$data->tempat}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
              </div>
              <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@endsection