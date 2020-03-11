<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <B>NS SHOES</B>>>>
      </li>
      <li class="nav-item">
        <B>PAYMENT</B>
      </li>
    </ul>
    
  </div>
</nav>



      <div class="container-fluid">  
        <div class="row">
          <div class="col-md-2">

          </div>

          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <div class="col-md-8">
            <div class="w3-animate-zoom">
              <div class="card border-0">
                <div class="row">
                  
                  <script>
                    function creditcard(){
                      var card=document.getElementById("cardNumber").value;
                      card=card.substring(0,1); //get first digit, 0 is where to start to get the digit and 1 is how many digit will got
                      if(card==4){
                        document.getElementById("cardType").innerHTML="<img src='visa.jpg' width='50'>";
                      }
                      else if(card==5){
                        document.getElementById("cardType").innerHTML="<img src='mastercard.jpg' width='50'>";
                      }
                      else{
                        document.getElementById("cardType").innerHTML="&nbsp;";
                      }
                    }
                  </script>

                  <form action="C:\Users\kkjj1\Desktop\Untitled-1.html">
                    <p id="cardType">&nbsp;</p>
                    <label for="username">Full name (on card)</label>
                    <input type="text" class="form-control" name="username" required>
                    <label for="cardNumber">Card Number</label>
                    <input type="number" onchange="creditcard()" class="form-control" id="cardNumber" required>

                    <div class="form-group">
                      <label for="">Expiration</label>
                      <div class="form-inline"> 
                        <select name="" id="">
                            <option>MM</option>
                            <option value="1">01-January</option>
                            <option value="2">02-February</option>
                            <option value="3">03-March</option>
                        </select>
                        <span> / </span>
                        <select class="form=control">
                          <option>YY</option>
                          <option value="2020">2020</option>
                          <option value="2011">2021</option>
                        </select>
                        <input type="text" class="form-control" name="cvv" placeholder="cvv">
                        &nbsp;
                        <img src="visa.jpg" alt="" style="height: 35px;">
                        &nbsp;
                        <img src="mastercard.jpg" alt="" style="height: 40px;">
                      </div>
                      <div><button class="btn btn-primary" type="submit"><a href="Final pay.html">PAY NOW</a></button></div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
       

        </div>  
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>