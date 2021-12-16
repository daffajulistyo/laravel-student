@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Mahasiswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route ('mahasiswa.index') }}">Kembali</a>
                <div class="row ml-2">
                    <h4 class="col-4">Nama</h4>
                    <h4>: {{$mahasiswa->nama}}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">Nim</h4>
                    <h4>: {{$mahasiswa->nim}}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">Tanggal Lahir</h4>
                    <h4>: {{$mahasiswa->tgl_lahir}}</h4>
                </div>
        </div>
    </div>

</div>

@endsection