<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        ul.topnav{
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
        }
        
        li.b a{
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
          font-style: oblique;
        }
        
        li.b a.active {
          background-color: #4CAF50;
          color: white;
        }
        
        li.b a:hover:not(.active) {
          background-color: #500;
          color: red;
        }
        </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <img src="image/xiaoshan.jpg" alt="" class="img-fluid rounded-circle" width="50">
        <a class="navbar-brand" href="#"><b>NS SHOES></b>>>></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><H1>Adidas</H1><span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
          
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <ul class="list-group">
                <li class="b"><a href="{{ url('NSS shop') }}"><b>ALL</b></a></li>
                <li class="b"><a href="{{ url('nike') }}"><b>Nike</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo\nike.png" width="50"></a></li>
                <li class="b"><a class="active" href="{{ url('adidas') }}"><b>Adidas</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo/adidas1.png" width="35"></a></li>
                <li class="b"><a href="{{ url('reebok') }}"><b>Reebok</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo\Reebook.png" width="40"></a></li>
            </ul>
      </div>

          <div class="col-md-1"></div>
          <div class="col-md-8">
            <div class="card border-0">
              <div class="row">

                <div class="col-sm-4">
                  <div class="card h-100">
                    <div class="card-body">
                        <div style="height:60px;">
                            <h5 class="card-title">PULSEBOOST HD SHOES</h5>
                        </div>
                      <img src="Shoes/Adidas/PULSEBOOST HD SHOES.jpg" alt="" class="img-fluid">
                      <li class="list-group-item">Adidas &nbsp; &nbsp; &nbsp;<img src="{{ asset('logo/adidas1.png') }}" alt="" style="height: 40px;"></li>
                      <div class="card-heading">RM600</div>
                      <a href="pay now.html"><button style="float:right" class="btn btn-danger">Add to Cart</button></a>                        
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card h-100">
                    <div class="card-body">
                        <div style="height:60px;">
                            <h5 class="card-title">ULTRABOOST 20 SHOES</h5>
                        </div>
                      <img src="Shoes/Adidas/ULTRABOOST 20 SHOES.jpg" alt="" class="img-fluid">
                      <li class="list-group-item">Adidas &nbsp; &nbsp; &nbsp;<img src="{{ asset('logo/adidas1.png') }}" alt="" style="height: 40px;"></li>
                      <div class="card-heading">RM780</div>
                      <a href="pay now.html"><button style="float:right" class="btn btn-danger">Add to Cart</button></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div style="height:60px;">
                        <h5 class="card-title">ALPHABOOST PARLEY SHOES</h5>
                      </div>
                      <img src="Shoes/Adidas/ALPHABOOST PARLEY SHOES.jpg" alt="" class="img-fluid">
                      <li class="list-group-item">Adidas &nbsp; &nbsp; &nbsp;<img src="{{ asset('logo/adidas1.png') }}" alt="" style="height: 40px;"></li>
                      <div class="card-heading">RM600</div>
                      <a href="pay now.html"><button style="float:right" class="btn btn-danger">Add to Cart</button></a>
                    </div>
                  </div>                    
                </div>
                <div class="col-sm-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div style="height:60px;">
                          <h5 class="card-title">ULTRABOOST SHOES</h5>
                      </div>
                      <img src="Shoes/Adidas/ULTRABOOST SHOES.jpg" alt="" class="img-fluid">
                      <li class="list-group-item">Adidas &nbsp; &nbsp; &nbsp;<img src="{{ asset('logo/adidas1.png') }}" alt="" style="height: 40px;"></li>
                      <div class="card-heading">RM730</div>
                      <a href="pay now.html"><button style="float:right" class="btn btn-danger">Add to Cart</button></a>
                    </div>
                  </div>                    
                </div>
                <div class="col-sm-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div style="height:60px;">
                          <h5 class="card-title">PULSEBOOST HD SHOES0.2</h5>
                      </div>
                      <img src="Shoes/Adidas/PULSEBOOST HD SHOES0.2.jpg" alt="" class="img-fluid">
                      <li class="list-group-item">Adidas &nbsp; &nbsp; &nbsp;<img src="{{ asset('logo/adidas1.png') }}" alt="" style="height: 40px;"></li>
                      <div class="card-heading">RM730</div>
                      <a href="pay now.html"><button style="float:right" class="btn btn-danger">Add to Cart</button></a>
                    </div>
                  </div>                    
                </div>
                <div class="col-sm-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div style="height:60px;">
                          <h5 class="card-title">ULTRABOOST 19 SHOES</h5>
                      </div>
                      <img src="Shoes/Adidas/ULTRABOOST 19 SHOES.jpg" alt="" class="img-fluid">
                      <li class="list-group-item">Adidas &nbsp; &nbsp; &nbsp;<img src="{{ asset('logo/adidas1.png') }}" alt="" style="height: 40px;"></li>
                      <div class="card-heading">RM730</div>
                      <a href="pay now.html"><button style="float:right" class="btn btn-danger">Add to Cart</button></a>
                    </div>
                  </div>                    
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>

        <div class="row">
          <div class="col-md-12 bg-light">
            NSIT Academy:<br>              
            16, Jalan Seri Putra 1, <br>
            Bandar Putra,<br>
            81000 Kulai, Johor <br>
            607-6600628<br>
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