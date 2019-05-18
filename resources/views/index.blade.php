
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Laptop Cell</title>
  </head>

  <body background="img/d.jpg">
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand ya " href="#">Leptop Cell</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>


                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#a">
                        <img src="img/g.png" alt="" style="height:30px; float:left">
                    </button>
                    <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><img src="img/g.png" alt="" style="height:30px; float:left"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>


                          <div class="modal-body" class="float-left">

                            @foreach($keranjang as $b)
                            <input type="hidden" name="id_order" value="{{$b->id_order}}">
                            <img src="{{'img/'.$b->gambar}}" alt="" style="height:80px;">
                            <a href="/barang/hapus/{{$b->id}}" class="btn btn-danger">Hapus</a>


                            @endforeach
                            <br>
                            <p class="card-text col-12">Total : {{$total = DB::table('barang')->join('keranjang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_order)->sum('harga')}}</p>

                            <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          </div>
                        </div>
                      </div>
                    </div>
                </li>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="/cari" method="get">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>


    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card shadow-lg my-4">

              <div class="card-header">
                <img src="/img/Leptop Cell.png" alt="">
              </div>



    		<div class="card-body px-0 py-3">
    			<div class="row mx-3">
              @foreach ($barang as $a)
      					<form action="/order" method="post" class="col-lg-4 col-md-6 mb-4">
                  @csrf
      					  	<div class="card shadow-sm"><br>
                  <input type="hidden" name="id_order" value="{{$id_order}}">
      						  <img class="card-img-top" name="gambar" src="{{'img/'.$a->gambar}}"  style="height:220px;">
      						  <div class="card-body pb-1">
      						    <h4 class="card-title">{{$a -> nama}}</h4>
      						    <div class="form-group row px-3">
      						      <p class="card-text col-6">Rp. {{$a -> harga}}</p>
      						    </div>
                      <div class="form-group row px-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                          Deskripsi Barang
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Deskripsi Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="card-text col-12">Deskripsi Barang: {{$a -> nama}}<br><hr>{{$a -> deskripsi}}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                     </div>
      						  </div>
      						  <button type="submit" name="id" value="{{$a->id_barang}}" class="ca card-footer btn ">Tambah Ke Keranjang</button>
      						</div>
      					</form>
                @endforeach
    			</div>
    			<div class="row justify-content-center my-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              CheckOut
            </button>
    			</div>
    		</div>
        <div class="fot">
          <div class="card-footer text-light py-1">
                <p class="text-center my-3">&copy; 2019 Rifky</p>
          </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Diri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/checkout" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="nama">Atas nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label for="nama">Alamat Lengkap</label>
                        <input type="text" name="alamat" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                      </div>
                      <div class="form-group">
                        <label for="telp">No.Telepon</label>
                        <input type="text" name="telp" class="form-control" id="telp" placeholder="+62" required>
                      </div>
                      <input type="hidden" name="id_order" value="{{$id_order}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">CheckOut</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>

            <!--Start of Tawk.to Script-->
            <!--Start of Tawk.to Script-->
            <!--Start of Tawk.to Script-->
            <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 10912902;
        (function() {
          var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
          lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
        </script>
        <noscript>
        <a href="https://www.livechatinc.com/chat-with/10912902/" rel="nofollow">Chat with us</a>,
        powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
        </noscript>
    <!-- End of LiveChat code -->
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->

  <!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
