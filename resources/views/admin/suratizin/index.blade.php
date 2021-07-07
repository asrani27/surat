@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/superadmin/suratizin/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a>
        
        <a href="/laporan/suratizin" class="btn btn-danger" target="_blank"><strong><i class="fas fa-print"></i> Print</strong></a>
        <br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Surat Perizinan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>No Surat</th>
              <th>perihal</th>
              <th>Kegiatan</th>
              <th>Tanggal Kegiatan</th>
              <th>Jam Kegiatan</th>
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
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->no_surat}} </td>
                    <td>{{$item->perihal}}</td>
                    <td>{{$item->kegiatan}}</td>
                    <td>{{$item->tanggal_kegiatan}}</td>
                    <td>{{$item->jam_kegiatan}}</td>
                    <td>
                      <form action="/superadmin/suratizin/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i> Delete</button> 
                        <a href="/superadmin/suratizin/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>    
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