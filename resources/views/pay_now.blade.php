<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Hello, world!</title>

    <script>
      function myFunction(){
        var cboxes=document.getElementsByName('item[]');
        var len=cboxes.length;//get number of items
        var price=document.getElementsByName('price[]');
        var quantity=document.getElementsByName('quantity[]');
        var subamount=document.getElementsByName('subamount[]');
        
        //apply for loop
        for(var i=0;i<len;i++){
          document.getElementsByName('subamount[]')[i].value=parseFloat(price[i].value)
          *parseFloat(quantity[i].value);
          console.log("jjjj");
        }
      }

      function cal(){
        var subamount=document.getElementsByName('subamount[]');//get all subamount
        var price=document.getElementsByName('price[]');//addon
        var quantity=document.getElementsByName('quantity[]');//addon
        var subtotal=0;
        var tax=0;
        var total=0;
          
        var cboxes=document.getElementsByName('item[]');
        var len=cboxes.length;
        for(var i=0;i<len;i++){
          document.getElementsByName('subamount[]')[i].value=parseFloat(price[i].value)
          *parseFloat(quantity[i].value);
        }
        for(var i=0;i<len;i++){
          if(cboxes[i].checked){//if user tick check box
            subtotal=parseFloat(subamount[i].value)+parseFloat(subtotal);
          }
        }
        tax=subtotal*0.1; //0.1= 10%
        total=subtotal+tax;
       
        if(subtotal>1000){
          console.log(subtotal);
          document.getElementById("extradiscount").innerHTML="Discount RM100";
          total=total-100;
        }
        else{
          document.getElementById("extradiscount").innerHTML="&nbsp";
        }

        if(document.getElementById("discount").value=="5%"){
          total=total*0.95;
        }
        document.getElementById('subtotal').value=subtotal.toFixed(2); //2 = decimal place  xiaoshu dian
        document.getElementById('tax').value=tax.toFixed(2);
        document.getElementById('Total').value=total.toFixed(2); 
      }

      function checkdiscount(){
        var promocode=document.getElementById("promocode").value;
        if(promocode=="ABCD1234"){
          document.getElementById("discount").value="5%";
        }
        else{
          document.getElementById("discount").value="Invalid code";
        }
      }

      function toggle(source){
        var checkbox=document.querySelectorAll('input[type="checkbox"]');
        for(var i=0;i<checkbox.length;i++){
          if(checkbox[i]!=source){
            checkbox[i].checked=source.checked;
          }
        } 
      }


    </script>

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
        <a class="navbar-brand" href="#">NS Shoes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
      </nav>
                 
            <div>
                <div class="container-fluid" style="padding-top: 50;margin-top: 10px" align="center">
                  <div class="row">
                    <div class="col-md-2">
                      <ul class="list-group">
                      </ul>
                    </div>
                    <div class="col-md-10">
                        <h5>Check Out</h5>
                        <table>
                            <tr>
                                <td><input type="checkbox" onclick="toggle(this)"></td>
                                <td>Item</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>size</td>
                                <td>Subtotal</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td style="font-size: 30px;">Adidas</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Adidas/PULSEBOOST HD SHOES.jpg" width="80" alt="">PULSEBOOST HD SHOES</td>
                                <td>RM600 <input type="hidden" name="price[]" id="price[]" value="600"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Adidas/ULTRABOOST 20 SHOES.jpg" width="80" alt="">ULTRABOOST 20 SHOES</td>
                                <td>RM780<input type="hidden" name="price[]" id="price[]" value="780"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Adidas/ALPHABOOST PARLEY SHOES.jpg" width="80" alt="">ALPHABOOST PARLEY SHOES</td>
                                <td>RM600<input type="hidden" name="price[]" id="price[]" value="600"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Adidas/ULTRABOOST SHOES.jpg" width="80" alt="">ULTRABOOST SHOES</td>
                                <td>RM730<input type="hidden" name="price[]" id="price[]" value="730"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Adidas/PULSEBOOST HD SHOES0.2.jpg" width="80" alt="">PULSEBOOST HD SHOES0.2</td>
                                <td>RM730<input type="hidden" name="price[]" id="price[]" value="730"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Adidas/ULTRABOOST 19 SHOES.jpg" width="80" alt="">ULTRABOOST 19 SHOES</td>
                                <td>RM730<input type="hidden" name="price[]" id="price[]" value="730"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td style="font-size: 30px;">Nike</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Nike/Air Jordan 1 Mid.png" width="80" alt="">Air Jordan 1 Mid</td>
                                <td>RM455<input type="hidden" name="price[]" id="price[]" value="455"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Nike/Nike Zoom Fly 3.png" width="80" alt="">Nike Zoom Fly 3</td>
                                <td>RM689<input type="hidden" name="price[]" id="price[]" value="689"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Nike/Nike Air VaporMax Flyknit 3.png" width="80" alt="">Nike Air VaporMax Flyknit 3</td>
                                <td>RM851<input type="hidden" name="price[]" id="price[]" value="851"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Nike/Nike Air Zoom Pegasus 36 By YOU.png" width="80" alt="">Nike Air Zoom Pegasus 36 By YOU</td>
                                <td>RM609<input type="hidden" name="price[]" id="price[]" value="609"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Nike/Nike P-6000.jpg" width="80" alt="">Nike P-6000</td>
                                <td>RM609<input type="hidden" name="price[]" id="price[]" value="851"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Nike/Air Jordan 9 Retro.jpg" width="80" alt="">Air Jordan 9 Retro</td>
                                <td>RM609<input type="hidden" name="price[]" id="price[]" value="609"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td style="font-size: 30px;">Reebok</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Reebok/REEBOK SPEED TR FLEXWEAVE® MEN'S TRAINING SHOES.png" width="80" alt="">REEBOK SPEED TR FLEXWEAVE</td>
                                <td>RM300<input type="hidden" name="price[]" id="price[]" value="300"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Reebok/REEBOK NANO 9 WOMEN'S TRAINING SHOES.png" width="80" alt=""> REEBOK NANO 9 WOMEN'S TRAINING SHOES</td>
                                <td>RM390<input type="hidden" name="price[]" id="price[]" value="390"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Reebok/SPEED TR FLEXWEAVE® WOMEN'S TRAINING SHOES.png" width="80" alt="">SPEED TR FLEXWEAVE® WOMEN'S TRAINING SHOES</td>
                                <td>RM300<input type="hidden" name="price[]" id="price[]" value="300"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="item[]" value=""></td>
                                <td><img src="Shoes/Reebok/CLUB C REVENGE SHOES.png" width="80" alt="">CLUB C REVENGE SHOES</td>
                                <td>RM210<input type="hidden" name="price[]" id="price[]" value="210"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="number" value="1" min="1" max="10" size="7" name="quantity[]" id="quantity[]"></td>
                                <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                            </tr>
                            
                            <tr>
                                <td colspan="5" style="text-align:right">Subtotal</td>
                                <td><input type="text" name="subtotal" id="subtotal" size="7"></td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:right">tax</td>
                                <td><input type="text" name="tax" id="tax" size="7"></td>
                            </tr>
                            <tr>
                              <td colspan="4"style="text-align: right;">PromoCode</td>
                              <td><input type="text" name="promocode" id="promocode" size="7" onchange="checkdiscount()"></td>
                              <td><input type="text" name="discount" id="discount" size="7" readonly></td>
                            </tr>
                            <tr>
                              <td colspan="7" style="text-align:right;">
                              <p id="extradiscount">&nbsp;</p>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:right">Total</td>
                                <td><input type="text" name="Total" id="Total" size="7"></td>
                            </tr>
                            <tr>
                                <td colspan="6" style="text-align:right"><button class="btn btn-primary btn-xs" onclick="cal()">Calculate</button></td>
                            </tr>
                            <tr>
                                <td colspan="6" style="text-align:right"><a href="checkout2.html" class="w3-button w3-blue">NEXT</a>
                            </tr>
                        </table>
                    </div>                      
                  </div>
                    <div class="row">
                        <div class="col-md-12 bg-light">
                            NSIT Academy<br>
                            NO.16, Jalan Sri Putra 1,<br>
                            Bandar Putra,<br>
                            81000 Kulai, Johor.<br>
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