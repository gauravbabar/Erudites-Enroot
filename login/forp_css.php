<?php
    header("Content-type: text/css; charset: UTF-8");
?>

@import url(https://fonts.googleapis.com/css?family=Hind); /*---Body font--*/
@import url(https://fonts.googleapis.com/css?family=Nobile); /*---Heading font--*/

body{
  background-image: img1.jpg;
}

/* Form */
.form {
  position: relative;
  z-index: 1;
  background: transparent;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-radius: 5px;
   border: 2px solid rgba(255,255,255,3);
}

span{
color: rgba(255,0,0,12);
}

.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
	background-attachment: fixed;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: auto;
    height: 100%;
	background-size: 100% 100%;
}

 input[type=text], input[type=password], input[type=email]{
      outline: 0;
      width: 100%;
      margin: 0px;
      padding: 15px;
	  background: transparent;
	  border: 3px solid rgba(255,255,255,5);
	  color: #ffffff;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
}

input[type=date]{
      outline: 0;
      width: 50%;
      margin: 0px;
      padding: 6px;
	  background: transparent;
	  border: 3px solid rgba(255,255,255,5);
	  color: #ffffff;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
}

input[type=button]{
  outline: 0;
  width: 100%;
  padding: 15px;
  border-radius: 5px;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  background: #fff;
	border: 3px solid #ffffff;
	color: #a18d6c;
}

button{
  outline: 0;
  width: 100%;
  padding: 15px;
  border-radius: 5px;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  background: #fff;
	border: 3px solid #ffffff;
	color: #a18d6c;
}

input[type=number]{
	border-radius: 5px;
	background: transparent;
	  border: 3px solid rgba(255,255,255,5);
	  color: #fff
}

input[type=button]:hover{
	 color: #ffffff;
	 width: 100%;
     padding: 15px;
     border-radius: 5px;
     background: transparent;
     font-size: 14px;
     cursor: pointer;
     border-style: solid;
	 border-color: #ffffff;
}

button:hover{
	 color: #ffffff;
	 width: 100%;
     padding: 15px;
     border-radius: 5px;
     background: transparent;
     font-size: 14px;
     cursor: pointer;
     border-style: solid;
	 border-color: #ffffff;
}

input[type=button]:active{
      transform: translateY(4px);
}

button:active{
      transform: translateY(4px);
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.8);
}

b{
	text-align: left;
	color: #ffffff;
}

 .form .forget{
	 float:right;
	 color: rgba(255,0,0,12);
	 cursor:pointer;
	 font-size:13px;
	 text-decoration:none;
	 padding: 10px;
 }

p{
	color: rgba(255,255,255,8);
}

p.message{
	text-align: center;
	color: rgba(255,255,255,8);
}
.form .message {
  margin: 15px 0 0;
  font-size: 12px;
}
.form .message a {
  color: rgba(255,0,0,8);
  text-decoration: none;
}
.form .register-form {
  display: none;
}

 select{
      margin: 0px;
      padding: 2px;
	   border-radius: 5px;
	   background: transparent;
	  border: 3px solid rgba(255,255,255,5);
	  color: #FFFFFF;
      }

select option{
	background: rgba(0,0,0,0.3);
	color: #ffffff;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 600px;
  height: 100px;
  margin: 0 auto;
  background: transparent;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.info {
  margin-bottom: 25px;
  margin-left: 25px;
  width: 240px;
  height: 40px;
  text-align: center;
  text-decoration: none;
  /*border: 3px solid #ffffff;*/
}

.info .logo{
	text-decoration: none;
}

.info p{
	font-size: 24px;
	text-decoration: none;
	margin-top: 11px;
}

h2{font-family: 'Hind', sans-serif;}

/* END Form */
/* Demo Purposes */
body {
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  opacity: 0.9;
  color: rgba(255,0,0,12);
  font-size: 14px;
}
body:before {
  content: "";

  top: 0;
  left: 0;
  display: block;
  background: rgba(255, 255, 255, 0.8);
    background-image: img1.jpg;
  width: 100%;
  height: 100%;
}
