<?php
    session_start();    //session starts here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/scripts/my.css" />

    <title>Login</title>

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
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php
    include("connect.php");

    if(isset($_POST['login']))
    {
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];

        $check_user = "SELECT * FROM users WHERE user_email='$user_email'AND user_pass='$user_password'";
        $result = $conn->query($check_user);

        if(mysqli_num_rows($result))
        {
            $_SESSION['email'] = $user_email;   //here session is used and value of $user_email store in $_SESSION.        
            echo "<script>window.open('welcome.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Email or password is incorrect!')</script>";
        }
    }
?>v>
   </body>
</html>