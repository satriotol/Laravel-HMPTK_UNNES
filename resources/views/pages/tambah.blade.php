@extends('layouts.default')
@section('content')
<div class="container">
    <form method="post" action="/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">
            @if($errors->has('nama'))
            <div class="text-danger">
                {{ $errors->first('nama')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
            @if($errors->has('alamat'))
            <div class="text-danger">
                {{ $errors->first('alamat')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>foto</label> <br>
            <input type="file" name="foto">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
</div>
@stop
