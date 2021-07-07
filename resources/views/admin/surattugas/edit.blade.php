@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit Surat tugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/superadmin/surattugas/{{$data->id}}">
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
                  <label class="col-sm-2 col-form-label">Isi Surat</label>
                  <div class="col-sm-10">
                    <textarea name="isi_surat" rows="3" class="form-control"  value="{{$data->isi_surat}}">{{$data->isi_surat}}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat" value="{{$data->tempat}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama instansi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_instansi" value="{{$data->nama_instansi}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat Instansi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_instansi" value="{{$data->alamat_instansi}}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pemberi Tugas</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pemberi_tugas" required>
                      <option value="">-Pilih-</option>
                      @foreach ($pegawai as $item)
                          <option value="{{$item->id}}" {{$item->id == $data->pemberi_tugas ? 'selected':''}}>{{$item->nip}} - {{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Penerima Tugas</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="penerima_tugas" required>
                      <option value="">-Pilih-</option>
                      @foreach ($pegawai as $item)
                          <option value="{{$item->id}}" {{$item->id == $data->penerima_tugas ? 'selected':''}}>{{$item->nip}} - {{$item->nama}}</option>
                      @endforeach
                    </select>
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