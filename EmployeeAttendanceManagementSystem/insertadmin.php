<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="col-sm-12" style="background-color:lavenderblush"> 

      <h1 class="text-center" >Add New Admin Here</h1>
  <br>

   <a href="dashboard.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

</div>  



   <div class="col-sm-6" style="background-color:lavenderblush;">
     <h1 class="text-center">Enter details of new Admin.</h1>

<form  action="" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Name:</label>
   <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name" required="" >
 </div><!-- -->
 
 <div class="form-group">
   <label for="formGroupExampleInput">Email:</label>
   <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="email"required="">
 </div><!-- -->

 <div class="form-group">
   <label for="formGroupExampleInput2">Username:</label>
   <input type="text" name="username" class="form-control" id="formGroupExampleInput2" placeholder="username"required="">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Password:</label>
   <input type="text" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password" required="">
 </div>

 
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit">submit</button>
  </div> 

   </form>
   

</div>

<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
  
   $name =  $_POST["name"];
   $email =  $_POST["email"];
   $username =  $_POST["username"];
   $password  = $_POST['password'];
 

  $sql = "INSERT INTO `admin`(`name`, `email`, `username`, `password`) VALUES ('$name','$email','$username','$password')";


   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('new admin added Successfully.')){window.location = "dashboard.php";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add new admin. Some error occured")){window.location = "dashboard.php";}
   
     </script>
   <?php
   }	 
   
  }

?>

<?php } ?>


