<?php
	require 'dbconfig/config.php';
	session_start();
	if($_SESSION["email"]==true)
	{
	
	}
	else
	{
		header('location:index.php');
	}
?>

<html>
<head>
<title>UPDATE FORM</title>
<style>
#body
{
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(road2.jpg);
background-size:1400px 1300px;
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
background: rgba(0, 0, 0, 0.5);
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
	background-color:darkorange;
	

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

#form button
{
font-family: "arial";
  text-transform: uppercase;
  text-align:center;
  outline: 0;
  width: 100px;
  border: 0;
  padding: 15px;
  font-size: 14px;
  background-color:white;
font-weight:bold;
color:#2d525d;
cursor:pointer;
border-radius:20px;
}
#form button:hover {
  background: darkorange;
  opacity:.9;
}
#heading
{
width:494px;
height:40px;
border-radius:20px;
padding:2px;
border-top:0px;
border-left:0px;
border-right:0px;
border-bottom:0px;
font-size:12px;;
font-weight:bold;
color:white;
text-decoration:underline;
text-transform:uppercase;
font-family:"times new roman";
cursor:pointer;
margin:10px 255px auto;
}
#form
{
color:white;
}
#form input {
  font-family: "courier", sans-serif;
  outline: 0;
  background: #f2f2f2;
  border: 0;
  margin: auto;
  padding: 15px;
  box-sizing: border-box;
  font-size: 12px;
  }
#box
{
width:470px;
height:auto;
background: rgba(0,0,0,.5);  
padding: 40px;
font-weight:bold;
font-family:"courier";
border-radius:20px;
margin:10px 220px auto;
}
#signup
{
padding:10px 20px;
border:0px;
font-size:14px;
background-color:white;
font-weight:bold;
color:#2d525d;
cursor:pointer;
}
#signup:hover{
	background:darkorange;
}
</style>
</head>
<body  id="body">
<div id="main">
<div id ="nav">
	<img id="logo" src="snap and go 4.png" width="150" height="80">
	<ul>
	<li><a href="profile.php">Welcome <?php echo $_SESSION['email'] ?></a></li>
	<li><form action="index.php" method="post">
	<input id="signup" type="submit" name="logout" value="log out"/>
	</form></li>
	
	</ul>
</div>
<hr><br><br>
<div align="center" id="heading">
	<h1>Update here</h1>
</div><br>
<div id="box">
<form id="form" action="update.php" method="post" enctype="multipart/form-data">
NAME :  
<input type="text" placeholder="Change name" name="name"/></br></br>
PASSWORD :
<input type="password" placeholder="......." name="password"/><br><br>
CONFIRM PASSWORD :
<input type="password" placeholder="......." name="cpassword"/><br><br>
PROFILE PHOTO :
<input type="file" name="upload" value=""/><br><br>
CONTACT NO. :
<input type="text" placeholder="Enter new Contact" name="contactno"/><br><br>
<button name="update">SUBMIT</button>

</form>

<?php
	if(isset($_POST['update']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city=$_POST['city'];
		$contactno=$_POST['contactno'];
		$type=$_POST['type'];
		$licenseno=$_POST['licenseno'];
		$new=$_SESSION["email"];
		$filename=$_FILES["upload"]["name"];
		$tempname=$_FILES["upload"]["tmp_name"];
		$folder="images/".$filename;
		move_uploaded_file($tempname,$folder);	
			if($password==$cpassword)
			{
					$query= "update userinfotable set name='$name',password='$password',address='$address',state='$state',city='$city',contactno='$contactno',licenseno='$licenseno', image='$folder' where email='$new'";
					$query_run = mysqli_query($con,$query);
					if(isset($query_run))
					{
						echo '<script type="text/javascript"> alert("User Updated.. Go to login page to login") </script>';
						session_destroy();
						
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
				
					
				
			}
			else
			{
				
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
			}
	}
	if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}

	?>
</div>
</html>