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
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
  
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $(document).ready(function(){
    <?php $maxp=count($sub->product); 

      for($i=0; $i<$maxp; $i++) {?>
      $('#msg<?php echo $i;?>').hide();
        $('#addCart<?php echo $i;?>').click(function(){
       var pro_id<?php echo $i;?>=$('#pro_id<?php echo $i;?>').val();
       //alert(pro_id<?php echo $i;?>);
        $.ajax({
          type:'post',
          url:'<?php echo url('add'); ?>?'+<?php echo $i;?>,
          data:{id: pro_id<?php echo $i;?>,},
          success:function(){
            $('#addCart<?php echo $i;?>').hide();
            $('#msg<?php echo $i;?>').show();
            $('#msg<?php echo $i;?>').append('product added to cart');
            //alert('done');
          }
        });

    });
 
    <?php } ?>
});
  </script>

  <center>
  <div style="width:90%">
  <h1>{{$sub->SubCatType}}</h1>
  <div class="row">
  <?php $countp=0;?>
  @foreach($sub->product as $product)
  <input type="hidden" id="pro_id<?php echo $countp?>" value="{{$product->ProductID}}"></input>
        <div class="col-md-2" style="margin:45px">
        <div class="card" style="width: 18rem;">
        <img src="{{$product->Image}}" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
            <h5 class="card-title">{{$product->ProductName}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <?php /*<a href="{{url('add')}}?id={{$product->ProductID}}">*/ ?>
            <button type="button" class="btn btn-primary" id='addCart<?php echo $countp ?>'>Add To Cart</button></a>
            <div style="color:green" id='msg<?php echo $countp ?>'class="card-title" ></div>
        </div>
        </div>
        </div>
        <?php $countp++;?>
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
    