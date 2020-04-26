<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  @extends('layout')
  <body>


    @section('body')
    <div style="margin-left:90px;display:flex">
    <div style="width:62%">
        <div style="display:flex">
            <img src="{{$sub->Image}}" height="450px" width="55%" style="border:solid"/>
              <div>
                  
                  <h1 style="margin:20px;margin-top:30px">{{$sub->ProductName}}</h1>
                  <h4 style="margin:20px;margin-top:30px">Description: {{$sub->Description->Description}}</h4>
                  <h4 style="margin:20px;margin-top:30px">Price: {{$sub->ProductPrice}} per yard</h4>
                  <div style="display:flex;margin:10px;;margin-top:30px">
                  @foreach($color as $col)
                  <div style="display:flex;flex-direction:column">
                    <div style="border:solid;border-width:1px;border-radius:15px;height:25px;width:25px;margin-right:25px;margin-left:10px;background-color:{{$col->Color}}"></div><input type="radio" name="color" style="margin:10px"/>
                  </div>
                    @endforeach
                </div>

                  <h5 style="margin-left:20px;margin-top:30px">Yard:</h5>
                  <input type="range" min="{{$sub->Yard->Min}}" max="{{$sub->Yard->Max}}" style="margin-left:20px"/>
                  <div><label style="margin-left:20px">{{$sub->Yard->Min}}</label><label style="margin-left:90px">{{$sub->Yard->Max}}</label>  </div>
                 
              </div>
          </div>
          <div style="margin:50px;">
          <button type="button" class="btn btn-success cart" id="{{$sub->ProductID}}" style="width:20%;margin-left:10px">Add to Cart</button>
          <label style="color:green;font-weight:bold;margin-left:10px" id='msgcart'class="card-title" ></label> 
          
          <a href="{{route('sew')}}"><button type="button" class="btn btn-success" style="width:20%;margin-left:10px">I want Sew</button></a>
          
          <button type="button" class="btn wishlist btn-success" id="{{$sub->ProductID}}" style="width:20%;margin-left:10px">Add to Wishlist</button>
          <label style="color:green;font-weight:bold;margin-left:10px" id='msgwishlist'class="card-title" ></label>
          
          
      
        </div>
      </div>

      <div style="width:35%;">
      
      <center>
      <h5>Products You may like</h5>
      <?php $i=0 ?>
      @foreach($multiple->product as $product)

      
            <div class="" style="margin:25px;">
            <div class="card" style="width: 18rem;width:200px;">
            <a href="{{route('detail')}}?id={{$product->ProductID}}&subid={{$product->SubCatID}}" style="color:black">
            <img src="{{$product->Image}}" class="card-img-top" alt="..." height="150px">
            <div class="card-body" style="height:80px">
                <h5 class="card-title"style="font-size:Medium">{{$product->ProductName}}</h5>
                <div>{{$product->ProductPrice}} per yard</div>
            </div>
            </div>
            </div>
            </a>
            @break ($i==3)
            <?php $i++ ?>
        @endforeach
</center>
</div>
    </div>
    @endsection



<script>

$(document).ready(function(){

  $('.wishlist').click(function(){
    id=$('.wishlist').attr('id');
   if("<?php echo auth()->check()?>")
   {
    $.ajax({
      type: "POST",
      data: {"_token": $('meta[name="csrf-token"]').attr('content'),
      "ID":id,
      },
      url: "{{route('wishlist')}}",
      
      success: function(response){
          if(response)
          {
            $('.wishlist').hide();
            $('#msgwishlist').show();
            $('#msgwishlist').append('product added to wishlist');
          }
          else
          {
            alert('Data not added to wisshlist');
          }

        }
    });
  }
  else
  {
    var targetUrl = "{{route('login')}}";
    window.location = targetUrl;
  }
});

});
</script>




<script>

$(document).ready(function(){

  $('.cart').click(function(){
    id=$('.cart').attr('id');
    $.ajax({
      type: "POST",
      data: {"_token": $('meta[name="csrf-token"]').attr('content'),
      "ID":id,
      },
      url: "{{route('add')}}",
      
      success: function(){
 
            $('.cart').hide();
            $('#msgcart').show();
            $('#msgcart').append('product added to cart');
  

        }
    });
  
});

});
</script>



    @section('footer')
  @parent
  @endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    