<!-- Automatically set dashboard log in/out -->

<!-- Css based in public folder -->
<base href="/public">
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style type = "text/css">
        label{
            display : flex;
            width:200px
        }
        .container{
            justify-content:center;
            align-items:center;
        }
        .btn{
            color:green;
        }

        /* .main-panel{
            background-color:orange;
        } */

    </style>
  </head>
  <body>
        @include('admin.sidebar')
      <!-- partial -->
            @include('admin.navbar')
        <!-- partial -->

        <!-- The same form  -->
        <div class="main-panel">
        <div class="container">
        
        <h1 style = "color:white; padding-top:40px; font-size:30px;">Edit menu Products</h1>
        
        <!-- Adding an alert message within a div to give user understanding that data has been sucessfully added to the database. If method to gauge whether has appeared and what to do whereafter. Message has been declared in AdminController -->
        @if(session()->has('message'))
        <!-- Use of bootstrap class for alert message -->
        <div class ="alert alert-success" style = "width:50%">
        <button type = "button" class = "close" data-bs-dismiss="alert">x</button>
        
        {{session()->get('message')}}
        </div>
        @endif

        <!-- I have created a form to be used on the menuProducts page on the admin dashboard. Method is post to allow data to be uploaded and enctype will allow images to be uploaded rather then just strings. The url will is routed to the web.php file. This is the same format as used on the menu products page however the placeholder has been swapped out for value so the details shown withing the inputs is the data which has been clicked on to be edited.The function in url has also been chnaged to the dit function. -->
        <form action="{{url('changeMenuProducts',$value -> id)}}" method="post" enctype="multipart/form-data" >
        <!-- csrf is automatic protection bypass in laravel when authorised user is uploading data -->
        @csrf
        <div style = "padding:15px;">
            <label>Product Name</label>
            <input style="color:black" type="text" name="name" value ="{{$value ->name}}" required =" ">
        </div>

        <div style = "padding:15px;">
            <label>Product Description</label>
            <input style="color:black" type="text" name="description" value ="{{$value ->description}}" required =" ">
        </div>

        <div style = "padding:15px;">
            <label>Product Price</label>
            <input style="color:black" type="number" name="price" value ="{{$value ->price}}" required =" ">
        </div>

        <div style = "padding:15px;">
            <label>Current Image</label>
            <img height="150px" width="150px" src ="/menuProductsImage/{{$value -> image}}">
        </div>

        <div style = "padding:15px;">
            
            <input type="file" name="image" placeholder = "Picture of the Product" required =" ">
            <label>New Image</label>
        </div>
           
        <div style = "padding:15px;">
            
            <input class="btn btn-Enter" type="submit" >
        </div>
    </form> 
     </div>
        




        @include('admin.script')
  </body>
</html>