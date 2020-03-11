@extends('NSS_shop_page')

@section('content')
                    @foreach($products as $product)
                    <div class="col-sm-4">
                      <div class="card h-100">
                        <div class="card-body">
                            <div style="height:60px;">
                                <h5 class="card-title">{{$product->name}}</h5>
                            </div>
                            <a href="{{route('product.detail', ['id'=>$product->id])}}"><img src="{{asset('image/')}}/{{$product->image}}" alt="" class="img-fluid"></a>
                            <li class="list-group-item">{{$product->categoryID}}</li>
                            <div class="card-heading">RM{{$product->price}}</div>
                            <button style="float:right" class="btn btn-danger btn-xs">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    @endforeach 

@endsection