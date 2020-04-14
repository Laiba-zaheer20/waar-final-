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

input[type=text] {
  width: 20%;
  padding: 1px 1px;
  margin: 2px  ;
  box-sizing: border-box;
  
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 39px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}


</style>
<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row" style="margin-left:100px">
    			<div class="col-md-10 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        
						        <th>Product name</th>
                    <th>Size</th>
						        <th>Quantity</th>
						        <th>Price</th>
						        <th>Sub Total</th>
						        <th>Update</th>
						        <th>Remove</th>
						      </tr>
						    </thead>

						    <tbody>
                    <?php $c=1;?>
                    <?php $total=0;?>
                    @foreach($items as $row) 

						      
                  <tr class="text-center">
                 
						        <td><div><img src='{{$row->attributes->image}}' width='100px' height='100px'/></div></td>
						        
						        <td class="product-name">
						        	<h4>{{$row->name}}</h4>
						        </td>
						        
						        <td class="size">small</td>
                    
                    
                    <form action="{{URL::to('update')}}" method='post'>
                    {{csrf_field()}}
                    <td><input type='text' value='{{$row->quantity}}' name='qty'></input></td>

                    <td>{{$row->price}}</td>

                    <td>{{$row->price*$row->quantity}}</td>
                    <td>                    
                    <input type='hidden' value='{{$row->id}}' name='update'></input>
                    <input type="submit" value="update" style="background-color:green;color:white"></input>
                    </form>     
                    </td>
                    <td> 
                    
                    <form action="{{URL::to('delete')}}" method='post'>
                               {{csrf_field()}}
                                                
                      <input type='hidden' value='{{$row->id}}' name='delete'></input>
                      <input  type="submit" value="remove"  style="background-color:red;color:white"></input>
                      </form>
                    </td>

                    </tr>

                    <?php $total=$total+($row->price*$row->quantity); ?>
                    <?php $c++;?>
                    
						        <!-- <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						         -->
						        <!-- <td class="total">$4.90</td> -->
						      </tr><!-- END TR-->
                  @endforeach
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
        
        <div class="col-lg-5 mt-6 cart-wrap ftco-animate" style='margin-top:0'>
    				<div class="cart-total mb-6">
    					<h4>Cart Totals</h4>
    					<hr>
              <p class="d-flex">
    						<span style="font-family: verdana;margin-left:20px;margin-right:170px"> Subtotal : </span>
    						<span style="color:red">${{$total}}</span>
    					</p>
    					<p class="d-flex">
    						<span style="font-family: verdana;margin-left:20px;margin-right:170px">Delivery :</span>
    						<span style="color:red">$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span style="font-family: verdana;margin-left:20px;margin-right:170px">Discount :</span>
    						<span style="color:red">$0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span style="font-family: verdana;margin-left:20px;margin-right:180px">Total :</span>
    						<span style="color:red">${{$total}}</span>
    					</p>
              <div style="display:flex;width:100%">
              <button class="button button3" style="width:50%">Continue Shopping!</button>
              <div style="width:40%">
              <form action="{{URL::to('checkout')}}" method='post'>
                               {{csrf_field()}}
              <button class="button button3">Check Out</button>
              </form>
              </div>
              </div>
    			</div>
    			</div>
          </div>

</section>


        <!-- <tr>
<td colspan="5" align="right">Total</td>
<td align="right">${{$total}}</td>
</tr> -->
  
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
    