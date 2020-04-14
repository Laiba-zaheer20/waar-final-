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
@parent
<center>
<div style="width=80%">
<div style="width:100%;display:flex">
<div style="width:70%">
<h1 style="font-weight:bold">Size</h1>
<select style="width:120px">
<option></option>
<option id="small">Small</option>
<option id="medium">Medium</option>
<option id="large">Large</option>
<option id="xl">XLarge</option>
</select>
<h1 style="margin:50px">Height</h1>
<input type="number" min="0" step="0.1" required/>
<h1 style="margin:30px">Weight</h1>
<input type="number" min="0" step="0.1" required />
<br/>
<button type="submit" class="btn btn-success" style="margin:30px" >Confirm Size</button>
</div>
<div style="width:30%">
<img src="img/Darzi.PNG" />
</div>
</div>
</div>
</center>


  @endsection
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>