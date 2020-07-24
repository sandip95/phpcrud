
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    
    <body>
         <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success text-b"><a href="logout.php">LOGOUT</a></button>
        </div>
        <h3 class="text-uppercase text-b" style="text-align: center; color: #009999; margin-top: 5%">Welcome to Student page</h3>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-warning"  style=""><a href="create.php">ADD NEW RECORD</a></button>
        </div>
        <table class="col table table-bordered  table-striped">
	<tr  class="text-uppercase text-b" style="background-color: black; color: white;">
            <th>roll no.</th>
            <th>First Name</th> 
            <th>Last Name</th>
            <th>Gender</th>  
            <th>Email</th>
            <th>Address</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        
        
    
    <?php
        include './dbconn.php';
        error_reporting();
        $query = "select * from student";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);

        while($result=mysqli_fetch_assoc($data))
        {
        
        echo "<tr>
               <td>".$result['rollno']."</td>
               <td>".$result['firstname']."</td>
               <td>".$result['lastname']."</td>
               <td>".$result['gender']."</td>   
               <td>".$result['email']."</td>
               <td>".$result['address']."</td>
               <td><a href='update.php?rollno=$result[rollno]& firstname=$result[firstname]& lastname=$result[lastname]& gender=$result[gender]& email=$result[email]& address=$result[address]'><i class='far fa-edit' style='font-size:30px; color: green;'></i></a></td>
               <td><a href='delete.php?rollno=$result[rollno]' onclick='return checkdelete()'><i class='far fa-trash-alt' style='font-size:30px; color: red;'></i></a></td>
            </tr>";
        
    }



?>
</table> 
<script>
function checkdelete()
{
    return confirm("Are you sure you want to delete your record");
}
</script> 

</body>
</html> 

