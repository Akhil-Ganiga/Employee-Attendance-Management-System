<?php




    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));


// sql to delete a record

$delete_id = @$_GET['delete'];

$sql = "DELETE FROM `admin` WHERE  name='$delete_id'";


if ($con->query($sql) === TRUE) {
   ?>
   <script>
]        if(!alert('Employee deleted successfully.')){window.location = "admin.php?view_employee=view_employee";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not delete employee.Some error occured')){window.location = "admin.php?view_employee=view_employee";}
   
     </script>
   <?php
   }

$con->close();

			  
?>