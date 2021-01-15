@extends('master')
@section('content')
<section style="height: 100px;" class=" mb-2 bg-light">
    <div class="container">
        <h2 class=" pt-4">Keranjang</h2>
</div>
</section>

<section class="section-content padding-y">
    <div class="container">
    
    <div class="row">
    <main class="col-md-9">
    <div class="card">
    
    <table class="table table-borderless table-shopping-cart">
        <thead class="text-muted">
        <tr class="small text-uppercase">
        <th scope="col">Produk</th>
        <th scope="col" width="120">Jumlah</th>
        <th scope="col" width="120">Harga</th>
        <th scope="col" class="text-right" width="200"> </th>
        </tr>
        </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>
                <figure class="ml-1">
                <div class=""><img style="height: 90; width: 90px;" src="{{$item->galeri}}" class=""></div>
                    <figcaption class="info">
                    <a href="#" class="title text-dark">{{$item->deskripsi}}</a>
                        <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
                    </figcaption>
                </figure>
            </td>
            <td> 
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>	
                    <option>3</option>	
                    <option>4</option>	
                </select> 
            </td>
            <td class=""> 
                <h5 class="text-muted"> Rp. {{$item->price}} </h5> 
            </td>
            <td class="text-right"> 
                {{-- <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> </i></a>  --}}
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Hapus produk</a>
            </td>
        </tr>
    @endforeach
    
    </tbody>
    </table>
    <div class="card-body border-top">
        <a href="ordernow" class="btn btn-primary float-md-right"> Bayar <i class="fa fa-chevron-right"></i> </a>
        <a href="/" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Lanjutkan belanja </a>
    </div>	
    </div> <!-- card.// -->
    </main> <!-- col.// -->
        <aside class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Punya Voucher?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="" placeholder="Masukan Voucher">
                            <span class="input-group-append"> 
                                <button class="btn btn-primary">Pakai</button>
                            </span>
                        </div>
                    </div>
                </form>
                </div>
            </div>  
            <div class="card">
                <div class="card-body">
                    <dl class="dlist-align">
                        <dt>Total Harga:</dt>
                        <dd class="text-right">USD 568</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Diskon:</dt>
                        <dd class="text-right">USD 658</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Total:</dt>
                        <dd class="text-right  h5"><strong>$1,650</strong></dd>
                    </dl>
                </div> 
            </div>  
        </aside> 
    </div>
    
    </div> 
</section>
{{-- <div class="custom-product">
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
</div>     --}}

@endsection
