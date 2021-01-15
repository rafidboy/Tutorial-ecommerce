
<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user')) {
  $total= ProductController::cartItem();
}
?>


<nav style="height: 60px;" class=" navbar navbar-expand-lg navbar-light gradient-nav ">
  <a class="navbar-brand" href="/">
    
    <img src="https://imageshack.com/i/pnoI9ukXp" width="50" height="50" class="d-inline-block align-top" alt="">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @if (Session::has('user'))
      <li class="nav-item active">
        <a class="nav-link font" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link font" href="myorders">Pesanan saya</a>
      </li>
      @else 
      <li class="nav-item active font"><a class="nav-link" href="/">Home</a></li>
      @endif
    </ul>
    
    <form action="/search" class="form-inline ml-4 my-2 mr-2 my-lg-0">
      <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
      <button style="" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
    </form>

    
    

    <ul class="navbar-nav">
      @if (Session::has('user'))
    <li class="nav-item "> 
      <a class="nav-link mt-2" href="/cartlist">
        <img  src="https://imageshack.com/i/poyoOx8Mp" height="30" width="30" alt="">{{$total}}
      </a>
    
      {{-- <li class="mt-2 dropdown">
        <ul class="pr-2"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          
            <img src="https://imageshack.com/i/poO9pCpMp" height="30" width="30" alt="">
          
          <a class="disabled text-dark">
            {{Session::get('user')['name']}}
          </a>
        
        </ul>
        <div class="dropdown-menu mt-3 mr-3">
          <a class="dropdown-item mr-4" href="/profile">Profile</a>
          <a class="dropdown-item mr-4" href="/logout">Logout</a>
          
        </div>
      </li> --}}
  </li> 
    

    <li class="nav-item dropdown no-arrow">
      <a class="nav-link ml-2 " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="https://imageshack.com/i/poO9pCpMp" eight="30" width="30"><br>
        <span class=" mr-1 d-none d-lg-inline text-gray-600 small">{{Session::get('user')['name']}}</span>
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/profile">
          <i class=" fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Settings
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/logout" ">
          <i class=" fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
    </ul>
    @else
      <li><a class="nav-link" href="/login">Login</a></li>
      {{-- <li><a class="nav-link" href="/register">DAFTAR</a></li> --}}
    @endif

  </div>
</nav>

{{-- <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          @if (Session::has('user'))
          <li class="active"><a href="/">Home</a></li>
          <li class="active"><a href="myorders">Orders</a></li>
          @else
          <li class="active"><a href="/">Home</a></li>
          @endif
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if (Session::has('user'))
        <li><a href="/cartlist">{{$total}}</a></li>
            
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
      @else
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Daftar</a></li>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> --}}