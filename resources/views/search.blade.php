@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">

        <div class="search-item">
            <h4>Hasil Pencarian :</h4>
            @foreach ($products as $item)
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['galeri']}}" class="trending-image" >
                    <div class="">
                        <h2 class="bg-dark">{{$item['nama']}}</h2>
                        <h5 class="bg-dark">{{$item['deskripsi']}}</h5>
                    </div>
                </div>
                @endforeach
            </a>
        </div>
    </div>
</div>    

@endsection
