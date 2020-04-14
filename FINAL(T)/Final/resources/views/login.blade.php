<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
      .round{
          border-top-right-radius:5px;
          border-top-left-radius:5px;
          border-bottom-left-radius:5px;
          border-bottom-right-radius:5px;
          box-shadow:2px 2px 2px 2px;
      }
      </style>
  @extends('layout')
  <body>
      @section('navbar')
      @parent
      @endsection

      @section('body')
      <style>
      .input-container {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              width: 100%;
              margin-bottom: 15px;
      }
      .icon {
          padding: 10px;
          background: grey;
          color: white;

          width: 13%;
          margin-left:3%;
          text-align: center;
        }

      </style>
      <center>
        <div style="width:90%;height:850px;margin-top:40px">
            <center>
           <!-- <form method="post" action="{{route('check')}}">  
            @csrf -->
            <div style="width:390px;height:550px;background-color:#ffbd2f;padding:10px" class="round">
                
                    <img src="../Capture.png" height="100px"/>
                <div style="padding-top:10px;display:flex;flex-direction:column">
                     
                     <!-- @if($message = Session::get('error'))
                        <strong>{{ $message }}</strong>
                     @endif -->
                    <div id='key' style="margin-bottom:10px"class="key"></div>
                     <div id="errors"></div>                  
                     <div class=" print-error-msg" style="display:none">
                        <ul></ul>
                      </div>

                      

                        <h4>Email Address</h4>  
                        
                        <div class="input-container">
                        <i class="fa fa-envelope icon"></i>                    
                        <input type="text" name="username" id="username"  style="width:85%;margin-right:2%;" required />                      
                        </div>
                        <h4 >Password</h4>
                         
                      <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input type="password" name="password" id="password" style="width:85%;margin-right:2%;" required />
                      </div>
                        <button type="submit" id="send"class="btn btn-dark" style="margin-top:50px;width:40%;">Login</button>
                        <div style="display:flex">
                            <button type="submit" class="btn btn-light" style="margin-top:50px;width:45%;"><a href="{{route('signup')}}" style="color:black">Signup</a></button>
                            <button type="submit" class="btn btn-light" style="margin-left:52px;width:45%;margin-top:50px;"><a href="{{route('forgot')}}" style="color:black">Forgot Password</a></button>
                            </div>
                      
                </div>
            
            </div>
            <!-- </form> -->
            </center>
        </div>
</center>
<script>

$(document).ready(function(){
  $('#send').click(function(){
    username1=$('#username').val();
    password1=$('#password').val();
   
   $.ajax({
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     "username":username1,
     "password":password1,
     },
     url: "{{route('check')}}",
     
     success: function(msg){
      if($.isEmptyObject(msg.error)){
       if(msg.key!='YOU HAVE TO SIGN UP FIRST !!'){
 
        var targetUrl = "<?php echo URL::previous()  ?>";
        window.location = targetUrl;
      }
       else{
        $(".key").css('display','block');
       document.getElementById("key").innerHTML=msg.key;
        document.getElementById("errors").style.display = "none";
        $(".print-error-msg").css('display','none');
      }}
      else{
        $(".key").css('display','none');
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
      @endsection


      @section('footer')
      @parent
      @endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>