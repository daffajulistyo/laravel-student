@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Mahasiswa</h3>

        </div>
        <div class="card-body">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="nama" required value="{{ $mahasiswa->nama}}">
                    Nim <input type="text" name="nim" required value="{{ $mahasiswa->nim}}">
                    Tanggal Lahir <input type="text" name="tgl_lahir" required value="{{ $mahasiswa->tgl_lahir}}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection