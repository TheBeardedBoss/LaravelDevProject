<!-- Automatically set dashboard log in/out -->


<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style type = "text/css">
      td{
        
        padding:30px;
        
      }
      .second-table{
        margin-top:50px;
        padding:20px;
      }


     </style>
  </head>
  <body>
        @include('admin.sidebar')
      <!-- partial -->
            @include('admin.navbar')
        <!-- partial -->

        <div class="main-panel">
        <div class="container">

        <!-- Adding an alert message within a div to give user understanding that data has been sucessfully added to the database. If method to gauge whether has appeared and what to do whereafter. Message has been declared in AdminController -->
        @if(session()->has('message'))
        <!-- Use of bootstrap class for alert message -->
        <div class ="alert alert-success" style = "width:50%">
        <button type = "button" class = "close" data-bs-dismiss="alert">x</button>
        
        {{session()->get('message')}}
        </div>
        @endif

        <table>
          <tr class = "first-row">
              <td>Name</td>
              <td>Image</td>
              <td>Description</td>
              <td>Price</td>
              <td>Edit</td>
              <td>Delete</td>
          </tr>

        <div class = "second-table">
          @foreach($value as $menuProducts)
            <tr style = "background-color: black; align-items:center;padding:30px;">
              <td>{{$menuProducts -> name}}</td>
              <td><img src="/menuProductsImage/{{$menuProducts -> image}}" alt="ImageOfFood"></td>
              <td>{{$menuProducts -> description}}</td>
              <td>{{$menuProducts -> price}}</td>

              
              
              
              
              
              <!-- Bootstrap, Buttons for Edit and Delete -->
              <td><a class = "btn btn-primary" href="{{url('editMenuProducts',$menuProducts->id)}}">Edit</a></td>
              
              <!--Url -> will determine the id of the product of which the delete button is clicked on , then send data of the specific id to web.php where the route is created -->
                <td><a class = "btn btn-danger" href="{{url('deleteMenuProducts',$menuProducts ->id)}}">Delete</a></td>
          </tr>
          @endforeach
        </div>

        </table>


</div>
</div>



        
        @include('admin.script')
  </body>
</html>