@extends('master')

@section('content')
    <!-- Page Content -->
    <div class="ml-3 mt-2 mr-3">
      <style>
        .jumbotron{
          background-image: url("celana1.jpg");
          background-size:cover;
        }
        .text{
          color:steelblue;
        }
      </style>
      <!-- Jumbotron Header -->
      <header class="jumbotron ">

          <div class="text-center">
            <h1 class="text-white display-1">Jaket</h1>
            <p class="lead text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </div>
        <div class="mt-3 text-center ">
            <a href="#" class="btn btn-info shadow-lg display-4 text-dark ml-2">Pria</a>
            <a href="#" class="btn btn-info shadow-lg display-4 text-dark mr-2">Wanita</a>
        </div>
      </header>

      <!-- Page Features -->
      <div class="row ">
        @foreach ($celana as $item)
        <div class="col-lg-3 col-md-6 mb-4 mt-1">
          <div class="h-100">
          <a href="detail/{{$item['id']}}"><img class="card-img-top" src="{{$item['galeri']}}"></a>
          </div>
        </div>  
        @endforeach
    </div>
      
      
    
@endsection