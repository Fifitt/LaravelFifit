@extends('template.default')

@php

   $title = "Data Siswa";
   $preTitle = "Edit Data Siswa";

@endphp

@section('body') 

<div class="card">
    <div class="card-body">

        <form action="{{ route('siswas.update' , $siswa->id) }}" class=""method="post">
        @csrf
        @method('PUT')
<div class="mb-3">
             <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" name="example-text-input" placeholder="Tulis Nama Sekolahmu" value="{{$siswa->nama_sekolah}}">
    </div>

    <div class="mb-3">
             <label class="form-label">Alamat Sekolah</label>
            <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Tulis Alamat Sekolahmu" value="{{$siswa->alamat_sekolah}}">
    </div>

    <div class="mb-3">
             <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Tulis Nama Jurusan" value="{{$siswa->nama_jurusan}}">
    </div>

    <div class="mb-3">
             <label class="form-label">Jumlah Guru</label>
            <input type="text" name="jumlah_guru" class="form-control" name="example-text-input" placeholder="Tulis Jumlah Guru" value="{{$siswa->jumlah_guru}}">
    </div>

    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">


</div>
</form>
</div>
</div>

@endsection

