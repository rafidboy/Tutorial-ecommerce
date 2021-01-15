@extends('master')
@section('content')

<div style="height: 83vh;margin-left: 14rem;margin-top:4rem" class="container ">
    <div class="row">
        <div class="col-lg-4">
            <img src="{{$product['galeri']}}" class="detail-img" alt="">
        </div>
        <div class="col-lg-8">
        {{-- <a href="/">Kembali</a> --}}
            <h2>{{$product['nama']}}</h2>
            <br>
            <li>Harga: <span class="ml-1">${{$product['price']}}</li></span> 
            <li>Deskripsi: <span class="ml-1">{{$product['deskripsi']}}</li></span>
            <li>Kategori: <span class="ml-1"> {{$product['kategori']}}</span></li>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary"> Tambah Ke keranjang<i class="fas fa-shopping-cart"></i></button>
            </form>
            
            <button class="btn btn-success mt-1"> Beli Sekarang</button>
    
        </div>
    </div>
</div>    

@endsection
