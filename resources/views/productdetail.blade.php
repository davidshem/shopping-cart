@extends('NSS_shop_page')

@section('content')
                    @foreach($products as $product)
                    <div class="row">
                        <div class="col-md-6">  
                            <div class="img-magnifier-container">
                                <img id="myimage" src="{{asset('image/')}}/{{$product->image}}" width="500" height="500">
                            </div>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="row">
                        <div class="col-md-12">
                        <form action="{!! URL::to('paypal') !!}" method="post">
                        {{ csrf_field()}}
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                            <div style="height: 100px">Quantity <input type="number" id="qty" value="1" min="1" max="10"> Available stock: {{$product->quantity}}
                            </div>
                            <label for="fname">Price:</label>
                            <input type="hidden" id="price" value="{{$product->price}}" name="fname">
                            <input type="hidden" id="amount" name="amount" value="">
                            <script>
                                function cal(){
                                    document.getElementById("amount")
                                    .value=document.getElementById("qty")
                                    .value*document.getElementById("price").value;
                                    
                                }
                                /* Initiate Magnify Function
                                with the id of the image, and the strength of the magnifier glass:*/
                                magnify("myimage", 3);
                            </script>
                            <div style="height: 100px">RM{{$product->price}}<button type="submit" onClick="cal()" style="float:right" class="btn btn-danger btn-xs">Buy Now</button>
                            </form></div>
                        </div>
                    </div>
                    </div>  
                    @endforeach 

@endsection  
                