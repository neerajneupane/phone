<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
use Illuminate\Http\UploadedFile;

class productController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate(request(),[
    			'title' => 'required|max:50',
    			'price' => 'required',
    		]);
        $path = $request->photo->store('images/product_images');
    	 Products::create([
            'title' => request('title'),
            'price' => request('price'),
            'category' => request('category'),
             'brand' => request('brand'),
              'condition' => request('condition'),
               'used_days' => request('used_days'),
                'description' => request('description'),
                 'model' => request('model'),
                  'screen' => request('screen'),
                   'rear_camera' => request('rear_camera'),
                    'front_camera' => request('front_camera'),
                     'cpu' => request('cpu'),
                      'ram' => request('ram'),
                       'internal_memory' => request('internal_memory'),
                        'battery_capacity' => request('battery_capacity'),
                         'battery_type' => request('battery_type'),
                          'color' => request('color'),

            'user_id' => auth()->id(),
            'photo'=> $path,
            'total_views' => 0,
            'messages' => '0',
            ]);
      
    	return redirect('/myAds');
    }
}
