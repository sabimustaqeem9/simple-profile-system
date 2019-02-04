<?php
	require 'dbconfig/config.php';
	session_start();

	?>

<html>
<head>


<style>
#body
{
background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(hero_1.jpg);
background-size:1400px 1300px;
background-repeat:no-repeat;
}
#main{
width:1000px;
position:relative;
height:1250px;
margin:auto;
border:0px;
	
background:rgba(0,0,0,0.6);
box-shadow: 0px 0px 60px black;
}
#outer
{
width:1200px;
height:1000px;
margin:auto;
border-radius: 20px 20px 0px 0px;

}
#lside
{
border-top:0px;
border-left:0px;
border-right:0px;
border-bottom:0px;
padding:10px 20px;
width:300px;
height:auto;
background:#f2f2f2;
float:left;
border-radius:20px 20px 20px 20px;
margin:10px 2px 2px 10px;
font-family: "Courier";
box-shadow:0px 0px 30px black;
transform-property:width, height;
transition:0.4s;
}
#lside:hover{
width:475px;
height:auto;
background:white;
}
#rside
{
width:500px;
color:white;
height:500px;
float:left;
border-radius:20px 20px 20px 20px;
margin-top:5px;
margin-left:5px;

}
#content
{
color:#174a9b;
text-align:auto;
font-size:18px;
font-style:bold;
}
#head1
{
color:#174a9b;
text-decoration:none;
text-align:center;
font-size:35px;
font-family:"Times New Roman";
}
#email{
	color:darkorange;
	font-size:10px;
	text-align:center;
	margin:10px;
	text-decoration:none;
	
}
#nav
{
width:1000px;
height:120px;
border-radius:20px;
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

#h
{
font-family:"Arial";

}
#footer
{
width:1000px;
height:60px;
margin-top:30px;
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
#signup
{
border-top:0px;
border-left:0px;
border-right:0px;
border-bottom:0px;
border-radius:20px;
padding:10px 20px;
font-size:14px;
background-color:white;
font-weight:bold;
color:black;
cursor:pointer;
}
#signup:hover{
background:darkorange;
}
#statement
{
color:darkorange;
}
#active{
	
	background:rgb(255,140,0,0.9);
}
</style>
</head>
<body id="body" >
<div id="main">
<div id ="nav">
	<img id="logo" src="snap and go 4.png" width="150" height="80">
	<ul>
	<li><a id="active" href="samplehomepage.php">HOME</a></li> 
	<li><a href="profile.php">Welcome <?php echo $_SESSION['email'] ?></a></li>
	</ul>
</div>
<br><br>
<div id="outer">
	<div id="lside">
	<h1 id="head1">SNAP AND GO </h1>
	<p id="content">Snap and Go is a technology 
	that uses optical character recognition on images to read vehicle license plates to 
	create vehicle access data. It can use existing closed-circuit television, road-rule enforcement cameras, or cameras 
	specifically designed for the task. S&G is used by parking owners around the world for the purposes, 
	including to check if a vehicle is registered under the parking rules. It is also used for checking
	whether the customer has paid their fees for the parking facility.It helps in maintaining a continuous flow
	of traffic without any hassle.
	
	</p>
	</div>
	<div id="rside">
	<h1 id="h">CURRENTLY UNDER MAINTENANCE!</h1>
	<form action="index.php" method="post">
	<p id="statement">Do you want to log out?</p>
	<input id="signup" type="submit" name="logout" value="log out"/>
	</form>
	
	
	</div>
</div>
<hr></hr>
<div id="footer">
	<ul>
	<li><a href="about us.html">--ABOUT THE CREATORS--</a></li> 
	<li><a href="https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_India">--MORE ABOUT NUMBER PLATES--</a></li>
	<li><a href="demoproject.html">--BACK TO TOP--</a></li>
	</ul>

</div>
	<?php
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}
	?>
	</div>
</div>
</body>
</html>