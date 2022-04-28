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
<body>
    <h1 class ="contactHeader">Contact Us!</h1>
    
    
    <div id="contactBox">
    <form class ="labels" action="">
        
        <div><label for="name">name</label>
        <input type="text"></div>
        <div> <label for="email">Email</label>
        <input type="text"></div>
        <div><label for="number">Number</label>
        <input type ="number"></div>
        <div><label for="Message">Message</label>
        <input type="text"></div>

    </form>
    </div>
</body>
</html>