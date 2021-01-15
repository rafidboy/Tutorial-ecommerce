@extends('master')
@section('content')
  


{{-- carousel --}}
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $key => $item )
            <div class="carousel-item @php if($key==0) echo 'active' @endphp">
            <img class=" mt-1 mb-1 rounded mx-auto d-block" height="500" width="700"  src="{{$item['galeri']}}"  >
            <div class="carousel-caption slider-text">
              <h3>{{$item['nama']}}</h3>
            <p>{{$item['deskripsi']}}</p>
            </div>   
          </div>
            @endforeach
        <a class=" carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

     
<!--Main layout-->
  <div  class="produk-home ">
    {{-- yang di butuhkan --}}
    <section class=" ">
    <div class="row pt-4">
      <div class="col-6">
        <h1 class=" text-left font-weight-bold ">Produk </h1>
      </div>
      <div class="col-5">
        <nav class="float-right navbar bg-1" style="width: 10rem">
          <div class="">
            <a type="button" class="" data-toggle="collapse" data-target="#myNavbar">
              <i class="text-dark fas fa-align-justify" style="font-size: 20px;"> Kategori </i>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav ml-4 mt-2">
              <li class="text-white">
                {{-- <i class="fas fa-tshirt" style="font-size: 10px;"></i> --}}
                <a class="nav-link  text-putih " href="celana">Celana</a>
              </li>
              <li>
                <a class="nav-link  text-putih" href="kaos">Kaos</a>
              </li>
              <li>
                <a class="nav-link  text-putih" href="jaket">Jaket</a>
              </li>
            </ul>
          </div>
        </nav>
  
        {{-- <div class="dropdown nav-product">
          <button class="dropbtn">Kategori</button>
          <div class="dropdown-content">
          <a href="celana">Celana</a>
          <a href="jaket">Jaket</a>
          <a href="kaos">Kaos</a>
          </div>
        </div> --}}
      </div>
    </div>      
      <div class="row " style="margin-top: 5%">
        {{-- foreach --}}
        @foreach ($products as $item)
        <div class="col-xl-3 col-md-6 mb-4" >
          <div  class=" card  border-0 shadow">
            <!--Card image-->
              <a href="detail/{{$item['id']}}" >
                <img src="{{$item['galeri']}}" class="zoom card-img-top" alt="">
                <div class="text-center card-body text-dark mt-4">
                  <h5 class="card-title mb-0">{{$item['nama']}}</h5>
                  <strong class="card-text text-black-50">${{$item['price']}}</strong>
                </div>
              </a>
            <!--Card content-->

          </div>
        </div>
        @endforeach
      </div>
    </section>

    <!--Pagination-->
    <!--Pagination-->
    {{-- end --}}
    
  </div>
  {{ $products->links() }}

  <section class="  padding-y-sm">
    <div class="container">
    <header class="section-heading">
      <h3 class="section-title">Our Brands</h3>
    </header><!-- sect-heading -->
    
    <div class="row">
      <div class="col-md-2 mr-1 col-6">
        <figure class="box item-logo">
          <a href="#"><img height="120px" width="180px" src="https://imageshack.com/i/pnyN2xzsj"></a>
        </figure> <!-- item-logo.// -->
      </div> <!-- col.// -->
      <div class="col-md-2  col-6">
        <figure class="box item-logo">
          <a href="#"><img height="120px" width="180px" src="https://imageshack.com/i/pnyN2xzsj"></a>
        </figure> <!-- item-logo.// -->
      </div> <!-- col.// -->
      <div class="col-md-2  col-6">
        <figure class="box item-logo">
          <a href="#"><img height="120px" width="180px" src="https://imageshack.com/i/pnyN2xzsj"></a>
        </figure> <!-- item-logo.// -->
      </div> <!-- col.// -->
      <div class="col-md-2 col-6">
        <figure class="box item-logo">
          <a href="#"><img height="120px" width="180px" src="https://imageshack.com/i/pnyN2xzsj"></a>
        </figure> <!-- item-logo.// -->
      </div> <!-- col.// -->
      <div class="col-md-2 col-6">
        <figure class="box item-logo">
          <a href="#"><img height="120px" width="180px" src="https://imageshack.com/i/pnyN2xzsj"></a>
        </figure> <!-- item-logo.// -->
      </div> <!-- col.// -->
      

    </div> <!-- row.// -->
    </div><!-- container // -->
    </section>


@endsection
