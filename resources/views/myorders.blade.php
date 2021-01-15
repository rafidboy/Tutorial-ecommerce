@extends('master')
@section('content')

<div class="custom-product">
    <div class="row container">
        <div class="search-item">
            <h4 style="margin-bottom:10%">Pembelianku : </h4>
            @foreach ($order as $item)
            <div class="trending-item col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->galeri}}" class="trending-image" ></a>
                    <div class="">
                        <h2 class="bg-dark">Nama : {{$item->nama}}</h2>
                        <h5 class="bg-dark">Status Pesanan :{{$item->status}}</h5>
                        <h5 class="bg-dark">Alamat : {{$item->alamat}}</h5>
                        <h5 class="bg-dark">Status Pemabayaran : {{$item->status_pembayaran}}</h5>
                        <h5 class="bg-dark">Pembayaran : {{$item->pemabayaran}}</h5>
                    </div>
                    
                </div>
                @endforeach
        </div>
    </div>
</div>    

@endsection
