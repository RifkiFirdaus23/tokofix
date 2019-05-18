<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function detail(){
    $transaksi=DB::table('transaksi')->get();
    $id_order = DB::table('transaksi')->select('id_order')->count()+1;

      return view('detail', ['transaksi' => $transaksi]);
    }
    public function hapus($id){

        $hapus = DB::table('transaksi')->where('id', $id)->delete();

        return redirect('detail');
    }


}
