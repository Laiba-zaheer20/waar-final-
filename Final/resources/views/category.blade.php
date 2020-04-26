<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  @extends('layout')
  <body>
  
      @section('navbar')
      @parent
      @endsection

      @section('body')
      <center>

      <div style="width:80%;">
      <h1>{{$cat->CategoryType}}</h1>
      <div class="row">
      @foreach($cat->subcategory as $sub)
      
      @foreach($sub->product as $product)
      <a href="{{route('detail')}}?id={{$product->ProductID}}&subid={{$product->SubCatID}}" style="color:black">
            <div class="col-lg-3" style="margin:25px;">
            <div class="card" style="width: 18rem;width:200px;;box-shadow:2px 2px 2px 2px">
            <img src="{{$product->Image}}" class="card-img-top" alt="..." height="150px">
            <div class="card-body" style="height:100px">
                <h5 class="card-title"style="font-size:Medium">{{$product->ProductName}}</h5>
                <div>{{$product->ProductPrice}}</div>
            </div>
            </div>
            </div>
            </a>
        @endforeach
        @endforeach
        </div>
        <!-- Button trigger modal -->

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