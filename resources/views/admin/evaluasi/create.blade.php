@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Evaluasi Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/superadmin/evaluasi">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tahun</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pegawai</label>
                  <div class="col-sm-10">
                    <select name="pegawai_id" class="form-control">
                      @foreach ($pegawai as $item)
                      <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Aspek & Indikator KPI</label>
                  <div class="col-sm-10">
                    <select name="kpi_id" class="form-control">
                      @foreach ($kpi as $item)
                      <option value="{{$item->id}}">{{$item->nama_aspek}} - {{$item->indikator}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nilai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nilai">
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