<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/scripts/my.css" />

    <title>Registration</title>

    <style>
        .login-panel {
            margin-top: 150px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >
                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br><a href="login.php">Login here</a></center>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php
    include("connect.php");
    
    if(isset($_POST['register']))
    {
        $user_name = $_POST['name'];
        $user_password = $_POST['password'];
        $user_email = $_POST['email'];
        
        if($user_name == '')
        {
            echo"<script>alert('Please enter the name')</script>";
            exit();//this use if first is not work then other will not show
        }
        if($user_password == '')
        {
            echo"<script>alert('Please enter the password')</script>";
            exit();
        }
        if($user_email == '')
        {
            echo"<script>alert('Please enter the email')</script>";
            exit();
        }

        //Here query check weather if user already registered so can't register again
        $check_email_query = "SELECT * FROM users WHERE user_email='$user_email'";
        $result = $conn->query($check_email_query);

        if(mysqli_num_rows($result))
        {
            echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
            exit();
        }
        
        //Insert the user into the database
        $insert_user = "INSERT INTO users (username,password,email) VALUES ('$user_name','$user_password','$user_email')";
        if($conn->query($insert_user))
        {
            $_SESSION['email'] = $user_email;   //here session is used and value of $user_email store in $_SESSION.
            echo"<script>window.open('welcome.php','_self')</script>";
        }
    }
?>