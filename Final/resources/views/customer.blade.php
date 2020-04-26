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
   

@section('body')
<center>
    <div>
    @if($value['value']=='Size')
    <div class="row" style="display:flex;justify-content:center">
      @foreach($variable as $var)
      <div class="card col-md-3" style="margin:20px;box-shadow:2px 2px 2px 2px;background:black;color:white">
      <div class="card-body">
        <h5 class="card-title">Size: {{$var->SizeName}}</h5>
        <h5 class="card-title">Height: {{$var->Height}}</h5>
        <h5 class="card-title">Weight: {{$var->Weight}}</h5>
      </div>
      </div>
      @endforeach
    </div>
  @endif


  @if($value['value']=='Wishlist')
    <div class="row" style="display:flex;justify-content:center">
      @foreach($variable as $pro)
      <div class="card col-md-3" class="wish" id="{{$pro->ProductID}}" style="margin:20px;box-shadow:2px 2px 2px 2px">
      <img src="{{$pro->Image}}" class="card-img-top" alt="..." height="200px">
      <div class="card-body">
        <h5 class="card-title">{{$pro->ProductName}}</h5>
        <p class="card-text">{{$pro->ProductPrice}}</p>
      </div>
      </div>
      @endforeach

    </div>
@endif



  @if($value['value']=='Order')
      <div class="row" style="display:flex;justify-content:center">
        @foreach($variable as $detail)
        <div class="card mb-3" style="max-width: 500px;margin:20px;box-shadow:2px 2px 2px 2px">
        <div class="row no-gutters">
          <div class="col-md-4" >
            <img src="{{$detail->Image}}" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Product Name: {{$detail->ProductName}}</h5>
              <h5 class="card-title">Order Status: {{$detail->StatusName}}</h5>
              
            </div>
          </div>
        </div>
      </div> 
     
        @endforeach
      </div>
  @endif

  </div>
    </center>
  @endsection
  
  
<!-- <script>

$(document).ready(function(){

  $('.wish').click(function(){
    id=$('.wish').attr('id');
    $.ajax({
      type: "POST",
      data: {"_token": $('meta[name="csrf-token"]').attr('content'),
      "ID":id,
      },
      url: ",
      
      success: function(response){
 
            $('#'.response).hide();
        }
    });
  
});

});
</script> -->

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>