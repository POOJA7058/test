<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="homestyle.css">
		<style>
			form{
			
				background-image: url(io.jpeg);
				width:100%;
				height:100%;
				background-repeat: no-repeat;
				background-size:cover;
				
			}
			input[type="text"],input[type="password"]{
			border:0;
				outline: 0;
				border-bottom:10px solid white;
				margin-left: 1%;
			
				
			
			}
			input[type="submit"]{
				width:15%;
				background-color: gray;
				margin-left: 2%;
		 		padding:10px;
			}
			a{
				text-decoration:none;
				color:white;
			}
		</style>

		
    
 </head>
<body background="Blurred-BG.jpg">
	  
	<h4 style="margin-left:65%; color:orange;"> poojaraut7058@gmail.com | Tell : +91 7058464031</h4>
		<h1 style="margin-left:45%; color:white;">Car News</h1>
	 			  
    <img src="bg.jpg" style="margin-left:05%"; width ="200" height = "100">
    <h4 style="margin-left:04%; color:white"> The new class of world class.<br><br>
    <a href="publish.php">Make a post</a><br>
    <a href="home.php">Posts</a>


		<form action="" method="POST" enctype="multipart/data-from">

                
			<br>
			<h1 style="text-align: center;margin-bottom: 50px; color:white;">admin login</h1>
			
		</center>
		</form>
		<?php
		error_reporting(0);
		   require 'adminconn.php';
		   if(isset($_POST['submit']))
		   {
		   	 $aname=$_POST['aname'];
		   	 $pass=$_POST['pass'];
				$accept=mysqli_query($conn,"SELECT * FROM car_pr WHERE aname='$aname' AND password='$pass'");
			    $number=mysqli_num_rows($accept);
			    if($number==1)
			    {
			      session_start();
			      $row=mysqli_fetch_assoc($accept);
			      $userid=$row['id'];

			      echo"<script>";
			      echo "document.location.replace('./publish.php')";
			      echo"</script>";

		     	}
		   }



		?>
					

	</body>
</html>