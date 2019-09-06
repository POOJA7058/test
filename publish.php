<html>
   <head>
   	  <title>publish page</title>
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
   	  	  	padding-left: 5px;
   	  	  	border:1px solid black;
   	  	  	background-color: white;
   	  	  	text-align: center;
   	  	  	padding-right: 10px;
   	  	  	}

         form{
            background-image: url(io.jpeg);
            width:100%;
            height:100%;
            background-repeat: no-repeat;
            background-size:cover;
         }
         input[type="text"],input[type="password"],input[type="file"]{
            width:100%;
            border-bottom:1px solid white;
            margin-left: 20%;
         }
         textarea{
             border-bottom:1px solid white;
            margin-left: 20%;
         }
         input[type="submit"]{
            width:57%;
            height: 40px;
            background-color: lime;
            margin-left:30%;
         }
         label{
            padding-left: 30%;
         }
         
      </style>
   	  </style>
   </head>
   <body background="pink">
   		<ul>
   			<li><a href="publish.php"> NEWS</a></li>
   			<li><a href="pid.php">MANAGE PUBLICATION</a></li>
   			<li><a href="logout.php">LOGOUT</a></li>
   		</ul>
         <br>
         <div class="div1">
            <form action="" method="POST" enctype="multipart/form-data">
               <br>
               <p style="text-align:center; color:white; font-size: 200%">publish</p>
               <div class="row">
                  <div class="col-md-2">
                <p style="text-align:center; color:white; font-size: 150%;">Title</p>
                  </div>
                  <div class="col-md-5">
                     <input type="text" name="title" placeholder="Enter title">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                   <p style="text-align:center; color:white; font-size: 150%">Comment</p>
                  </div>
                  <div class="col-md-5">
                     <textarea name="Comment" rows="10" cols="30"></textarea>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                    <p style="text-align:center; color:white; font-size: 150%">Image</p>
                  </div>
                  <div class="col-md-5">
                     <input type="file" name="image" color:white;>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                     <p style="text-align:center; color:white; font-size: 150%">Website linl or contact</p>
                  </div>
                  <div class="col-md-5">
                     <input type="text" name="weblink" placeholder="Enter weblink">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                    <p style="text-align:center; color:white; font-size: 150%">Email</p>
                  </div>
                  <div class="col-md-5">
                     <input type="text" name="email" placeholder="Enter email">
                  </div>
               </div>
               <br> 
               <div class="col-md-10">            
               <input type="submit" name="submit" value="PUBLISH">             
            </form>
         </div>
         <?php
           require 'adminconn.php';
           if(isset($_POST['submit']))
             {
               $title=$_POST['title'];
               $comment=$_POST['Comment'];
               $email=$_POST['email'];
               $weblink=$_POST['weblink'];
               $image=$_FILES['image']['tmp_name'];
               
               $binary=fread(fopen($image,"r"),filesize($image));
               $picture=base64_encode($binary);
               
               $insert=mysqli_query($conn,"INSERT INTO psr(title,Comment,image,weblink,email)VALUES('$title','$comment','$picture','$weblink','$email')");
               if(!$insert)
               {
                  echo $conn->error;
               }
            
               echo "<script>";
               echo "document.location.replace('./home.php')";
               echo "</script>";
            
          }
         ?>
   </body>
</html>