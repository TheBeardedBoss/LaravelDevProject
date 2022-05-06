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
  public function redirect()
  {
    //Register will attempt to gain user type, Either Admin or User
    $usertype = Auth::user()->usertype;
    // if/else condition/loop to gain differentiation between admin and User and where to redirect depending on the result
    if ($usertype == '1') {
      return view('admin.home');
    } else {
      return view('user.home');
    }
  }

  //Simple if function to determine what page to direct either Normal User or admin on home button click which is based upon database value either being 0 or 1 = Auth as the variable above sets Auth as set in phpMyAdmin

  public function index()
  {
    if (Auth::id()) {
      return redirect('redirect');
    } else {
      return view('user.home');
    }
  }

  // Attempt to add data dynamically from the database into the website through the menu function which is linked to the menu page.
  public function menu()
  {
    // value will now contain all the data from the menuProducts table based in phpMyAdmin
    // Paginate rather then all to limit 6 products per page.
    $value = menuProducts::paginate(6);

    // compact value will send all data from the table/database to the user page

    return view('user.menu', compact('value'));
  }

  public function about()
  {
    return view('user.about');
  }
  public function contact()
  {
    return view('user.contact');
  }
  public function addToCart(Request $request, $id)
  {
    // user variable will contain user data and create a new basket session stored within basket variable

    if (Auth::id()) {
      $user = auth()->user();
      $Basket = new Basket();

      $menuProducts = menuProducts::find($id);

      // logged in user will have data shifted into basket database  column's, same will be done for all data variables
      $Basket->name = $user->name;
      $Basket->email = $user->email;
      $Basket->number = $user->number;
      $Basket->address = $user->address;
      $Basket->menuProduct = $menuProducts->name;
      $Basket->price = $menuProducts->price;
      $Basket->save();
      return redirect()
        ->back()
        ->with('message', 'Added to basket');
    } else {
      //    If user is not logged in but clicks add to basket, they will be redirected to login
      return redirect('login');
    }
  }
  public function addContactMessages(Request $request)
  {
    // similar to adding menuProducts function
    $value = new contactMessages();

    $value->name = $request->name;

    $value->email = $request->email;

    $value->number = $request->number;

    $value->message = $request->message;

    $value->save();
    //Return redirect back will direct user to same page
    return redirect()
      ->back()
      ->with('message', 'Message Sent Successfully!');
  }

  // Unfortunately did not work
  public function navbar()
  {
    if ($user = auth()->user()) {
      // identify each unique user by checking phone number of users as they are unique unlike name.
      // compare number of logged in user to what is in the basket ie if its the same phone number to link basket to user and outputting the result as count
      $products = Basket::where('number', $user->number)->products();

      // compact value will send all data from the table/database to the user page
      // return view(redirect()->back(),compact('products'));
      return redirect()
        ->back()
        ->with(('products')->$products);
      // return view('user.menu');
    }
  }

  // Attempt at trying to send item to checkout page but was unfortunately usuccessful
  // public function checkout(){
  //     $Basket=new Basket;

  //     $user = auth()->user()

  //     $Basket = Basket::where('number',$user ->number);
  //     retrurn view('user.checkout',compact('Basket'));

  // }
}
