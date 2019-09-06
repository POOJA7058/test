<html>
	<head>
		<title>Admin Page</title>
		<style>
			form{
				
				background-image:url(Blurred-BG.jpg);
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
	<body>
		<form action="" method="POST" enctype="multipart/data-from">
	
				<img src="bg.jpg" style="margin-left:05%"; width ="200" height = "100">
			<br>
			<h1 style="text-align: center;margin-bottom: 30px; color:white;">Admin Registeration</h1>
			<center>
			<input type="text" name="aname" placeholder="enter your name"><br><br>
			<input type="text" name="email" placeholder="enter email"><br><br>
			<input type="password" name="pass" placeholder="password"><br><br>
			<!--input type="file" name="image"><br><br-->
			<input type="submit" name="submit" value="submit"><br><br>
						<a href="adminlogin.php">admin registeration</a>
             </center>
			<br>
			<br>
			                  <center>
                   <div class="content " style="max-width:500px">
                   <img class="mySlides" src="swift.jpg" style="width:100%">
                   <img class="mySlides" src="backg.jpeg" style="width:100%">
                   <img class="mySlides" src="red.jpg" style="width:100%">
                   <img class="mySlides" src="Low_1938-Y-Job.jpg" style="width:100%">
                   <img class="mySlides" src="audi.jpg" style="width:100%">
                  </center>

      </div>

                  

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

		</div>
		

			
		</center>
		</form>
		<?php
		    error_reporting(0);
			require 'adminconn.php';
			if(isset($_POST['submit']))
			{
				$aname=$_POST['aname'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];

				echo $name;
				//$image=$_FILES['image']['tmp_name'];
				//$binary=fread(fopen($image,"r"),filesize($image));
				//$picture=base64_encode($binary)
			
				$insert=mysqli_query($conn,"INSERT INTO car_pr(aname,email,password)VALUES('$aname','$email','$pass')");
				if(!$insert)
				{
					echo $conn->error;
				}
			
			}
		?>
	</body>
</html>