@extends('master')
@section('content')
    
<div class="card profile  ">
    <div class="card-body">
    <h4 class="card-title mb-4 ml-2">Profile</h4>
   <form>
       <div class="form-group">
           <img src="https://imageshack.com/i/pnL8RPoKj" height="100px" width="100px" class="img-sm rounded-circle border">
       </div>
      <div class="form-row">
          <div class="col form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" value="Mike">
          </div> 
          <div class="col form-group">
              <label>Email</label>
                <input type="email" class="form-control" value="Johnson">
          </div> 
      </div>
      
      <div class="form-row">
          <div class="form-group col-md-6">
            <label>Provinsi</label>
            <select id="inputState" class="form-control">
                <option>Jakarta</option>
                <option selected="">Jawa Barat</option>
                <option>Jawa Timur</option>
                <option>Banten</option>
            </select>
          </div> 
          <div class="form-group col-md-6">
            <label >Kota/kabupaten</label>
            <input type="text" class="form-control" value="kota">
          </div> 
      </div> 

      <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kode Pos</label>
            <input type="text" class="form-control" value="pos">
          </div> 
          <div class="form-group col-md-6">
            <label>Nomor HP</label>
            <input type="text" class="form-control" value="hp">
          </div> 
      </div> 
      <div>
          <textarea name="" id="" cols="91" rows="3" >Alamat lengkap</textarea>
      </div>

      <button class="btn btn-success btn-block">Simpan</button>
    </form>
    </div> 
  </div>
@endsection
