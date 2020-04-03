<?php

namespace App\Http\Controllers;

use App\Waar;
use Illuminate\Http\Request;
use DB;
use App\product;
use App\category;
use App\subcategory;
use App\wishlist;
use App\wishlistdetail;
class WaarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=category::all();
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=category::all();
        $num = request()->query();
        $product1=subcategory::where('SubCatID',$num['sub'])->first();
            return view('bread',compact(['data','product1']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $a=2;
       $num =request()->query();
       $p=$num['data2'];

        $product=wishlist::where('CustomerID',$a)->first();
       if($product==NULL){
           $wish=new wishlist;   
           $wish->CustomerID=$a;
           $wish->save();
           $last_id= wishlist::all()->last()->WishlistID;
           $detail=new wishlistdetail;
           $detail->ProductID=$p;
           $detail->WishlistID=$last_id; 
           $detail->save();
        }
       else{
        $detail=new wishlistdetail;
        $detail->ProductID=$p;
        $detail->WishlistID=$product->WishlistID; 
        $detail->save();
       }
    // if(request()->ajax()){
    //                return response()->json(['result'=>$last_id]);
    //     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    { 
        $data=category::all();
        //return view('index',compact('data'));
       $num = request()->query();
        $product=category::where('CategoryID',$num['category'])->first();
        $k=$product->subcategory;
        return view('products',compact(['data','k']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function edit(Waar $waar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waar $waar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waar $waar)
    {
        //
        $p=2;
        $num =request()->query();
        $product=wishlist::where('CustomerID',$p)->first();
      
        $l=(int)($num['data2']);
        $k=(int)($product['WishlistID']);
        
        wishlistdetail::where('WishlistID',"=",$k)->where('ProductID',"=",$l)->delete();
        $j=$product->wishes;
        if($j->isEmpty()){
            wishlist::where('CustomerID',$p)->delete();
        }
        else{
            $k=0;
        }
        if(request()->ajax()){
            return response()->json(['result'=>$k]);
        }
        
        // foreach($n as $elem){
        //     $elem->where('ProductID',$num['data2'])->delete();
        // }

    }

}
