<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 20px; }
    .cart-link{width: 100%;text-align: right;display: block;font-size: 40px; color:white;}
	.cart-link:hover{width: 100%;text-align: right;display: block;font-size: 40px; color:white;}
    </style>
</head>
</head>
<body background="img4.jpg" style="background-attachment:fixed; background-size:100%;">
<div class="container">
    <h1 style="color:white;">Products</h1>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group" style="width:100%;padding:50px;" >
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id ASC");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4" >
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
					<p class="image"><?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="max-height:150px;">';
					?></p>
                   
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo 'Rs.'.$row["price"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>