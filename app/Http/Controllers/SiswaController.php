<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(request $REQUEST){
        if($REQUEST->has('cari')){
            $data_siswa = \App\Siswa::where('firstname','LIKE','%'.$REQUEST->cari.'%')->get();
        }else{
            $data_siswa = \App\Siswa::all();
        }
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(request $REQUEST){
        \App\Siswa::create($REQUEST->all());
        return redirect('/siswa')->with('sukses','Data Berhasil di input');
        // return $REQUEST -> all();
    }

    public function edit($id){
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }

    public function update(request $REQUEST,$id){
        $siswa = \App\Siswa::find($id);
        $siswa -> update($REQUEST->all());
        return redirect('/siswa')->with('sukses','data berhasil di update');
    }

    public function delete($id){
        $siswa = \App\Siswa::find($id);
        $siswa -> delete($siswa);
        return redirect('/siswa')->with('sukses','Data Berhasil Dihapus!');
    }
}
