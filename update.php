<?php
        require 'adminconn.php';
        if(isset($_POST['submit']))
        {
          $id=$_POST['pid'];
          $accept=mysqli_query($conn,"SELECT * FROM psr WHERE pid='$id'");
          $number=mysqli_num_rows($accept);
          if($number==1)
          {
            session_start();
            $row=mysqli_fetch_assoc($accept);
              $title=$row['title'];
               $comment=$row['Comment'];
               $email=$row['email'];
               $weblink=$row['weblink'];
               $image=$row['image'];

          }
        }
      ?>

      <div class="div1">
            <form action="" method="POST" enctype="multipart/form-data">
               <br>
               <p style="text-align:center; color:white; font-size: 200%">publish</p>
               <div class="row">
                  <div class="col-md-2">
                <p style="text-align:center; color:white; font-size: 150%;">Title</p>
                  </div>
                  <div class="col-md-5">
                     <input type="text" name="title" placeholder="Enter title" value="<?php echo $title;?>">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                   <p style="text-align:center; color:white; font-size: 150%">Comment</p>
                  </div>
                  <div class="col-md-5">
                     <textarea name="Comment" rows="10" cols="30" value="<?php echo "Comment"?>"> ></textarea>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                    <p style="text-align:center; color:white; font-size: 150%">Image</p>
                  </div>
                  <div class="col-md-5">
                     <input type="file" name="image" value="<?php echo $image;?>"> 
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                     <p style="text-align:center; color:white; font-size: 150%">Website linl or contact</p>
                  </div>
                  <div class="col-md-5">
                     <input type="text" name="weblink" placeholder="Enter weblink" value="<?php echo $image;?>"> 
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-2">
                    <p style="text-align:center; color:white; font-size: 150%">Email</p>
                  </div>
                  <div class="col-md-5">
                     <input type="text" name="email" placeholder="Enter email" value="<?php echo $image;?>">
                  </div>
               </div>
               <br> 
               <div class="col-md-10">            
               <input type="submit" name="submit" value="PUBLISH" value="<?php echo $image;?>">           
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
               
               $insert=mysqli_query($conn,"UPDATE INTO psr(title,Comment,image,weblink,email)VALUES('$title','$comment','$picture','$weblink','$email')");
               if(!$insert)
               {
                  echo $conn->error;
               }
            
               echo "<script>";
               echo "document.location.replace('./home.php')";
               echo "</script>";
            
          }
         ?>