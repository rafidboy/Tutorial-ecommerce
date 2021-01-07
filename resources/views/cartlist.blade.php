@extends('master')
@section('content')
<div class="custom-product">
    <div class="row container">
        <div class="search-item">
            <h4 style="margin-bottom:10%">Daftar Keranjang :</h4>
            <a href="ordernow" class="btn btn-success">Order Now</a>
            @foreach ($products as $item)
            <div class="trending-item col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->galeri}}" class="trending-image" ></a>
                    <div class="">
                        <h2 class="bg-dark">{{$item->nama}}</h2>
                        <h5 class="bg-dark">{{$item->deskripsi}}</h5>
                    </div>
                    <div class="col-sm-4">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">
                            Hapus Produk
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>    

@endsection
