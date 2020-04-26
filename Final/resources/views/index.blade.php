<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    @extends('layout')
  </head>

  <body style="background:">
      <center>
      @section('navbar')
      @parent
      @endsection

        @section('sidebar')
        @endsection
 
      @section('body')


<div style="width:90%;">
      <!-- carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top:50px">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1524464790303-b7f467781d29?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80" height="350px" width="100%" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="    font-weight: bold;text-transform: uppercase;"><strong>I don't design clothes. I design dreams.</strong></h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1507434745378-235a6297156b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=707&q=80" height="350px" width="100%" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="    font-weight: bold;text-transform: uppercase;"><strong>"Fashions fade,style is eternal."</strong></h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1552407396-f5e06cbf18a9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="350px" width="100%" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="    font-weight: bold;text-transform: uppercase;"><strong>"The joy of dressing is an art."</strong></h5>
        </div>
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
      <!-- carousel -->
      </div>


<div style="margin-top:50px;display:flex;">

<i style="   display: block;height: 2px;background-color: #000; width: 40%;margin-top:13px;margin-left:60px"></i>
<h3 style="font-style:italic;font-family: Times New Roman, Times, serif;font-weight:bold">Most Selling</h3>
<i style="   display: block;height: 2px;background-color: #000; width: 40%;margin-top:13px"></i>
</div>
<div class="row" style="margin-left:45px">
<?php $i=0?>
@foreach($sell as $sell)

    @if($i< 3)
        @if($i==0)

        <div class="card mb-3" style="max-width: 400px;margin:5px">
        <div class="row no-gutters">
            
         <div class="col-md-4">
         <a href="{{route('detail')}}?id={{$sell->ProductID}}&subid={{$sell->SubCatID}}" style="color:black">   
         <img src="{{$sell->Image}}" class="card-img" alt="...">
            </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <a href="{{route('detail')}}?id={{$sell->ProductID}}&subid={{$sell->SubCatID}}" style="color:black">
                <h5 class="card-title">{{$sell->ProductName}}</h5>
               <p class="card-text"><small class="text-muted">{{$sell->ProductPrice}}</small></p>
               </a>
            </div>
            </div>

 
        </div>
        </div>
        
        @else
        <div class="card mb-3" style="max-width: 400px;margin:5px">
        <div class="row no-gutters">
            <div class="col-md-4">    
            <a href="{{route('detail')}}?id={{$sell->ProductID}}&subid={{$sell->SubCatID}}" style="color:black">
              <img src="{{$sell->Image}}" class="card-img" alt="...">
            </a>
                </div>
                <div class="col-md-8">
                <div class="card-body">
                <a href="{{route('detail')}}?id={{$sell->ProductID}}&subid={{$sell->SubCatID}}" style="color:black">
                <h5 class="card-title">{{$sell->ProductName}}</h5>
                <p class="card-text"><small class="text-muted">{{$sell->ProductPrice}}</small></p>
                </a>   
            </div>
                </div>

        </div>
        </div>

        
        @endif
        <?php $i++ ?>
        @else
            @break
        @endif
@endforeach
</div>



<div style="margin-top:50px;display:flex;">
<i style="   display: block;height: 2px;background-color: #000; width: 40%;margin-top:13px;margin-left:60px"></i>
<h3 style="font-style:italic;font-family: Times New Roman, Times, serif;font-weight:bold">New Arrivals</h3>
<i style="   display: block;height: 2px;background-color: #000; width: 40%;margin-top:13px"></i>
</div>
<div class="row" style="display:flex;margin-left:45px">
<?php $i=0?>
@foreach($product as $product)
<?php $i++ ?>

        <div class="col-lg-2" style="margin:17px;box-shadow:2px 2px 2px 2px" >
        <div class="card" style="width: 12rem;">
        <a href="{{route('detail')}}?id={{$product->ProductID}}&subid={{$product->SubCatID}}" style="color:black">
        <img src="{{$product->Image}}" class="card-img-top" alt="..." height="150px">
        <div class="card-body" style="height:110px">
            <h5 class="card-title"style="font-size:Medium;margin:10px">{{$product->ProductName}}</h5>
            <h6 class="card-title"style="font-size:Medium;margin:10px">{{$product->ProductPrice}}</h6>
       </a>
        </div>
        </div>
        </div>
        @break($i>=5)
        
@endforeach
</div>




<div style="margin-top:50px;display:flex;">

<i style="   display: block;height: 2px;background-color: #000; width: 43%;margin-top:13px;margin-left:60px"></i>
<h3 style="font-style:italic;font-family: Times New Roman, Times, serif;font-weight:bold">Sales</h3>
<i style="   display: block;height: 2px;background-color: #000; width: 43%;margin-top:13px"></i>
</div>
<div class="row" style="display:flex;margin-left:45px">
<?php $i=0?>
@foreach($sale as $sale)
<?php $i++ ?>
        <div class="col-lg-2" style="margin:17px;box-shadow:2px 2px 2px 2px" >
        <div class="card" style="width: 12rem;">
        <a href="{{route('detail')}}?id={{$sale->ProductID}}&subid={{$sale->SubCatID}}" style="color:black">
        <img src="{{$sale->Image}}" class="card-img-top" alt="..." height="150px">
        <div class="card-body" style="height:110px">
        <h5 class="card-title"style="font-size:Medium;margin:10px">{{$sale->ProductName}}</h5>
            <h6 class="card-title"style="font-size:Medium;margin:10px">{{$sale->ProductPrice}}</h6>
       </a>
        </div>
        </div>
        </div>
        @break($i>=5)
        
@endforeach
</div>
</div>
</center>
@endsection


@section('footer')
@parent
@endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>