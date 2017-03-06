<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Comments;
use App\Replies;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.dashboard');
    }

     public function addProduct()
    {
        $categories = DB::select('select * from categories order by name asc');

        $brands = DB::select('select * from brands order by name asc');
        
        return view('customer.addProduct', ['brands'=>$brands],['names'=>$categories]);
    }

    public function myAds()
    {
        return view('customer.myAds');
    }

     public function editproduct(Products $product)
    {
                      
        $categories = DB::table('categories')->get();
 
        $brands = DB::table('brands')->get();
        
        return view('customer.editproduct',compact('product','brands','categories'));
    }

   public function deleteproduct(Products $product)
    {
        
        return view('customer.deleteproduct',compact('product'));
    }

    public function comments(Products $product)
    {   
        //Checking id product belongs to user or not//
        if(auth()->id() == $product->user->id)
        {
        return view('customer.comments',compact('product'));
        } else {
           return redirect('/products/'.$product->id);
        }

    }

    public function reply(Products $product,Comments $comment)
    {
        $this->validate(request(),(['reply'=>'required']));
        Replies::create([
                'body'=>request('reply'),
                'comment_id'=>$comment->id,
                'user_id'=>auth()->id(),
            ]);
        return back();
    }

    public function edit(Products $product)
    {

        $title = request('title');
        $category = request('category');
        $brand = request('brand');
        $price = request('price');
        $condition = request('condition');
        $used_days= request('used_days');
        $description = request('description');

        $model = request('model');
        $screen = request('screen');
        $rear_camera = request('rear_camera');
        $front_camera = request('front_camera');
        $cpu = request('cpu');
        $ram = request('ram');
        $internal_memory = request('internal_memory');
        $battery_capacity = request('battery_capacity');
        $battery_type = request('battery_type');
        $color = request('color');

        DB::table('products')->where('id',$product->id)->update(['title' => $title,'category' => $category,'brand' => $brand,'price' => $price,
            'condition' => $condition,'used_days' => $used_days,'description' => $description,'model' => $model,'screen' => $screen,'rear_camera' => $rear_camera,
            'front_camera' => $front_camera,'cpu' => $cpu,'ram' => $ram,'internal_memory' => $internal_memory,'battery_capacity' => $battery_capacity,'battery_type' => $battery_type,'color' => $color]);
        
        return redirect('/myAds');
    }

     public function delete(Products $product)
    {

        DB::table('products')->where('id',$product->id)->delete();

        return redirect('/myAds');
    }

        public function updateprofile()
    {
        return view('customer.updateprofile');
    }
}
