<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\menuProducts;
use App\Models\Basket;
use App\Models\contactMessages;


class UserController extends Controller
{
    //
    public function redirect(){
        //Register will attempt to gain user type, Either Admin or User
        $usertype=Auth::user()->usertype;
        // if/else condition/loop to gain differentiation between admin and User login
        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('user.home');
        }
        
    }
    
    //Simple if function to determine what page to direct either Normal User or admin to based upon database value either being 0 or 1 = Auth as the variable above sets Auth as set in phpMyAdmin
    
    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            return view('user.home');
        }
            
        }
    
    // Attempt to add daat dynamically from the database into the website through the menu function which is linked to the menu page.
        public function menu(){

            // value will now contain all the data from the menuProducts table based in phpMyAdmin
            // Paginate rather then all to limit 6 products per page. 
            $value = menuProducts::paginate(6);
            // compact value will send all data from the table/database to the user page
            return view('user.menu',compact('value'));
            // return view('user.menu');
        }

    public function about(){
            return view('user.about');
        }    
    public function contact(){
            return view('user.contact');
        }    
    public function addToCart(Request $request,$id){
        // user variable will contain user data and create a new basket session stored within basket variable
       
       if(Auth::id()){
        $user=auth()->user();
        $Basket=new Basket;

        $menuProducts=menuProducts::find($id);
        
        // logged in user will have name shifted into basket database name column, same will be done for all data variables
        $Basket->name=$user->name;
        $Basket->email=$user->email;
        $Basket->number=$user->number;
        $Basket->address=$user->address;
        $Basket -> menuProduct=$menuProducts ->name;
        $Basket -> price=$menuProducts ->price;
        $Basket ->save();
        return redirect()->back()->with('message', 'Added to basket'); 
       }
       else {
           return redirect('login');
       }

    } 
    public function addContactMessages(Request $request){
        $value=new contactMessages;
       
        $value->name=$request->name;

        $value->email=$request->email;

        $value->number=$request->number;

        $value->message=$request->message;


        $value->save();
        //Return redirect back will direct user to same page
        return redirect()->back()->with('message', 'Message Sent Successfully!');

    }   
        
}
