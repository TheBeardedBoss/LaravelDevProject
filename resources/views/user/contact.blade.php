<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
   

    <title>Document</title>
</head>
<header>
    @include('user.navbar')
</header>

<body class = "contactPage">
    
    
    
    <!-- required on the field's adds validation so data has to be entered before submitting. There is also a max limit placed on how much can be entered. -->
    <div id="contactBox">
    <form class ="labels" action="{{url('addContactMessages')}}" method="post">
        @csrf
        <h3>Contact Form!</h3>
        <div class ="areas">
            <label class= "targetLabels"   for="name">Name</label>
            <input class= "targetInputs"  name="name" type="text"  maxlength="36" required>
        </div>
        <div class ="areas"> 
            <label class= "targetLabels" for="email">Email</label>
        <input class= "targetInputs"  name="email" type="text" maxlength="50" required>
        </div>
        <div class ="areas">
            <label class= "targetLabels" for="number">Number</label>
        <input class= "targetInputs"  name="number" type ="tel" maxlength="11"  required>
        </div>
        <div class ="areas">
            <label class= "targetLabels" for="message">Message</label>
           <textarea class ="targetInputs" name="message" id="" cols="30" rows="10" maxlength="400" required ></textarea>
        </div>
        <button class="SendMessage">
           
           Send Message!
        </button>
       </form>
    </div>
     
   
    
</body>
</html>