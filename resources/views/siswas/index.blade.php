@extends('template.default')

@php

   $title = "Data Siswa";
   $preTitle = "Semua Data";

@endphp

   @push('page-action')
     <a href="{{ route('siswas.tambah') }}" class="btn btn-primary">Tambah Data</a>
     @endpush

@section('body') 

    <div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Jumlah Guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($siswas as $siswa)
                        <tr>
                          <td>{{$siswa ->nama_sekolah}}</td>
                          <td>{{$siswa ->alamat}}</td>
                          <td>{{$siswa ->jurusan}}</td>
                          <td>{{$siswa ->jumlah_guru}}</td>              
                          <td>
                            <a href="{{ route('siswas.edit', $siswa->id) }}">Edit</a>
                            <form action="{{ route('siswas.destroy', $siswa->id) }}"method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                            </form> 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection

