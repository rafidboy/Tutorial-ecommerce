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
            <form>
                <div class="form-group">
                  <textarea type="email" placeholder="masukan Alamat" class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                  <label>Pembayaran</label><br>
                  <input type="radio" name="payment"> <span>transfer Bank</span><br>
                  <input type="radio" name="payment"> <span>virtual Akun</span><br>
                  <input type="radio" name="payment"> <span>COD</span>
                </div>
                
                <button type="submit" class="btn btn-default">Bayar</button>
              </form>
          </div>
    </div>
</div>    

@endsection
