<?php

namespace App\Http\Controllers;


use App\Models\siswa;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    public function index()
    {
        $siswas =Siswa::all();
        return view('siswas.index') ->with ('siswas',$siswas);
    }

    public function tambah()
    {
        $siswas =Siswa::all();
        return view('siswas.tambah') ->with ('siswas',$siswas);
    }
    public function simpan(Request $request)
    {
        $siswa =new Siswa();
        
        $siswa->nama_sekolah= $request->nama_sekolah;
        $siswa->alamat= $request->alamat;
        $siswa->jurusan= $request->jurusan;
        $siswa->jumlah_guru= $request->jumlah_guru;

        $siswa->save();

        return redirect()->route('siswas.index');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);

       return view('siswas.edit' , [
        'siswa' => $siswa,
       ]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);

        $siswa->nama_sekolah= $request->nama_sekolah;
        $siswa->alamat= $request->alamat;
        $siswa->jurusan= $request->jurusan;
        $siswa->jumlah_guru= $request->jumlah_guru;

        $siswa->save();

        return redirect()->route('siswas.index');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        $siswa->delete();

        return redirect()->route('siswas.index');
    }
}

