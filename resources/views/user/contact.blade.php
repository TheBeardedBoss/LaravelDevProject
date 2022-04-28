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
    <div class = "wrapperContact">
    <h1 class ="contactHeader">Contact Us!</h1>
    
    
    <div id="contactBox">
    <form class ="labels" action="">
        <h3>Contact Form!</h3>
        <div class ="areas"><label class= "targetLabels"   for="name">name</label>
        <input class= "targetInputs" type="text"></div>
        <div class ="areas"> <label class= "targetLabels" for="email">Email</label>
        <input class= "targetInputs" type="text"></div>
        <div class ="areas"><label class= "targetLabels" for="number">Number</label>
        <input class= "targetInputs" type ="number"></div>
        <div class ="areas"><label class= "targetLabels" for="Message">Message</label>
        <input class= "targetInputs" type="text"></div>

    </form>
    </div>
    </div>
</body>
</html>