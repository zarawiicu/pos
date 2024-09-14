<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
    // $data = [
    //     'kategori_kode' => 'SNK',
    //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     'created_at' => now(),
    //     'updated_at' => now()
    // ];

    // DB::table('m_kategori')->insert($data);
    //return 'Berhasil menambahkan data baru';

    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    // return 'update data berhasil, Jumlah data yang diupdate: ' . $row . 'baris';

    //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //return 'hapus data berhasil, Jumlah data yang diupdate: ' . $row . 'baris';

    $data = DB::select('select * from m_kategori');
    return view('kategori')->with('data', $data);
    }
}
