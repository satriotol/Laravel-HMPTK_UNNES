@extends('layouts.default')
@section('content')
<div>
    <form method="post" action="/update/{{ $pegawai->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .."
                value=" {{ $pegawai->nama }}">
            @if($errors->has('nama'))
            <div class="text-danger">
                {{ $errors->first('nama')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"
                placeholder="Alamat pegawai .."> {{ $pegawai->alamat }} </textarea>
            @if($errors->has('alamat'))
            <div class="text-danger">
                {{ $errors->first('alamat')}}
            </div>
            @endif
        </div>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
</div>
@stop
