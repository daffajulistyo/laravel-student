@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Mahasiswa</h3>

        </div>
        <div class="card-body">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('mahasiswa.store') }}" method="post">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" required>
                    Nim <input type="text" name="nim" required>
                    Tanggal Lahir <input type="date" name="tgl_lahir" required>
                </ul>
                <br>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection