<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menuProducts;
use App\Models\contactMessages;

class AdminController extends Controller
{
    public function menuProducts(){
        return view('admin.menuProducts');
    }
    // Request is used as data is being pulled to database
    public function addMenuProducts(Request $request){
        $value=new menuProducts;
        // image is the name of the image on the menuProducts.blade.php file where it will come from
        $image=$request->image;
        // time is a function in laravel and will allow the image to be saved with a unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // image will be moved locations with the imagename
        $request->image->move('menuProductsImage',$imagename);

        $value->image = $imagename;

        // Now for the rest of the fields after image

        $value->name=$request->name;

        $value->description=$request->description;

        $value->price=$request->price;

        $value->save();
        //Return redirect back will direct user to same page
        return redirect()->back()->with('message', 'Added Successfully');

    }

     
    // check
    public function viewMenuProducts(){

        $value=menuProducts::all();
        return view('admin.viewMenuProducts',compact('value'));
    }


    // function taken $id from .blade and web.php page using find and attributed to $value. value is then deleted and page is returned with message.
    public function deleteMenuProducts($id){
        $value=menuProducts::find($id);
        $value -> delete();

        return redirect() -> back()->with('message', 'Deleted Successfully');
    }
    
    //redirected to editMenuProducts page when edit button is clicked
    public function editMenuProducts($id){
        $value=menuProducts::find($id);
        return view('admin.editMenuProducts',compact('value'));
    }
     
    
    public function changeMenuProducts(Request $request,$id){
        // getting id from product
        $value=menuProducts::find($id);
        //requesting file from blade
        $image=$request->image;
        // If condition means image does not necessarily need to be changed.
        if($image){
        // time is a function in laravel and will allow the image to be saved with a unique name/rename
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // image will be moved locations to public folder with the imagename
        $request->image->move('menuProductsImage',$imagename);
        //saving image in database
        $value->image = $imagename;
        }
        // Now for the rest of the fields after image

        $value->name=$request->name;

        $value->description=$request->description;

        $value->price=$request->price;

        $value->save();

        return redirect()->back()->with('message', 'Changed Successfully');

        
     }

     
     
    //  functions for dashboard viewing of contactMessages and deletion of them, similar to products.
     public function viewContactMessages(){

        $value=contactMessages::all();
        return view('admin.viewContactMessages',compact('value'));
    }

     public function deleteContactMessages($id){
        $value=contactMessages::find($id);
        $value -> delete();

        return redirect() -> back()->with('message', 'Deleted Successfully');
    }
    



}
