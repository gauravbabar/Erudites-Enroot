<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
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
	$user = $_POST['uname'];
	$pass = $_POST['pass1'];

$sql = "SELECT * FROM customers WHERE user='$user' AND pass='$pass'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = $result->fetch_assoc();
 $count = mysqli_num_rows($result);

if($count==0){
 echo "<p style='text-align: center;color: black;font-style: bold; font-size: 30;'>Your username or password is incorrect!</p>";
}
else{
	$_SESSION['id'] = $row['id'];
	 header("Location: myclassroom/myclassroom.html");
	exit();
}

 mysqli_close($conn);
?>
</body>
</html>
