<?php
	session_start();
	require 'dbconfig/config.php';
?>

<html>

<head>
</head>
<style>
#body
{
background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(background1.jpg);
background-size:cover;
background-repeat:no-repeat;
}
#main{
width:1000px;
position:relative;
height:1250px;
margin:auto;
border:0px;
	
background:rgba(0,0,0,0.5);
box-shadow: 0px 0px 60px black;
}
#email{
	color:darkorange;
	font-size:10px;
	text-align:center;
	margin:450px;
	text-decoration:none;
	
}
#nav
{
width:1000px;
height:120px;

margin:auto;
font-family: "verdana";
background: rgba(0, 0, 0, 0.4);
}
#nav ul
{
list-style-type:none;
float:right;
margin-top:30px;
padding:0;
}
#nav ul li
{
display:inline-block;
}
#nav ul li a
{
margin-right:10px;
margin-top:50px:
font-size:30px;
display:inline-block;
text-decoration:none;
color:white; 
border-radius:0px;
transition:0.5s;

display:inline-block;
}
#nav ul:hover li a{
	transform:scale(1);
	opacity:.2;
	filter:blur(2px);
}
#nav ul li a:hover{
	transform:scale(1.3);
	opacity:1;
	filter:blur(0px);
	background:rgb(255,140,0,0.8);
	

	}

#logo
{
float:left;
width:130px;
height:80px;
margin:10px 2px 2px 10px;
border-radius:20px;
position:absolute;
cursor:pointer;
}
#logo:hover{
background:transparent;
border-radius:20px;
box-shadow:0px 2px 60px #c4f1fe ;
opacity:0.9;
}

#login-page 
{
  width: 360px;
  
  margin:auto;
  
  
  
}
#form {
  position: relative;
  z-index: 1;
  background: none;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 20px;
  text-align: center;
  border-radius:20px;

 
}
#form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: lightgrey;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  border-radius:360px;
}
#login {
  font-family: "comic";
  text-transform: uppercase;
  outline: 0;
  width: 100%;
  border: 0;
  padding: 15px;
  color: black;
  font-size: 18px;
  cursor: pointer;
}
#login:hover {
  background: darkorange;
  
}
#form message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
#form message a {
  color: #4CAF50;
  text-decoration: none;
}
#message{
	
	color:white;
}
#message a{
	color:darkorange;
}
#footer
{
width:1000px;
height:60px;
margin-top:720px;
font-family: "comic";
}
#footer ul
{
list-style-type:none;
}
#footer ul li
{
float:left;
margin-right:50px;
margin-left:50px;
}
#footer ul li a
{
color:white;
text-decoration:none;
}
#footer ul li a:hover{
background:darkorange;	
}
#active{
	
	background:rgb(255,140,0,0.9);
}

</style>

<body id="body">
<div id="main">
<div id ="nav">
	<a id="email" href="">sabi.mustaqeem@gmail.com</a><br>
	<img id="logo" src="snap and go 4.png" width="150" height="80">
	<ul>
	<li><a href="demoproject.html">HOME</a></li> 
	<li><a href="about us.html">ABOUT US</a></li>
	<li><a href="sampleregister.php">REGISTRATION</a></li>
	<li><a id="active" href="index.php">LOGIN</a></li>
	</ul>
</div><br><br>
<br><br>

 <div id="login-page">
  <div id="form">
    <form id="login-form" action="index.php" method="post">
      <input type="text" name="email" placeholder="email"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="submit" name="login" value="LOGIN" id="login">
      <p id="message">Not registered? <a href="sampleregister.php">Create an account</a></p>
    </form>
  </div>
  
</div>

	<?php
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
			
		$query="select * from userinfotable WHERE email='$email' AND password='$password'";
			
		$query_run = mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			// valid
			$_SESSION['email']= $email;
			header('location:samplehomepage.php');
		}
		else
		{
			// invalid
			echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
		}
			
	}
		
		
	?>
		
<div id="footer">
	<hr>
	<ul>
	<li><a href="about us.html">--ABOUT THE CREATORS--</a></li> 
	<li><a href="https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_India">--MORE ABOUT NUMBER PLATES--</a></li>
	<li><a href="demoproject.html">--BACK TO TOP--</a></li>
	</ul>

</div>
</div>
</body>
</html>