@extends('layouts.default')
@section('content')
<form method="post" enctype="multipart/form-data" action="/updatefoto/{{ $pegawai->id }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <div class="image-container">
            <img class="center preview-image" src="{{ url('/data_file/'.$pegawai->foto) }}">
        </div>
        <label>foto</label> <br>
        <input type="file" name="foto" value="{{ $pegawai->foto }}">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br />
            @endforeach
        </div>
        @endif
    </div>
    <div class="form-group text-center">
        <input type="submit" class="btn btn-success" value="Simpan">
        |
        <a href="/ik2a" class="btn btn-danger"
            onclick="return confirm('Anda yakin ingin untuk membatalkan input data?')">Batal</a>
    </div>
</form>
@stop
