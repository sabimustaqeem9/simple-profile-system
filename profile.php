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


<style>
#body
{
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(office.jpg);
background-size:1400px 1300px;
background-repeat:no-repeat;
}
#main{
width:1000px;
position:relative;
height:1250px;
margin:auto;
border:0px;
	
background:rgba(0,0,0,0.4);
box-shadow: 0px 0px 60px black;
}
#outer
{
width:1000px;
height:200px;
margin:auto;
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

#h
{
font-family:"comic";

}

#signup
{
border-top:0px;
border-left:0px;
border-right:0px;
border-bottom:0px;
padding:10px 20px;
font-size:14px;
background-color:white;
font-weight:bold;
color:#2d525d;
cursor:pointer;
border-radius:20px;
}
#signup:hover{
background:darkorange;
}
#statement
{
color:#c4f1fe;
}


#image{
margin:auto;
border:7px solid white;
border-radius:360px;
width:250px;
height:250px;
cursor:pointer;
display:block;
transition:0.8s;
box-shadow:0px 0px 40px black;

}
#image:hover{
	background:transparent;
	transform:scale(1.2);
	filter:blur(0px);
	
}
#box{
width:400px;
height:auto;
margin:-40px 0px 80px 310px;
background:rgb(0,0,0,0.8);
box-shadow:0px 0px 300px black;
}
#items{
text-align:left;
font-family:"verdana";
font-size:14px;	
font-weight:bold;
display:inline-block;
cursor:pointer;
width:400px;
transition:0.5s;

}
#items ul{
	list-style-type:none;
color:white;


	}
#items li a{
	color:darkorange;
	text-align:center;
	font-weight:100;
	font-weight:bold;
	}
#items:hover li{
		transform:scale(1);
		filter:blur(1px);
	}
#items li:hover {
	background:rgb(0,0,0,0.3);
	transform:scale(1.5);
	filter:blur(0px);

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
	
	<li><a href="update.php">Update info</a></li>
	<li><a id="active" href="profile.php">Welcome <?php echo $_SESSION['email'] ?></a></li>
	<li><form action="index.php" method="post">
	<input id="signup" type="submit" name="logout" value="Logout"/>
	</form></li>
	
	</ul>
</div>
<hr><br>
<br><br><br><br>


	<?php
				$email=$_SESSION["email"];
				$query= "select * from userinfotable WHERE email='$email'";
				$query_run = mysqli_query($con,$query);
				$row=mysqli_fetch_array($query_run);	
				$id=$row["id"];
				if(mysqli_num_rows($query_run)>0)
				{
					echo	"<div id='box'>";
					echo	"<img id='image' src='".$row['image']."' /><br>";
					echo	"<div id='items'>";
					echo 	"<ul>";
					echo	"<li><a>USERNAME : {$row["name"]}</a></li><br>";
					echo	"<li><a>EMAIL : {$row["email"]}</a></li><br>";
					echo	"<li><a>LICENSE NUMBER : {$row["licenseno"]}</a></li><br>";
					echo	"<li><a>VEHICLE TYPE : {$row["type"]}</a></li><br>";
					echo	"<li><a>CONTACT NO : {$row["contactno"]}</a></li><br>";
					echo	"<li><a>ADDRESS : {$row["address"]}</a></li><br>";
					echo	"<li><a>CITY : {$row["city"]}</a></li><br>";
					echo	"<li><a>STATE : {$row["state"]}</a></li><br>";
					echo	"</ul>";			
					echo	"</div>";			
					echo	"</div>";
					
				}
	
	
	
	
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}
	?>
	
<div>	
</body>
</html>