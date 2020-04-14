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
  width: 20%;
  padding: 1px 1px;
  margin: 2px  ;
  box-sizing: border-box;
}

</style>

Order Summary
 
  <table>
  <thead>
  <th>
  S.No
  </th>
  <th>
  Product Name
  </th>
  <th>
  Size
  </th>
  <th>
  Quantity
  </th>
  <th>
  Price
  </th>
  <th>
  SubTotal
  </th>
 
  </thead>
<tbody>
<?php $c=1;?>
<?php $total=0;?>
@foreach($items as $row) 

 
<tr>
<td>
{{$c}}
</td>
<td>{{$row->name}}</td>
<td>small</td>

<td><input type='text' value='{{$row->quantity}}' name='qty'></input></td>
<td>{{$row->price}}</td>
<td>{{$row->price*$row->quantity}}</td>


</tr>
<?php $total=$total+($row->price*$row->quantity); ?>
<?php $c++;?>
@endforeach
<tr>
<td colspan="5" align="right">Total</td>
<td align="right">${{$total}}</td>
</tr>




</tbody>
  </table>


<div >
Shipping Details<div>
<form action="{{route('confirm')}}" method='post'>
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
    