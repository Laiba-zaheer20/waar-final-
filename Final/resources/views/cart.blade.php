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
  <th>
  Update
  </th>
  <th>
  Remove
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
<form action="{{URL::to('update')}}" method='post'>
{{csrf_field()}}
<td><input type='text' value='{{$row->quantity}}' name='qty'></input></td>
<td>{{$row->price}}</td>
<td>{{$row->price*$row->quantity}}</td>
<td>                    


 <input type='hidden' value={{$row->id}} name='update'></input>
<input type="submit" value="update" style="background-color:green;color:white"></input>
</form></td>
<td>   <form action="{{URL::to('delete')}}" method='post'>
                               {{csrf_field()}}
                             
                               <input type='hidden' value={{$row->id}} name='delete'></input>
                               <input type="submit" value="remove" style="background-color:red;color:white"></input>
                               </form></td>

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
  <form action="{{URL::to('checkout')}}" method='post'>
                               {{csrf_field()}}
                               <input type='submit' class="btn btn-primary" value='checkout'></button>
                               </form>

  
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
    