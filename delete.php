<?php
include './dbconn.php';

$rollno=$_GET['rollno'];

 $query="delete from student where rollno='$rollno'";
 $check=mysqli_query($conn, $query);
 echo $check;
 
 if($check==1)
 {
      header('location:display.php');
 }
 else {
     echo 'deleted process failed';
}
?>