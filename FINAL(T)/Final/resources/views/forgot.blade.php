<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="csrf-token" content="{!! csrf_token() !!}">
    
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
      <center>
        <div style="width:90%;height:700px;margin-top:40px">
            <center>
        <!-- <form method="POST" action="{{route('forgot')}}"> -->
            <div style="width:400px;height:500px;background-color:#ffbd2f;padding:10px" class="round">
                    <img src="../Capture.png" height="100px"/>

                    <div id='key' class="key"></div>
                     <div id="errors"></div>                  
                     <div class=" print-error-msg" style="display:none">
                        <ul></ul>
                      </div>

                <div style="padding-top:50px;display:flex;flex-direction:column">
                        <h4 >Email Address</h4>                      
                        <input type="text" name="username" id="username" required /> 
                      
                        <button type="submit" id="send" class="btn btn-dark fa fa-envelope icon" style="margin-top:50px;width:40%;"> Send Password Reset Link</button>
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
   
   $.ajax({
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     "email":username1,
     },
     url: "{{route('checkEmail')}}",
     success: function(msg){
      if($.isEmptyObject(msg.error)){
      $(".key").css('display','block');
      document.getElementById("key").innerHTML=msg.key;
      document.getElementById("errors").style.display = "none";
      $(".print-error-msg").css('display','none');
    }
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


    <script>
        

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>