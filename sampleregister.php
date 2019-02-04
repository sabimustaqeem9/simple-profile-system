<?php
	require 'dbconfig/config.php';
?>

<html>
<head>
<title> REGISTRATION FORM</title>
<style>
#body
{
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(road.jpg);
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
#footer
{
width:1000px;
height:60px;
margin-top:200px;
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
</head>
<body  id="body">
<div id="main">
<div id ="nav">
	<a id="email" href="">sabi.mustaqeem@gmail.com</a><br>
	<img id="logo" src="snap and go 4.png" width="150" height="80">
	<ul>
	<li><a href="demoproject.html">HOME</a></li> 
	<li><a href="about us.html">ABOUT US</a></li>
	<li><a id="active" href="sampleregister.php">REGISTRATION</a></li>
	<li><a href="index.php">LOGIN</a></li>
	</ul>
</div>
<hr><br>
<div align="center" id="heading">
	<h1>Register here</h1>
</div><br>
<div id="box">
<form id="form" action="sampleregister.php" method="post" enctype="multipart/form-data">
NAME :  
<input type="text" placeholder="Enter your name" name="name"/></br></br>
EMAIL ADDRESS :
<input type="email" placeholder="Enter your email address" name="email"/></br></br>
PASSWORD :
<input type="password" placeholder="......." name="password"/><br><br>
CONFIRM PASSWORD :
<input type="password" placeholder="......." name="cpassword"/><br><br>
PROFILE PHOTO :
<input type="file" name="upload" value=""/><br><br>
ADDRESS :
<input type="text" placeholder="Enter your address" name="address"/></br></br>
STATE :
<select name="state">
<option>--select--</option>
<option>New Delhi</option>
<option>Gujarat</option>
<option>Himachal Pradesh</option>
<option>Maharashtra</option>
<option>Madhya Pradesh</option>
<option>New Delhi</option>
<option>Punjab</option>
<option>Haryana</option>
<option>Uttar Pradesh</option>                                                                                                                                                                                              
</select>
CITY :
<select name="city">
<option>--select--</option>
<option>Kanpur</option>
<option>Delhi</option>
<option>Chandigarh</option>
<option>Mumbai</option>
<option>Shimla</option>
<option>Nainital</option>
<option>Ambala</option>
<option>Kundli</option>
<option>Bikaner</option>
<option>Greater Noida</option>
<option>Gurgaon</option>
<option>Lucknow</option>
<option>Ghaziabad</option>
<option>Agra</option>
<option>Varanasi</option>
<option>Meerut</option>
<option>Allahabad</option>
<option>Bareilly</option></select><br><br>
CONTACT NO. :
<input type="text" placeholder="Enter your Contact" name="contactno"/><br><br>
VEHICLE TYPE :
<select name="type">
<option>--select--</option>
<option>LMV(Light Motor Vehicle)</option>
<option>TWO WHEELER</option></select><br><br>
LICENSE PLATE NO. :
<input type:"text" placeholder="Enter your License Plate no"name="licenseno"/></br></br>

<button name="submit_btn">SUBMIT</button>

</form>

<?php
	if(isset($_POST['submit_btn']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city=$_POST['city'];
		$contactno=$_POST['contactno'];
		$type=$_POST['type'];
		$licenseno=$_POST['licenseno'];
		$filename=$_FILES["upload"]["name"];
		$tempname=$_FILES["upload"]["tmp_name"];
		$folder="images/".$filename;
		move_uploaded_file($tempname,$folder);
				
		if($name!="" && $email!="" && $address!="" && $contactno!="" && $licenseno!="")	
		{
			if($password==$cpassword)
			{
				$query= "select * from userinfotable WHERE email='$email'";
				$query_run = mysqli_query($con,$query);
					
				if(mysqli_num_rows($query_run)>0)
				{
						
					echo '<script type="text/javascript"> alert("Email already exists.. try another email") </script>';
				}
				else
				{
					$query= "insert into userinfotable values('','$name','$email','$password','$address','$state','$city','$contactno','$type','$licenseno','$folder')";
					$query_run = mysqli_query($con,$query);
						
					if($query_run)
					{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
					}
					else
					{
							echo '<script type="text/javascript"> alert("Error!") </script>';
					}
				}
					
					
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
			}
		}
	else
	{
		echo '<script type="text/javascript"> alert("ALL FIELDS ARE REQUIRED")</script>';
	}	
	}
?>
	
	</div>
	
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