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
@parent
<center>
<div style="width=80%">
<div style="width:100%;display:flex">
<div style="width:70%">


<div id="show">
<h3 style="font-weight:bold">Size</h3>
<select style="width:120px;margin-left:30px" id="size" class="size">
<option></option>
<option value="small">Small</option>
<option value="medium">Medium</option>
<option value="large">Large</option>
<option value="xlarge">XLarge</option>
</select>
<h3 style="margin:30px">Height</h3>
<input type="number" min="36" step="0.5" required class="height"style="margin-right:5px;margin-left:60px"/>Inches
<h3 style="margin:30px">Weight</h3>
<input type="number" min="2" step="0.5" required  class="weight"style="margin-right:5px;margin-left:60px"/>Pounds
<br>
<button type="submit" class="btn btn-success confirm" style="margin:30px" >Confirm Size</button>
</a>

</div>

</div>

<div style="width:30%">
<img src="img/Darzi.PNG" />
</div>
</div>
</div>
</center>

<script>

$(document).ready(function(){

  // $('#check').click(function(){
  //   $('.size').attr('disabled',true);
  //   $('.height').attr('readonly',true);
  //   $('.weight').attr('readonly',true);
  // });

  // $('#custom').click(function(){
  //   $('#check').prop('checked',false);
  //   $('.size').attr('disabled',false);
  //   $('.height').attr('readonly',false);
  //   $('.weight').attr('readonly',false);
  // });

  $('.confirm').click(function(){
    size=$('.size').val();
    height=$('.height').val();
    weight=$('.weight').val();
   if("<?php echo auth()->check()?>")
   {
    $.ajax({
      type: "POST",
      data: {"_token": $('meta[name="csrf-token"]').attr('content'),
      "size":size,
      "Height":height,
      "Weight":weight,
      },
      url: "{{route('size')}}",
      
      success: function(response){
          if(response)
          {
            var targetUrl = "<?php echo URL::previous()  ?>";
            window.location = targetUrl;
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





  @endsection
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>