@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/superadmin/suratmasuk/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a>
        
        <a href="/laporan/suratmasuk" class="btn btn-danger" target="_blank"><strong><i class="fas fa-print"></i> Print</strong></a>
        <br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Surat Masuk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>No Surat</th>
              <th>Pengirim</th>
              <th>Jenis</th>
              <th>Perihal</th>
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
                    <td>{{$item->pengirim}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->perihal}}</td>
                    <td>
                      <form action="/superadmin/suratmasuk/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i> Delete</button> 
                        <a href="/superadmin/suratmasuk/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>    
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