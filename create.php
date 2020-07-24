<?php 
error_reporting(0);

include './dbconn.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="create.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-4">
                    <form  action="" method="POST" id="formbox" class="form-container">
                        <h4 class="font-weight-bold">STUDENT FORM</h4>
                        <div id="input">
                            <label>First Name :</label>
                            <input type="text" class="form-control" name="firstname" id="username" placeholder="Enter First Name" required="">
                        </div>
                        <div id="input1">
                            <label>Last Name :</label>
                            <input type="text" class="form-control" name="lastname" id="password" placeholder="Enter Last Name" required="">
                        </div>
                        <div id="input1">
                            <label>Gender:</label>
                            <input type="text" class="form-control" name="gender" id="password" placeholder="Enter Gender" required="">
                        </div>
                        <div id="input1">
                            <label>Email-Id :</label>
                            <input type="email" class="form-control" name="email" id="password" placeholder="Enter Email-id" required="">
                        </div>
                        <div id="input1">
                            <label>Address :</label>
                            <input type="text" class="form-control" name="address" id="password" placeholder="Enter Address" required="">
                        </div>
                        <button type="submit"  name="submit" class="btn btn-primary" id="btn">Save</button>
                    </form>
                </section>
            </section>  
        </section>
        <?php
           
          if(isset($_POST['submit']))
            {
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $gender=$_POST['gender'];
              $email=$_POST['email'];
              $address=$_POST['address'];
              
              
              if($firstname!=="" && $lastname!=="" && $gender!=="" && $email!=="" && $address!=="")
              {
              $query="insert into student(firstname,lastname,gender,email,address) values('$firstname','$lastname','$gender','$email','$address')";
              $data=mysqli_query($conn, $query);
              echo '<br>';
              if($data==1)
              {
                  header("location:display.php");
              } 
              else
              {
                  echo 'data not inserted';
                 
              } 
             
              
              } 
              else{
                  echo 'all fields are required';
              }
              
            }
        
        ?>
    </body>
</html>
