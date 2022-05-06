<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <style type="text/css">
      td {
        align: center;
        padding: 40px;
        font-size: 25px;
      }
    </style>

    <title>Document</title>
  </head>
  <body>
    <header>
      @include('user.navbar')
    </header>

    <div>
      <tr style="background-color: gray;">
        <td>Item</td>
        <td>Image</td>
        <td>Price</td>
      </tr>
    </div>
  </body>
</html>
