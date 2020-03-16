@extends('layouts.app')

@section('content')
<style></style>
<script>
    var data = ['IPhone 11 Pro Max', 'IPhone X', 'SAMSUNG GALAXY S20 Ultra', 'HUAWEI MATE 30 PRO', 'THANKS for participation', 'RM100 coupon', 'HONDA CIVIC', 'HUAWEI MATE X'], 
 timer = null, 
 flag = 0; 

window.onload = function() {

 var play = document.getElementById('play'),
  stop = document.getElementById('stop');
  back = document.getElementById('back');
  name = document.getElementById('name');

 play.onclick = playFun;
 stop.onclick = stopFun;

 document.onkeyup = function(event) {
  event = event || window.event;
  if (event.keyCode == 13) {
   if (flag == 0) {
    playFun();
    flag = 1;
   } else {
    stopFun();
    flag = 0;
   }
  }
 }
}
function playFun() {
 var title = document.getElementById('title');
 var play = document.getElementById('play');
 clearInterval(timer);
 timer = setInterval(function() {
  var random = Math.floor(Math.random() * data.length);
  title.innerHTML = data[random];
 }, 50);
 play.style.background = '#999';

 var x = document.getElementById("play");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  var x = document.getElementById("stop");
    if (x.style.display === "block"){
      x.style.display = "none";
    }
      else 
      x.style.display = "block";
}

function stopFun() {
 clearInterval(timer);
 var play = document.getElementById('play');
 play.style.background = '#036';

  var x = document.getElementById("stop");
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
  else {
    x.style.display = "none";
  } 

  var x = document.getElementById("back");
    if (x.style.display === "block"){
      x.style.display = "none";
    }
      else {
      x.style.display = "block";
    }

  var x = document.getElementById("name");
    if (x.style.display === "block"){
      x.style.display = "none";
    }
      else {
      x.style.display = "block";
    }
}

    
</script>


   
    <div>
       
        <h1 style="color:#40AA53;text-align: center;">Result</h1>
        <div id="title" style="
            font-size: 24px;
            font-weight: bold;
            width: 400px;
            height: 70px;
            margin: 0 auto;
            padding-top: 30px;
            text-align: center;
            color: #f00;
            border:3px solid #40AA53;
            margin:0 auto;
            background:#efe;" >Welcome to lucky draw</div>
          <div style="width: 190px; height: 100px; margin: 0 auto;"><br>
            <button id="play" style=" font-size: 30px; line-height: 27px; display: block;float: left;width: 175px;height: 60px;margin-right: 10px;cursor: pointer;text-align: center;color: #fff;border: 1px solid #eee;border-radius: 7px;background: #036;">Start</button>
            <div id="stop" style="display:none;">
                <button style="font-size: 30px;line-height: 27px;display: block;float: left;width: 175px;height: 60px;margin-right: 10px;cursor: pointer;text-align: center;color: #fff;border: 1px solid #eee;border-radius: 7px;background: #036;">Stop</button>
            </div>
            <div id="back" style="display:none;">
                <a href="{{ url('NSS_all') }}"><button  style="font-size: 30px;line-height: 27px;display: block;float: left;width: 175px;height: 60px;margin-right: 10px;cursor: pointer;text-align: center;color: #fff;border: 1px solid #eee;border-radius: 7px;background: #036;">Back to main page</button></a>
            </div>
          </div>
          <div id="name" style="display:none;">
            <div  id="" style="height: 100px; text-align:center"><p>Screenshot this page and send it to our email: davidcjc@gmail.com  <br> like a sample</p><br>
            <img src="{{ asset('image/sample.png') }}" alt="" style="height: 350px;width: 450px;">
          </div>
          </div>
        </div>

</div>
@endsection