<!-- Automatically set dashboard log in/out -->


<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="styles.css" /> -->

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

      @include('admin.navbar')
    
        <!-- Div class taken from body class to fill content of menuProducts page, where i can add html/css to add/delete products from menu from the backend -->
       <div class="main-panel">
        <div class="container">
        
        <h1 style = "color:white; padding-top:40px; font-size:30px;">Add Products to Menu</h1>
        
        <!-- Adding an alert message within a div to give user understanding that data has been sucessfully added to the database. If method to gauge whether has appeared and what to do whereafter. Message has been declared in AdminController -->
        @if(session()->has('message'))
        <!-- Use of bootstrap class for alert message -->
        <div class ="alert alert-success" style = "width:50%">
        <button type = "button" class = "close" data-bs-dismiss="alert">x</button>
        
        {{session()->get('message')}}
        </div>
        @endif

        <!-- I have created a form to be used on the menuProducts page on the admin dashboard. Method is post to allow data to be uploaded and enctype will allow images to be uploaded rather then just strings. The url will is routed to the web.php file. -->
        <form action="{{url('addMenuProducts')}}" method="post" enctype="multipart/form-data" >
        <!-- csrf is automatic protection bypass in laravel when authorised user is uploading data -->
        @csrf
        <div style = "padding:15px;">
            <label>Product Name</label>
            <input style="color:black" type="text" name="name" placeholder = "Name of the Product" required =" ">
        </div>

        <div style = "padding:15px;">
            <label>Product Description</label>
            <input style="color:black" type="text" name="description" placeholder = "Description of the Product" required =" ">
        </div>

        <div style = "padding:15px;">
            <label>Product Price</label>
            <input style="color:black" type="number" name="price" placeholder = "Price of the Product" required =" ">
        </div>

        <div style = "padding:15px;">
            
            <input type="file" name="image" placeholder = "Picture of the Product" required =" ">
        </div>

        <div style = "padding:15px;">
            
            <input class="btn btn-Enter" type="submit" >
        </div>
    </form> 
     </div>

    

        @include('admin.script')
          
        
  </body>
</html>




<!-- Main body transferred to different file for clean code -->
     
      <!-- removed sidebar into different file -->
      <!-- partial -->
      <!-- Seperating navigation bar from main code to make it easier and cleaner to read -->
      
    <!-- partial -->

    <!-- partial -->
    <!-- partial -->