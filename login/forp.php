<!DOCTYPE html>
<html >
<head>
  <title>Login</title>
      <link rel="stylesheet" type="text/css" href="forp_css.php">
	  <SCRIPT LANGUAGE="javascript" TYPE="text/javascript"
SRC="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</SCRIPT>
<SCRIPT LANGUAGE="javascript" TYPE="text/javascript"
SRC="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js">
</SCRIPT>
<SCRIPT>
$(function() {
 $("form[name='forp']").validate({
 rules: {
 user: {
required: true,
email: true
 }
 },
  messages: {
  user: {
required: "Please provide a email address",
email: "Please enter a valid email address"
}
 },
 submitHandler: function(form) {
 form.submit();
 }
 });
});

 </script>
	  </head>

<body style="background-image: img1.jpg;">

<div class="container">

</div>

<div class="form">


	   <div class="info">

</div>
  <form name="forp" method="post" action="forp1.php">
  <b>ENTER THE USERNAME</b><br>
	  <input type="email" name="user" id="user" placeholder="EMAIL ADDRESS" required="required"/><br><br>
	  <button type="submit">submit</button>
</div>

</body>
</html>
