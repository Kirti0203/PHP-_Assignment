<?php include("navbar.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-2">
            <form action = "managecart.php" method="POST">
            <div class="card text-center">
              <img src="images/1.jpeg" class="card-img-top">
              <div class="card-body">
               <h5 class="card-title">Beautiful saree</h5>
               <p class="card-text">Price: Rs-510</p>
               <button type="submit" name="Add_to_cart" class="btn btn-info" class="btn btn-primary">Add to cart</button>
               <input type="hidden" name="Item_name" value="Beautiful saree">
               <input type="hidden" name="price" value="510">
            </div>
        </div>
</form>
    </div>

    <div class="col-lg-2">
            <form action = "managecart.php" method="POST">
            <div class="card text-center">
              <img src="images/2.webp" class="card-img-top">
              <div class="card-body">
               <h5 class="card-title">Printed red saree</h5>
               <p class="card-text">Price: Rs-600</p>
               <button type="submit" name="Add_to_cart"  class="btn btn-info" class="btn btn-primary">Add to cart</button>
               <input type="hidden" name="Itemname" value="Printed red saree">
               <input type="hidden" name="price" value="600">
            </div>
        </div>
</form>
    </div>

    <div class="col-lg-2">
            <form action = "managecart.php" method="POST">
            <div class="card text-center">
              <img src="images/3.jpg" class="card-img-top">
              <div class="card-body">
               <h5 class="card-title">Beautiful saree</h5>
               <p class="card-text">Price: Rs-650</p>
               <button type="submit" name="Add_to_cart"  class="btn btn-info" class="btn btn-primary">Add to cart</button>
               <input type="hidden" name="Itemname" value="Beautiful saree">
               <input type="hidden" name="price" value="650">
            </div>
        </div>
</form>
    </div>

    <div class="col-lg-2">
            <form action = "managecart.php" method="POST">
            <div class="card text-center">
              <img src="images/4.jpg" class="card-img-top">
              <div class="card-body">
               <h5 class="card-title">Printed cotton pink saree</h5>
               <p class="card-text">Price: Rs-550</p>
               <button type="submit" name="Add_to_cart" class="btn btn-info" class="btn btn-primary">Add to cart</button>
               <input type="hidden" name="Itemname" value="Printed cotton pink saree">
               <input type="hidden" name="price" value="550">
            </div>
        </div>
</form>
    </div>

    <div class="col-lg-2">
            <form action = "managecart.php" method="POST">
            <div class="card text-center">
              <img src="images/5.jpg" class="card-img-top">
              <div class="card-body">
               <h5 class="card-title">Printed combo t-shirts</h5>
               <p class="card-text">Price: Rs-400</p>
               <button type="submit" name="Add_to_cart" class="btn btn-info" class="btn btn-primary">Add to cart</button>
               <input type="hidden" name="Itemname" value="Printed combo    t-shirts">
               <input type="hidden" name="price" value="400">
            </div>
        </div>
</form>
    </div>
 </div>
</div>
</body>
</html>