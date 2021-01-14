@extends('master')
@section('content')
<div class="custom-product">
    <div>
        <table class="table">
            
            <tbody>
              <tr>
                <td>harga</td>
                <td>${{$total}}</td>
              </tr>
              <tr>
                <td>Pajak</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Pengiriman</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Jumlah Harga</td>
              <td>{{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="masukan Alamat" class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                  <label>Pembayaran</label><br>
                  <input type="radio" value="cash" name="payment"> <span>transfer Bank</span><br>
                  <input type="radio" value="cash" name="payment"> <span>virtual Akun</span><br>
                  <input type="radio" value="cash" name="payment"> <span>COD</span>
                </div>
                
                <button type="submit" class="btn btn-default">Bayar</button>
              </form>
          </div>
    </div>
</div>    
@include('sweetalert::alert')
@endsection
