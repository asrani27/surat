@extends('layouts.app')

@push('css')
    
@endpush
@section('title')
  <strong>SELAMAT DATANG DI APLIKASI PENILAIAN KINERJA PEAGWAI</strong>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="/theme/dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">{{Auth::user()->name}}</a></span>
                  <span class="description">Jabatan</span>
                </div>
              </div>    
        </div>
    </div>
</div>

        
@endsection

@push('js')

@endpush