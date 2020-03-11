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
            body{
                background-image: url({{ asset('image/shoesbody.png') }});
                background-repeat: no-repeat;
                background-size: cover;
            }
            .img {
                border-radius: 50%;
            }
        </style>
    </head>

    <body>            
        
        <div style="float:left;width:100%;height: 85%;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6" style="margin-top: 100px;">
                            <div style="margin-top: auto; ">
                                    <img src="{{ asset('image\logo.png') }}" alt="" width="350px" height="300px">
                            </div>
                            <div style="margin-left: 10px;" class="23-container w3-animate-zoom">
                                    <img src="{{ asset('image\label.png') }}" alt="" width="350px">
                            </div>       
                            <input onclick="move()" class="img" type="image" src="{{ asset('image\arrow.jpg') }}" alt="Submit" width="50" >   
                    </div>
                    <div class="col-md-6" style="margin-top: 100px;">
                        <img src="{{ asset('image/shoesface.png') }}" alt="" height="100%" >
                    </div>
                </div>
            </div>
        </div>

        <div style="float:left;width:100%;height: 15%;">
            <div id="myBar" class="w3-green w3-center w3-padding-large"style="width: 0px;display:none;"></div> 
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