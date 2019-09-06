<html>
   <head>
   	  <title>Home Page</title>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   	  <style>
   	  	ul{
   	  		list-style-type: none;
            margin-left: 3%;
   	  	 }
   	  	  li{
   	  	  	float: left;
   	  	  	padding-left: 10px;
   	  	  	border:1px solid black;
   	  	  	background-color: pink;
   	  	  	text-align: center;
   	  	  	padding-right: 5px;
   	  	  	}
            form{
   	  	  	background-color: pink;
            width:100%;
            height:100%;
            background-repeat: no-repeat;
            background-size:cover;
   	  	  	}
   	  </style>
   </head>
   <body >
      
   		<ul>
   			<li><a href="publish.php">PUBLISH</a></li>
   			<li><a href="pid.php">MANAGE PUBLICATION</a></li>
   			<li><a href="logout.php">LOGOUT</a></li>
        <li><a href="delete.php">DELETE</a></li>
        <li><a href="update.php">UPDATE</a></li>


   		</ul>
   		<br>
   		<br>
   		 
   		<?php
          require 'adminconn.php';
          $accept=mysqli_query($conn,"SELECT * FROM psr");
          $number=mysqli_num_rows($accept);
           if($number)
           {
           	 while($row=mysqli_fetch_assoc($accept))
           	 {
           	 	$title=$row['title'];
           	 	$comment=$row['Comment'];
           	 	$email=$row['email'];
           	 	$weblink=$row['weblink'];
           	 	$image=$row['image'];
           	 	?>
           	 		<div class="div1" style="border:none;  ">
           	 			<div class="row">
           	 				<div class="col-md-4">
           	 				  <?php
           	 				   echo"<img src=data:image/jpg;base64,$image width='100%' height='40%'>";
           	 				   ?>
           	 				</div>
           	 				<div class="col-md-8" style="padding-left: 20px;">
                      	<h1><?php echo $title;?></h1><br>
  		           	 			<div><?php echo $comment;?></div>
  		           	 			<a href='<?php  echo $weblink ?>'><?php  echo $weblink ?>'</a><br>
  		           	 			<p><?php  echo $email;?></p>
                   </div>
           	 		    </div>
           	 		</div>
           	 	<?php
           	 }
           }
           else
           {
           	 echo "not post yet";
           }
   		?>
   </body>
</html>