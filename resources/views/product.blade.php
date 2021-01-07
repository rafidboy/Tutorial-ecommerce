@extends('master')
@section('content')
<div class="custom-product">
    <div id="carouselExampleIndicators" class="ml-4 carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}} ">
                <a href="detail/{{$item['id']}}">
                <img src="{{$item['galeri']}}" class="slider-img" style="margin-left: 20%" alt="...">
                <div class="carousel-caption slider-text">
                <h3 class="bg-dark">{{$item['nama']}}</h3>
                <p>{{$item['deskripsi']}}</p>
                </div>
                </div>
                @endforeach
            </a>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Product</h3>
        @foreach ($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['galeri']}}" class="trending-image" >
                <div class="">
                    <h3 class="bg-dark">{{$item['nama']}}</h3>
                </div>
            </div>
            @endforeach
        </a>
    </div>
</div>    

@endsection
