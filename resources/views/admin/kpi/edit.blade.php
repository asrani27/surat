@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit KPI</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/superadmin/kpi/{{$data->id}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Aspek</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_aspek" value="{{$data->nama_aspek}}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">indikator</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="indikator" value="{{$data->indikator}}">
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