<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function keranjang(){
      $keranjang = DB::table('keranjang')->get();
      $barang = DB::table('barang')->get();
    return view('keranjang', ['keranjang' => $keranjang, 'barang'=>$barang]);
  }


}
