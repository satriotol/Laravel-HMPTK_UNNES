@extends('layouts.default')
@section('content')
<br>
<div class="container">
    <ul class="text-center">
        @if (session('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
        @endif
        <a href="/tambah" class="btn btn-primary">Input Data Baru</a>
        <br><br>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>
                        <div class="image-container">
                            <img class="post-image" src="{{ url('/data_file/'.$p->foto) }}">
                            <div class="middle">
                                <div class="overlay-text">
                                    <a class="btn btn-primary" href="/editfoto/{{ $p->id }}">Ganti<br>Foto</a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>
                        <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
</div>
@stop
