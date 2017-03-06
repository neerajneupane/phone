<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Comments;
use DB;
class commentController extends Controller
{
    public function store(Products $product)
    {
    	$this->validate(request(),(['question'=>'required']));

    	Comments::create([
    			'body' => request('question'),
    			'user_id' => auth()->id(),
    			'product_id' => $product->id,

    		]);

        DB::table('products')->where('id',$product->id)->increment('messages',1);
    	return back()->withMessage('Posted');
    }
}
