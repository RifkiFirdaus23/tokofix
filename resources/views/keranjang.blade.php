<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="{{asset('css/Bootstrap.css')}}">
  </head>
  <body>
    <div class="container">
      <nav class="nav bg-dark">
        <a class="nav-link active" href="#">Keranjang Belanja</a>
        <a class="nav-link" href="#">Home</a>
      </nav>
      <form class="" action="index.html" method="post">

      </form>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($keranjang as $a)
          <tr>
            <th scope="row">1</th>
            <td>{{$a -> gambar}}</td>
            <td>{{$a -> nama}}</td>
            <td>{{$a -> harga}}</td>
            <td><a href="#" class="btn btn-danger">Hapus</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="{{asset('js/Bootstrap.js')}}"></script>
  </body>
</html>
