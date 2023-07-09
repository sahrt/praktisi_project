<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class tambahBarangController extends Controller
{
    public function addBarang (Request $request){
        $request->validate([
            'kode_barang'=>'require|max=6',
            'nama_barang'=>'require',
            'produksi' => 'require',
            'tanggal_produksi' => 'require',
            'expired' => 'require',
            'jumlah' => 'require',
            'type' => 'require',
        ]);
        $modal =  new Gudang();
        $modal->kode_barang = $request->kode_barang;
        $modal->nama_barang = $request->nama_barang;
        $modal->produksi = $request->produksi;
        $modal->tanggal_produksi = $request->tanggal_produksi;
        $modal->expired = $request->expired;
        $modal->jumlah = $request->jumlah;
        $modal->type = $request->type;

        $result = $modal->save();
        if($result ==  true){
          return
        }
    }
}