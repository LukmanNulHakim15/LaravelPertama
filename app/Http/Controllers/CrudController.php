<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#harus ditambahkan package untuk crud
use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{
    public function jajalTambahkan()
    {
        // tampilData
        $data_barang = DB::table('data_barang')->get();
        return view('crud.crud',['data_barang'=> $data_barang]);
    }

    // public function simpanData(Request $request)
    // {
    //    dd($request->all()); ini berfungsi untuk melihat apakah dapat mengirim data dari frontend ke controller
    // }

    public function simpanData(Request $request)
    {
        // dd($request->kode_barang);
      $save = DB::insert('insert into data_barang (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama]);
      if($save){
       return redirect()->route('cr.d');
        echo '<script type="text/javascript">';
        echo 'alert("Anda berhasil simpan data");';
        echo '</script>';
      }

    }
}

