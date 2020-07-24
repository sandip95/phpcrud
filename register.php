<?php
session_start();
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
        <link href="register.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-4">
                    <form  action="" method="POST" id="formbox" class="form-container">
                        <h4 class="font-weight-bold">REGISTER FORM</h4>
                        <div id="input">
                            <label>Username :</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required="">
                        </div>
                        <div id="input1">
                            <label>Password :</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required="">
                        </div>
                        <div id="input1">
                            <label>Confirm Password :</label>
                            <input type="password" class="form-control" name="cpassword" id="password" placeholder="Confirm Password" required="">
                        </div>
                        <button type="submit"  name="submit" class="btn btn-primary" id="btn">Register</button>
                        <a href="login.php">For login click here</a>
                    </form>
                </section>
            </section>  
        </section>
        <?php
            
        if (isset($_POST['submit']))
        {
           $user=$_POST['username'];
           $pass=$_POST['password'];
           $cpass=$_POST['cpassword'];
           
           
           if($pass==$cpass)
             {
           $q="select * from register where username='$user' && password='$pass'";
           $duplicate= mysqli_query($conn, $q);
           
           if(mysqli_num_rows($duplicate)>0)
           {
               exit('You are already user please login');
           }
           else
           {
           $query="insert into register(username, password)values('$user','$pass')";
           $data=mysqli_query($conn, $query);
           
           if($data)
           {
               header('location:login.php');
           }
           else
           {
               echo 'Registration process unsuccessful';
           }
           } 
           }
           else
               {
               echo 'password and confirm password not matched.';
               }
        }   
           
        ?>
    </body>
</html>

