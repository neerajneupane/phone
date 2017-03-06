<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
    	$products = Products::all();
    	return view('products',compact('products'));
    }

    public function details(Products $product)
    {   
    	$user_ip = $_SERVER['REMOTE_ADDR'];
    	$check = DB::table('pageview')->where('user_ip',$user_ip);
 
    	if($check->count()>0){
    		
    	} else 
    	{
    		DB::table('pageview')->insert(['product_id'=>$product->id,'user_ip'=>$user_ip]);
    		DB::table('products')->where('id',$product->id)->increment('total_views',1);
    	}
    	return view('details',compact('product'));
    }
}
