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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = $_POST['pass'];


	$sql = "SELECT * FROM customers WHERE user='$user'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
 $count = mysqli_num_rows($result);

if(!$count==0){
     echo "<p style='text-align: center;color: black;font-style: bold; font-size: 30;'>USERNAME ALREADY EXIST</p>";
}
else{


$sql = "INSERT into customers(fname,lname,user,pass)
VALUES('".$fname."','".$lname."','".$user."','".$pass."')";
if(mysqli_query($conn, $sql)){
	$sql = "SELECT * FROM customers WHERE user='$user' AND pass='$pass'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row = $result->fetch_assoc();
	$_SESSION['id'] = $row['id'];

 echo "<script type='text/javascript'>window.top.location='myclassroom/myclassroom.html';</script>";
}
 else{
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
}
}
 mysqli_close($conn);
?>
</body>
</html>
