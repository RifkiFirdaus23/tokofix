<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class BarangController extends Controller
{
    public function index()
    {

      //mengambil data dari table barang
      $id_order = DB::table('transaksi')->select('id_order')->count()+1;
      $keranjang = DB::table('keranjang')->join('barang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_order)->get();
      $total = DB::table('barang')->join('keranjang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_order)->sum('harga');
      $barang = DB::table('barang')->get();
      $transaksi = DB::table('transaksi')->get();




      //mengirim data data barang ke index
      return view('index', ['barang' => $barang, 'transaksi' => $transaksi,'keranjang' => $keranjang, 'id_order' =>  $id_order,]);

    }

    public function cari(Request $request){
      $cari = $request->cari;
      $barang = DB::table('barang')->where('nama','like',"%".$cari."%")->paginate();
      $id_order = DB::table('transaksi')->select('id_order')->count()+1;
      $keranjang = DB::table('keranjang')->join('barang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_order)->get();
      $total = DB::table('barang')->join('keranjang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_order)->sum('harga');
      $barang = DB::table('barang')->get();
      $transaksi = DB::table('transaksi')->get();
        return view('index', ['barang' => $barang, 'transaksi' => $transaksi,'keranjang' => $keranjang, 'id_order' =>  $id_order,]);

    }


    public function order(Request $request)

    {
      $transaksi = DB::table('transaksi')->get();
        DB::table('keranjang')->insert([
        'id_barang'=>$request->id,
        'id_order'=>$request->id_order
      ]);
      if ($transaksi) {

        echo "<script>alert('Pesanan Sudah Dikeranjang, Pilih Checkout Bila Ingin Membeli')</script>";
        echo "<script>location='/'</script>";
      }

    }

    public function checkout(Request $request){
      $id_o= $request->id_order;
      $total = DB::table('barang')->join('keranjang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_o)->sum('harga');
      $input = DB::table('transaksi')->insert([
      'nama'=>$request->nama,
      'alamat' =>$request->alamat,
      'email'=>$request->email,
      'telp'=>$request->telp,
      'total'=>$total,
      'id_order'=>$request->id_order
      ]);
      if ($input) {
        $hapus= DB::table('keranjang')->where('id_order', $id_o)->delete();
        echo "<script>alert('CheckOut Telah Berhasil, Tunggu Konfirmasi Oleh Admin Melalui Email')</script>";
        echo "<script>location='/'</script>";

      }

      return redirect('/');
    }

    public function hapus($id){
      DB::table('keranjang')->where('id', $id)->delete();

      return redirect('/');

    }
}
