<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjualan Produk</title>
    <link rel="icon" type="image/jpg" href="{{url('ok.jpg')}}">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px
    }
    .custom-product{
        height: 500px;
        
    }
    img.slider-img{
        height: 400px !important;
    }
    .slider-text{
        background-color: #35443585 !important;

    }
    .trending-image{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
        margin-left: 5%;
    }
    .trending-wrapper{
        height: 100vh;
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
    .gradient-nav{
        background: #5ac9e7be;
        
    }
    .pagination {
        justify-content: center;
        margin-top: 10px;
        padding-bottom: 2%;
    }
    .produk-home{
        background-color:#9eaaad2a;
        padding-left: 5%;
        padding-right: 5%;
    }
    .nav-product{
        margin-left: 85%;
        
    }

  .uderline-tag{
    height:5px;
    width: 15%;
    box-shadow: 7px 5px 10px 5px grey, 2px 5px 10px -2px grey;
    
  }.card-size{
    height:200px;
    width: 200px;

  }
  .dropbtn {
    background-color: darkslategray;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  /* dropdown */
  .dropbtn1 {
    /* background-color: #4CAF50; */
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: rgba(112, 53, 53, 0.863);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content {
    display:flex;
    background-color:cadetblue;
  }
  
  .dropdown:hover .dropbtn {
    background-color: dimgray;
  }
  /* dropdown */

.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://imageshack.com/i/pnI13ZIzj');
  background-size: cover;
  background-position: center center;
}
.bg-image1 {
  background-image: url('https://imageshack.com/i/poiX3liqj');
  background-size: cover;
  background-position: center center;
}
.font{
  font-family: "Trirong", serif;;
  font-size: 20px;
  
}
.profile{
  margin-left: 200px;
  margin-top: 10px;
  margin-right:200px ;
}
.bg-1{
  background-color: rgba(58, 124, 110, 0.644);
}
.bg-1:hover{
  background-color:rgba(59, 214, 181, 0.644);

}
.text-putih{
  color: #f9f9f9;
}
.text-putih:hover{
  color: black;
}
.zoom {
    transition: transform .2s; /* Animation */
    margin: 0 auto;
  }
  
  .zoom:hover {
    transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }
.card-product-list {
    margin-bottom: 20px;
}
</style>


</html>