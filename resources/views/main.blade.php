<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <title>Non Stop Shoes</title>
        <style>
            p.a {
                font-style: italic;
                
            }

            img {
                border-radius: 50%;
            }
            body{
                background-image: url(3046992.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
        
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body onload="move()">            
        
        <div class="flex-center position-ref " style="height:80%">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><font size="6" color="red">HOME</font></a>
                    @else
                        <a href="{{ route('login') }}"><font size="6" color="red">LOGIN</font></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><font size="6" color="red">register</font></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" >
                <div class="title m-b-md">
                    <b><font color="red">NON-STOP SHOES</font></b> <img src="{{ asset('shoeslogo.png') }}" alt="">
                </div>
            </div>
        </div>

        <div style="float:left;width:100%;height: 20%;">
            <div id="myBar" class="w3-black w3-center w3-padding-large" style="width: 0px;display:none;"></div> 
        </div>
                
        <div>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <script>
                function move() {
                    var x = document.getElementById("myBar");
                    if (x.style.display === "block"){
                    x.style.display = "none";
                    }
                    else 
                    x.style.display = "block";

                    var elem = document.getElementById("myBar");   
                    var width = 0;
                    var id = setInterval(frame, 30);
                    function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    window.location.replace("{{ url('secondpage') }}");
                } 
                else {
                    width++; 
                    elem.style.width = width + '%'; 
                    elem.innerHTML = width * 1  + '%';
                }
            }
            }

            </script>               
        </div>
            
    </body>
</html>