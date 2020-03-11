<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Product; //step 1
use Session;
use App\User;

class ProductController extends Controller
{
    //
    public function create(){
        return view('addProduct');
    }




    public function store(){ //step2
        $r=request(); //step3 get data from HTML
        $image=$r->file('product-image');        
        $image->move('image',$image->getClientOriginalName());   //images is the location                
        
        $imageName=$image->getClientOriginalName(); 


        $addProduct=Product::create([ //step 4 bind data
            'id'=>$r->id,
            'name'=>$r->fullname, //fullname from HTML
            'description'=>$r->description,
            'price'=>$r->price,
            'quantity'=>$r->quantity,
            'categoryID'=>$r->categoryID,
            'image'=>$imageName
        ]);
        Session::flash('success','product insert successfully');
        Return redirect()->route('view.product'); //step 5 back to last page 
    }

    public function view(){     

        $products=Product::all(); //get all data from product
        
        return view('product')->with('products',$products);
        //
    }
    public function delete($id){
       
        $products=Product::find($id);
        $products->delete();
        return redirect()->route('view.product');
    }
    public function viewlist(){
        $products=Product::all();        
        return view('mainlist')->with('products',$products);
        
    }
    public function abc(){
        $products=Product::all();        
        return view('abc')->with('products',$products);
        
    }
    public function NSS_all(){
        $products=Product::all();        
        return view('NSS_all')->with('products',$products);
        
    }

    public function NSS_Adidas(){
        $products=Product::all()->where('categoryID','Adidas');        
        return view('NSS_all')->with('products',$products);
        
    }

    public function NSS_Nike(){
        $products=Product::all()->where('categoryID','Nike');        
        return view('NSS_all')->with('products',$products);
        
    }

    public function NSS_Reebok(){
        $products=Product::all()->where('categoryID','Reebok');        
        return view('NSS_all')->with('products',$products);
        
    }

    public function detail($id){
        $products =Product::all()->where('id',$id);
        return view('productdetail')->with('products',$products);
    }

    public function search(){       
        $r=request();
        $keyword=$r->searchProduct;
        $products =DB::table('products')->where('name', 'like', '%' . $keyword . '%')
                                        ->orWhere('description', 'like', '%' . $keyword . '%')
                                        ->get();        
        return view('NSS_all')->with('products',$products);
    }

    public function edit($id){     

        $products=Product::all()->where('id',$id); //get all data from product
        
        return view('editproduct')->with('products',$products);
        //
    }
    
    public function update(){
        $r=request();
        $image=$r->file('product-image');        
        $image->move('image',$image->getClientOriginalName());   

        $imageName=$image->getClientOriginalName(); 

        $products =Product::find($r->id);
        $products->name=$r->fullname;
        $products->description=$r->description;
        $products->price=$r->price;
        $products->quantity=$r->quantity;
        $products->categoryID=$r->categoryID;
        $products->image=$imageName;
        $products->save();

        Session::flash('success','product insert successfully');
        Return redirect()->route('view.product'); 
    }

/*    public function createUser()
    {
        $r=request(); //step3 get data from HTML
        $image=$r->file('image');        
        $image->move('image',$image->getClientOriginalName());   //images is the location                
        
        $imageName=$image->getClientOriginalName(); 

        $addUser=User::create([ //step 4 bind data
            
            'name'=>$r->name, //fullname from HTML
            'email'=>$r->email,
            'password'=>$r->password,
            'image'=>$imageName
        ]);
    }
*/



}
