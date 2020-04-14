<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  @extends('layout')
  <body>
  @section('navbar')
  @parent
  @endsection
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
    $('#cname').hide();
    $('#cdate').hide();
    $('#cno').hide();
    $('#ctype').hide();
    $('#cvv').hide();

    $('#select').change(function(){
      var selected = $(this).find('option:selected').text()
      if (selected=="Card"){
        $('#cname').show();
    $('#cdate').show();
    $('#cno').show();
    $('#ctype').show();
    $('#cvv').show();

      }
      
    });


  });
  </script>
  
  <style>
table, th, td {
  border: 1px solid black;
}

input[type=text] {
  width: 50%;
  height:40px;
  margin-bottom: 10px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 2px;
}
.k{
  
  width: 25%;
  height:45px;
  margin-bottom: 5px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 2px;
}
/* 
input[type=text] {
  width: 20%;
  padding: 1px 1px;
  margin: 2px  ;
  box-sizing: border-box;
} */
.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
</style>

<?php $c=1;?>
<?php $total=0;?>
@foreach($items as $row) 
<?php $total=$total+($row->price*$row->quantity); ?>
<?php $c++;?>
@endforeach
<div style="display:flex;width:100%">

<div class="col-lg-4 mt-6 cart-wrap ftco-animate col-25" style='width:30%;margin-top:0;margin-left:50px;margin-right:60px'>
    			<div class="container">
          <div class="cart-total mb-5">
            <center>
    					<h4>Cart Totals</h4>
    				  <hr>
            </center>	
              
              <p class="d-flex">
    						<span style="font-family:verdana;margin-left:30px;margin-right:100px"> Subtotal : </span>
    						<span style="color:red">${{$total}}</span>
    					</p>
    					<p class="d-flex">
    						<span style="font-family: verdana;margin-left:30px;margin-right:100px">Delivery :</span>
    						<span style="color:red">$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span style="font-family: verdana;margin-left:30px;margin-right:100px">Discount :</span>
    						<span style="color:red">$0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span style="font-family: verdana;margin-left:30px;margin-right:100px">Total :</span>
    						<span style="color:red" id="kaka">${{$total}}</span>
    					</p>
    			</div>
          </div>
          </div>
<div style="width:70%">
<h2>Shipping Detail</h2>
            <label for="fname" style="margin-top:40px;font-size: 17px;"><i class="fa fa-user"></i> Full Name : </label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" style="margin-left:24px"><br>
            
            <label for="email" style="margin-top:20px;margin-right:20px;font-size: 17px;"><i class="fa fa-envelope"></i> Address 1 : </label>
            <input type="text" id="adr1" name="email" placeholder="john@example.com" style="margin-left:1px"><br>
            
            <label for="adr" style="margin-top:20px;font-size: 17px;"><i class="fa fa-address-card-o"></i> Address 2 : </label>
            <input type="text" id="adr2" name="address" placeholder="542 W. 15th Street" style="margin-left:20px"><br>
            
            <label for="country" style="margin-top:20px;margin-right:9px"><i class="fa fa-institution"></i> Country : </label>
            <input type="text" id="country" name="country" placeholder="New York" style="margin-left:32px"><br>
            
            <label for="city" style="margin-top:20px;margin-right:25px;font-size: 17px;"><i class="fa fa-institution"></i> City : </label>
            <input type="text" id="city" name="city" placeholder="New York" style="margin-left:41px"><br>
            
            <label for="cars" style="margin-top:20px;margin-right:25px;font-size: 17px;">Choose a Payment Method: </label>
            <select class="k" id="cars"  >
                  <option class="k" value="select">select</option>
                  <option class="k" value="card">Card</option>
                  <option class="k" value="Cash">Cash</option>
            </select><br>
            
            <div class="key" style="display:none">
            
            <label  style="margin-top:40px;font-size: 17px;"><i></i> Card Type : </label>
            <input type="text" id="type" placeholder="John M. Doe" style="margin-left:46px"><br>
            
            <label  style="margin-top:40px;font-size: 17px;"><i></i> Card Number : </label>
            <input type="text" id="no"  placeholder="John M. Doe" style="margin-left:20px"><br>
            
            <label  style="margin-top:40px;font-size: 17px;"><i></i> Full Name : </label>
            <input type="text" id="full" placeholder="John M. Doe" style="margin-left:46px"><br>
            
            <label  style="margin-top:40px;font-size: 17px;"><i></i> Card expiry date : </label>
            <input type="date" id="date" placeholder="John M. Doe" style="margin-left:0px"><br>
            
            <label  style="margin-top:40px;font-size: 17px;"><i></i>Cvv : </label>
            <input type="text" id="cvvh" placeholder="John M. Doe" style="margin-left:95px"><br>
            
            </div>
            
            <div class=" print-error-msg" style="display:none;margin-left:100px">
                        <ul></ul>
            </div>

            <button type="submit" class="btn btn-light" id="n"style="margin-left:52px;width:45%;margin-top:50px;"><a style="color:black">Forgot Password</a></button>
                            
      </div>
</div>

<script>

$("#cars").change(function(){
   if($(this).val()=="card")
   {    
    $(".key").css('display','block');
   }
    else
    {
      $(".key").css('display','none');
    }
});


$(document).ready(function(){
  $('#n').click(function(){

    
    
    $.ajax({
     
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     'Name':document.getElementById("fname").value,
     'address1':document.getElementById("adr1").value,
     'address2':document.getElementById("adr2").value,
     'country':document.getElementById("country").value,
     'city':document.getElementById("city").value,
     'method':document.getElementById("cars").value,
     'CardType':document.getElementById("type").value,
     'CardNumber':document.getElementById("no").value,
     'CardHolderName':document.getElementById("full").value,
     'CardExpDate':document.getElementById("date").value,
     'Cvv':document.getElementById("cvvh").value,
     'total':document.getElementById("kaka").innerHTML,
    },
    url: "{{route('confirm')}}",
     success: function(msg){
      if($.isEmptyObject(msg.error)){
       alert('done');   
      }
      else{
        printErrorMsg(msg.error);
     }
 }
    });
  });


function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
});

</script>
<!-- <form action="{{route('confirm')}}" method='post'>
{{csrf_field()}}
<div>Address 1<input type='text' name='Address1' ></input></div>
<div>Address 2<input type='text' name='Address2' ></input></div>
<div>City<input type='text' name='city' ></input></div>
<div>Country<input type='text' name='country' ></input></div>
<div>Contact no<input type='text' name='contact' ></input></div>
 <div>Payment Options</div>
 <select name='sel' id='select'>
                <option selected disabled>--select--</option>
                <option value='cash'>Cash</option>
                <option  id='card' value='card'>Card</option>
               
                </select>
 <div id='ctype'>Card Type<input type='text' name='ctype'  ></input></div>
 <div id='cno'>Card Number<input type='text' name='cno' ></input></div>
 <div id='cname'>Card Holder Name<input type='text' name='cname'></input></div>
 <div  id='cdate'>Card expiry date<input type='date' name='cdate' ></input></div>
  <div id='cvv'>cvv<input type='text' name='cvv'></input></div>

 <input type='submit' class="btn btn-primary" value='confirm order'></button>

 </form>
</div>

</div>
 -->


  @endsection
  @section('footer')
  @parent
  @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    