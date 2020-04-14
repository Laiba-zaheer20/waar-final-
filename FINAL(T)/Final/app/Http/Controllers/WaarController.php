<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\waar;
use App\category;
use App\subcategory;
use App\product;
use App\User;
use App\paymentdetail;
use mail;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use App\customerdetail;
use Carbon\Carbon;
use Cart;
use App\country;
use App\address;
use App\city;


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
        Cart::session(999)->clear();
        $data=category::all();
        $product=product::orderBy('ProductID','desc')->get();
        $sale=product::orderBy('ProductPrice')->get();
        $sell = DB::table('products')
            ->select()
            ->join( 'orderdetails','products.ProductID', '=', 'orderdetails.ProductID')
            ->groupBy('orderdetails.ProductID')
            ->orderBy(DB::raw('count(orderdetails.ProductID)'),"DESC")
            ->get();
           return view('index',compact(['data','product','sale','sell']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function show(waar $waar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function edit(waar $waar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, waar $waar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\waar  $waar
     * @return \Illuminate\Http\Response
     */
    public function destroy(waar $waar)
    {
        //
    }

    public function login()
    {
        $data=category::all();
        return view('login',compact('data'));
    }
    
    public function signup()
    {
        $data=category::all();
        return view('signup',compact('data'));
    }
    public function forgot()
    {
        $data=category::all();
        return view('forgot',compact('data'));
    }
    public function product(Request $request)
    {
        $id=$request->query();
        $data=category::all();
        $sub=subcategory::find($id['id']);
        return view('product',compact(['data','sub']));
    }
    public function category(Request $request)
    {
        $id=$request->query();
        $data=category::all();
        $cat=category::find($id['id']);
        if($cat['CategoryType']=='Tailor')
        {
            return view('tailor',compact('data'));
        }
        else
        {
        return view('category',compact(['data','cat']));
        }
    }
    // public function cart(Request $request)
    // {
    //     $data=category::all();
    //     return view('cart',compact('data'));
    // }


    public function detail(Request $request)
    {
        $data=category::all();
        $id=$request->query();
        $sub=product::find($id['id']);
        $multiple=subcategory::find($id['subid']);
        return view('detail',compact('data','sub','multiple'));
 
    }

    public function try()
    {
        $data=category::first();
        $data->subcategory;
        return $data;
    }


    public function checklogin(Request $request){        
        
        $p=validator::make($request->all(), [
        'username' => 'required|email',
        'password' => 'required|alphaNum|min:5',
        ]);

        $products= Cart::session(999)->getContent();     
        Cart::session(999)->clear();
       
        if($p->passes()){
        $user_data = array(
                'email' => $request->get('username'),
                'password' => $request->get('password'),
        );
       if(Auth::attempt($user_data)){
   
        
        if(!$products->isempty()){
          $p=auth()->user()->id;
          foreach($products as $t){
            $k=product::where('ProductID','=',$t->id)->first();
            
            Cart::session($p)->add(array(
                'id' => $t->id,
                'name' => $t->name,
                'price' => $t->price,
                'quantity' => $t->quantity,            
                'attributes' => array(
                    'image' => $k->Image,
                ),
            ));    
          }
        }
        
       return response()->json(['key'=>'done']);
       }else{
            return response()->json(['key'=>'YOU HAVE TO SIGN UP FIRST !!']);    
        }
    }
    else{
        return response()->json(['error'=>$p->errors()->all()]);
    }
    }


    public function checkSignIn(Request $request){

        $p=validator::make($request->all(), [
            'fname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        
        if($p->passes()){
        $user_data = array(
            'name' => $request->get('fname'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        $user = User::create($user_data);
        $data=new customerdetail;
        $data->CustomerFirstName=$request->get('fname');
        $data->CustomerLastName=$request->get('fname');
        $data->CustomerEmail=$request->get('email');
        $data->CustomerPassword=$request->get('password');
        $data->save();

        // auth()->login($user);

        return response()->json(['key'=>'done!']);
    }

    else{
        return response()->json(['error'=>$p->errors()->all()]);
    }

    }
    
    public function logout(){
        auth()->logout();
        $data=category::all();
        $product=product::orderBy('ProductID','desc')->get();
        $sale=product::orderBy('ProductPrice')->get();
        $sell = DB::table('products')
            ->select()
            ->join( 'orderdetails','products.ProductID', '=', 'orderdetails.ProductID')
            ->groupBy('orderdetails.ProductID')
            ->orderBy(DB::raw('count(orderdetails.ProductID)'),"DESC")
            ->get();
           return view('index',compact(['data','product','sale','sell']));

    }
    
    
    public function checkEmail(Request $request){
        
        $p=validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        
        if($p->passes()){
        
        $user = User::where('email', $request->email)->first();
        
        if (!$user) {
            $error_message = "Your email address was not found.";
            // $data=category::all();
            // return view('forgot',compact('data'))->render();     
            return response()->json(['key'=>$error_message]);
        }
        else{

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => Str::random(40),
                'created_at' => Carbon::now()
            ]);
            $tokenData = DB::table('password_resets')->where('email', $request->email)->first();
            $user = User::where('email',$request->email )->first();
            
            $user->sendPasswordResetNotification($tokenData->token);   
             return response()->json(['key'=>'Email has been sent to reset your password!!']);      
        }
    }
    else{
        return response()->json(['error'=>$p->errors()->all()]);   
    }   
    }

    public function resetpassword($id){
        $data=category::all();
        return view('resetpassword',compact('data','id')); 
    }

    public function savepassword(request $request){
        $p=validator::make($request->all(), [
            'password' => 'required|confirmed',
        ]);

        if($p->passes()){
            $user = User::where('email',$request->email )->first();
            $user->update(['password' => $request->password]);
            return response()->json(['key'=>"done"]);   
            }
        else{
            return response()->json(['error'=>$p->errors()->all()]);   
            
        }



    }

    public function cart(Request $request)
    {
       // view the cart items
      if(auth()->check()){
       $userID = auth()->user()->id;
      }
      else{
     $userID=999; 
    }

       $items=Cart::session($userID)->getContent();
       // $items = Cart::getContent();
        
      $data=category::all();
        // $content=Cart::content();
        //return response()->json($content);
        $products = product::all();
        // return $items;
        
// 
      return view('cart',compact(['data','items','products']));
    
}
    public function addcart(Request $request){
        $id=$request->id;
        $products = product::find($id);
        
       if(auth()->check()){
       $userID = auth()->user()->id;
        }
       else{
        $userID=999;
    }
    
    Cart::session($userID)->add(array(
            'id' => $id,
            'name' => $products->ProductName,
            
            'price' => $products->ProductPrice,
            'quantity' => 1,            
            'attributes' => array(

                'image' => $products->Image,
            ),
           
        ));
      ///print_r($products->ProductName);
        //print_r($products->ProductName);
      
    }

    public function upCart(Request $request){
        
       if(auth()->check()){
        $userID = auth()->user()->id;
        }
        else{
        $userID=999;}

        $ID=$request->input('update');
        $qty=$request->input('qty');
      
        \Cart::session($userID)->update($ID,[
            'quantity' => array(
            'relative' => false,
            'value' => $qty
        ),  
        ]);

        return redirect()->route('cart');
        
    }

    public function delCart(Request $request){
        if(auth()->check()){
            $userID =auth()->user()->id;
             }
        else{
             $userID=999;}
        $ID=$request->input('delete');
        \Cart::session($userID)->remove($ID);
        $data=category::all();
        $items=Cart::session($userID)->getContent();
        return view('cart',compact(['data','items']));
    }

    public function checkout(Request $request){
    
        if(auth()->check()){
            $userID = auth()->user()->id;
        }
        else{
            $data=category::all();
            return view('login',compact('data'));        
        }

        $items=Cart::session($userID)->getContent();
        $data=category::all();
        return view('checkout',compact(['data','items']));

    }

public function confirm(Request $request){
    if($request->method == 'card'){
    $p=validator::make($request->all(), [
        'Name'=> 'required',
        'address1'=> 'required',
        'address2'=> 'required',
        'country'=> 'required',
        'city'=> 'required',
        'method'=> 'required',
        'CardType'=> 'required',
        'CardNumber'=> 'required',
        'CardHolderName'=> 'required',
        'CardExpDate'=> 'required',
        'Cvv'=> 'required',
    ]);
    }
    else{
        $p=validator::make($request->all(),[
            'Name'=> 'required',
            'address1'=> 'required',
            'address2'=> 'required',
            'country'=> 'required',
            'city'=> 'required',
            'method'=> 'required',
        ]); 
    }

    if($p->passes()){
        if($request->method == 'card'){
        $data=new paymentdetail;
        $data->CardType=$request->CardType;
        $data->PaymentDate=Carbon::now();
        $data->CardNumber=$request->CardNumber;
        $data->CardHolderName=$request->CardHolderName;
        $data->CardExpDate=$request->CardExpDate;
        $data->Cvv=$request->Cvv;
        $data->amount=$request->total;
        $data->save();
        }
        
        $data=new country;
        $n=$data->where('CountryName','=',$request->country)->first();

        if(empty($n)){
            $data->CountryName=$request->country;
            $data->save();  
            $h=$data->where('CountryName','=',$request->country)->first();
            $count=$h->CountryID;
        }
        else{
            $count=$n->CountryID;
        }
        
        $data1=new city;
        $n1=$data1->where('CityName','=',$request->city)->first();

        if(empty($n1)){
            $data1->CityName=$request->city;
            $data1->CountryID=$count;
            $data1->save();  
            $h=$data1->where('CityName','=',$request->city)->first();
            $count=$h->CityID;
        }
        else{
            $count=$n1->CityID;
        }
        $add=new address;
        $add->AddressLine1=$request->address1;
        $add->AddressLine2=$request->address2;
        $add->Contact=1;
        $add->CityID=$count;
        $add->save();


        return response()->json(['key'=>'done']);
    }
    else{
        return response()->json(['error'=>$p->errors()->all()]);   
    }

    //  return $request->all();
    // $data=category::all();
    // $add1=$request->input('Address1');
    // $add2=$request->input('Address2');
    // $city=$request->input('city');
    // $country=$request->input('country');
    // $contact=$request->input('contact');
    // if($request->input('sel')=='cash'){
    //     $findcity=city::find($city);   
    //     print($findcity);
    //     // DB::table('addresses')
    //     // ->insert(
    //     //  ['AddressLine1' => $add1, 'AddressLine2' => $add2,'Contact'=>$contact ,'CityID'=>$findcity]
    //     // );
    //     // return redirect()->route('start');
      
    // }
    // elseif($request->input('sel')=='card')
    // {
        
    //     //return view('confirm');
    // }
}
public function cardDetails(Request $request){

    return redirect()->route('start');

}}
