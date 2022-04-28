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
    <h1 class = "contactHeader">Contact Us!</h1>
    <div id="contactBox">
    <form action="">
        <label for="name">name</label>
        <input type="text">
        <label for="email">Email</label>
        <input type="text">
        <label for="number">Number</label>
        <input type ="number">
        <label for="Message">Message</label>
        <input type="text">

    </form>
    </div>
</body>
</html>