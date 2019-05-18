<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/Bootstrap.css')}}">

    <title>Detail Pembeli</title>
  </head>
  <body background="img/d.jpg">
    <!-- Image and text -->


    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card shadow-lg my-5">
              <div class="card-header">
                <!-- https://www.freepik.com/free-photo/high-angle-view-fresh-ingredients-raw-italian-pasta_4085702.htm#index=29 -->
                <div class="text-center">
                  <h3 class="display-4.9 font-weight-bold my-2">~ Detail Pembeli ~</h3>
                  <p class="lead">Tempat beli Laptop terpercaya!</p>
                </div>
              </div>

    		<div class="card-body px-5 py-3">

    			<div class="row mx-3">


      				 	<div class="card shadow-sm"><br>
                    <img src="/img/s.jpg" alt="" style="height:210px; width:220px;">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#z">
                   Detail Pembelian
                 </button>

                 <!-- Modal -->

                 <div class="modal fade" id="z" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">

                         <h5 class="modal-title" id="exampleModalLongTitle">Detail Pembelian</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                          @foreach($transaksi as $a)
                       <div class="modal-body">
                          <p class="card-text col-12">Detail Pembelian: {{$a -> nama}}<br><hr></p>
                          <p class="card-text col-12">Alamat : {{$a->alamat}}</p>
                          <p class="card-text col-12">Email : {{$a -> email}}<br></p>
                          <p class="card-text col-12">No : {{$a -> telp}}<br></p>
                          <p class="card-text col-12">Total : {{$a ->total}}<br></p>
                          <a href="/detail/hapus/{{$a -> id }}" class="btn btn-danger">Hapus</a>
                       </div>
                       @endforeach

                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       </div>
                     </div>
                   </div>
                 </div>

      						  <button type="submit" name="id" value="" class="card-footer btn" >Hapus</button>
      						</div>

    			</div>
          <br>
    		<div class="card-footer bg-dark text-light py-0">
              <p class="text-center my-3">&copy; 2019 Rifky</p>
            </div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  </body>
</html>
