<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
class ProductController extends Controller
{
    //
    public function index()
    {
    	$data['product']=Product::all();
    	return view('admin.product.list',$data);
    }
    public function addProduct()
    {
    	return view('admin.product.add');
    }
    public function storeProduct(ProductRequest $request)
    {
    	
    	$image=$request->file('image');
    	$new_image=rand().'.'.$image->getClientOriginalExtension();
    	$image->move(public_path('images'),$new_image);
    	$validate=$request->validated();
    	$products=new Product();
    	$products->name=$request->name;
    	$products->quantity=$request->quantity;
    	$products->price=$request->price;
    	$products->description=$request->description;
    	$products->image=$new_image;
    	$products->save();
        notify()->success('product inserted successfully');
    	return redirect('admin/product.list');
    }

}
