<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

@media only screen and (max-width: 850px)
{
	.Size{
		width:16rem;	
	}	
}

</style>
 </head>
  <body style="margin:0px" >
      @section('navbar')
      <!-- search -->
      <center>
        <div style="display:flex;background-color:#ffbd2f;width:90%" >
        <a href="{{route('start')}}"><img src="../Capture.png" height="50px" /></a>
        <form>
        <div class="input-group" style="margin-left:100px;width:600px;margin-top:2px">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
           <div class="input-group-append" id="button-addon4" style="" >
               <button class="btn btn-outline-secondary" type="button" style="height:40px"><i class="fa fa-search" aria-hidden="true"></i></button>
           </div>
        </div>
        </form>
        <a href="{{route('cart')}}" style="color:black"><button type="button" class="btn btn-warning" style="margin-left:50px;height:45px"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:black"><br/>cart</i></button></a>
        @if(auth()->check())
       <button type="button" class="btn btn-warning dropdown"  data-toggle="dropdown" style="margin-left:10px;height:45px"><a style="color:black"><i class="fa fa-user" aria-hidden="true"><br/>{{ auth()->user()->name}}</i></a></button>       
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" id="Size" href="{{route('customer')}}?value=Size">My Sizes</a>
        <a class="dropdown-item" id="Wishlist" href="{{route('customer')}}?value=Wishlist">Wishlist</a>
        <a class="dropdown-item" id="Order" href="{{route('customer')}}?value=Order">My Orders</a>
        <a class="dropdown-item"  href="{{route('logout')}}" >Logout</a>
      </div>
        @else
        <button type="button" class="btn btn-warning dropdown"  data-toggle="dropdown" style="margin-left:10px;height:45px"><a style="color:black"><i class="fa fa-user-circle" aria-hidden="true"><br/>Account</i></a></button>       
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{route('login')}}">Login</a>
        <a class="dropdown-item" href="{{route('signup')}}">SignUp</a>
      </div>
        @endif
       
 
      </div>

    <!-- breadcrumb -->
    <nav aria-label="breadcrumb" style="margin-top:30px;width:90%;">
    <ol class="breadcrumb" style="background:#ffbd2f">
        @foreach($data as $cat)
        <li class="breadcrumb-item active" aria-current="page">
        <div class="btn-group">
        <a href="{{route('category')}}?id={{$cat->CategoryID}}" style="color:black">
            <button class="btn btn-warning btn-sm" type="button">
              {{$cat->CategoryType}}
              
            </button>
            </a>
            @if(sizeof($cat->subcategory)!=0)
          
            <button type="button" class="btn btn-sm btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
             @foreach($cat->subcategory as $sub)
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('product')}}?id={{$sub->SubCatID}}" style="color:black">{{$sub->SubCatType}}</a>
            @endforeach
            </div>
            @endif
          </div>
        </li>
        @endforeach

    </ol>
    </nav>
    <!-- breadcrumb -->
</center>
    <!-- search -->
      @show


 

     @yield('body')




@section('footer')
<footer style="margin-top:50px;display:flex;" class="bg-dark">
<ul class="list-group list-group-flush" style="width:5%;">
  <li class="list-group-item bg-dark"><i class="fa fa-facebook" aria-hidden="true" style="color:white"></i></li>
  <li class="list-group-item bg-dark"><i class="fa fa-instagram" aria-hidden="true" style="color:white"></i></li>
  <li class="list-group-item bg-dark"><i class="fa fa-google" aria-hidden="true" style="color:white"></i></li>
  <li class="list-group-item bg-dark"><i class="fa fa-phone" aria-hidden="true" style="color:white"></i></li>
</ul>

<div style="width:100%;display:flex;justify-content:center;align-items:center;hieght:200px">
 <label style="color:white"><i class="fa fa-copyright" aria-hidden="true"></i>WAAR A Tailoring WebSite</label>
</div>
</footer>
@show
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>