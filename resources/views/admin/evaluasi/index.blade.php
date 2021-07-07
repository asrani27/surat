@extends('layouts.app')

@section('content')
<form method="post" action="/laporan/evaluasi">
  @csrf
<div class="row">
  <div class="col-lg-3 col-6">
    <select class="form-control" name="tahun">
      <option value="">-Pilih Periode-</option>
      <option value="2022">2022</option>
      <option value="2021">2021</option>
      <option value="2020">2020</option>
      <option value="2019">2019</option>
    </select>
  </div>
  <div class="col-lg-3 col-6">
    <select class="form-control" name="pegawai_id">
      <option value="">-Pilih Pegawai-</option>
      @foreach ($pegawai as $item)
          <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-lg-3 col-6">
    <button type="submit" class="btn btn-danger">Print</button>
  </div>
  <div class="col-lg-3 col-6">
    
  </div>
</div>
</form>
<br/>
<div class="row">
    <div class="col-12">
        <a href="/superadmin/evaluasi/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a>
        
        
        <br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Evaluasi Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>Periode Tahun</th>
              <th>NIP/Nama Pegawai</th>
              <th>Nama Aspek</th>
              <th>Indikator</th>
              <th>Nilai</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no =1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->tahun}}</td>
                    <td>{{$item->pegawai->nip}} <br/>{{$item->pegawai->nama}} </td>
                    <td>{{$item->kpi->nama_aspek}}</td>
                    <td>{{$item->kpi->indikator}}</td>
                    <td>{{$item->nilai}}</td>
                    <td>
                      <form action="/superadmin/evaluasi/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i> Delete</button> 
                        <a href="/superadmin/evaluasi/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>    
                      </form>
                    </td>
                    </tr>
                @endforeach
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
@endsection