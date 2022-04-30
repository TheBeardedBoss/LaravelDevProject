<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css"/>
    

    <!-- <style type = "text/css">
     .d-flex justify-content-center{
         display:inline-block;
     }
    </style> -->

    <title>Document</title>
</head>
<body>
    @if(session()->has('message'))
        <!-- Use of bootstrap class for alert message -->
        <div class ="alert alert-success" style = "width:50%">
        <button type = "button" class = "close" data-bs-dismiss="alert">x</button>
        
        {{session()->get('message')}}
        </div>
        @endif

    <header>
       @include('user.navbar')
    </header>
    
    <div class="categoryHeader">Burgers</div>
    <section class="categoryOne">
        
       @foreach($value -> chunk(3)  as $chunk) 
       @foreach($chunk as $menuProducts)  
        <div class="card">
          
        <div class="title">{{$menuProducts -> name}}</div>
        
        <div class="image"><img src="/menuProductsImage/{{$menuProducts -> image}} "alt="Image of food"></div>
        <div class="text">{{$menuProducts -> description}}</div>
        <div class="price">£{{$menuProducts -> price}}</div>
        
        <form action="{{url('addToCart',$menuProducts -> id)}}" method="POST">
             @csrf
        <button class="cart-button">
           
            Add to cart
        </button>
        </form>
       
        </div>
        @endforeach
         @endforeach

        <!-- Allows for pages to be added, 6 per page and then the next page has 6. This is a bootstrap feature. Function boot -->
        <footer>
        <div class = "d-flex justify-content-center">
            {!! $value->links() !!}
        </div> 
        </footer> 
        
    <!--     Second Product -->
        <!-- <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div> -->
        
        
        <!-- Third product -->
        <!-- <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
    </section> -->
        <!-- pizzas -->
        <!-- <div class="categoryHeader">Pizzas</div>
        <section class="pizza">
        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        
        
        
        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>

        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        </section> -->
        <!-- pizza ended -->

        <!-- noodles -->
        <!-- <div class="categoryHeader">Noodles</div>
        <section class="Noodles">
        <div class="card">
            
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        </section> -->

        <!-- STARTERS -->
        <!-- <div class="categoryHeader">product1</div>
        <section class="starters">
        <div class="card">
            
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        <div class="card">
            <div class="title">product1</div>
        
        <div class="image"><img src="https://via.placeholder.com/300

C/O https://placeholder.com/" alt=""></div>
        <div class="text">DescriptionOfProduct</div>
        <button class="cart-button">
            Add to cart
        </button>
        </div>
        </section> -->
        <!-- STARTERS FINISHED --> 

</body>
</html>