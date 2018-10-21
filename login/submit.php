<?php
     session_start();
	 $dbhost = 'localhost:3306';
 $dbuser = 'root';
 $dbpass = '';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
 if(!$conn)
 {
 die('Could not connect: '.mysql_error());
 }
 $db_select = mysqli_select_db($conn,'register');
 if (!$db_select) {
    die("Database selection failed: ".mysqli_error());
 }
	$id = $_SESSION['id'];
$sql = "SELECT * FROM customers WHERE id='$id'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result)or die(mysqli_error($conn));
?>


<!DOCTYPE html>
<html >
<head>
  <title>Login</title>
  
  <!--yeh vo link to css with .php-->
      <link rel="stylesheet" type="text/css" href="submit_css.php">
	  <!--yeh vo link to css with .php-->
	  
	  
	  <h2>customer detail</h2>
	  <div>
	  <?php
	  echo "NAME =".$row['fname']."&nbsp";
	  echo $row['lname']."<br>";
	  echo "ADDRESS =".$row['address'];
	  ?>
	  </div>
	  
	  <h2>customer account detail</h2>
	  <div>
	  <?php
	  echo "CARD HOLDER NAME =".$row['cname']."<br>";
	  echo "CARD TYPE =".$row['type']."<br>";
	  echo "ACCOUNT NUMBER =".$row['ano']."<br>";
	  echo "CVV =".$row['cvv']."<br>";
	  echo "EXPIRY DATE =".$row['edate'];
	   mysqli_close($conn);
	  ?>
	  </div>
	  </head>
	  </body>
</html>