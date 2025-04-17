<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board_system_");

    if(isset($_POST['login'])) {
        $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            while($row = mysqli_fetch_assoc($query_run)) {
                echo "<script>
            window.location.href = 'user_dashboard.php';
            </script>";
            }
        }
        else {
            echo "<script>alert('Please Enter correct email id and password');
           
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Notice Board</title>
     <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js" charset="utf-8"></script>
    
    <!-- CSS FILE -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header section code start  here -->
    <div class="row" id="header">
        <div class="col-md-4">
    </div>
        <div class="col-md-4">
        <h3>Online Notice Board System</h3>
    </div>
        <div class="col-md-4">
    </div>
</div>

    <!-- Login Form code start here -->
    <section id="login_form">
        <div class="row">
            <div class="col-md-4 m-auto block">
                <center><h4>Login Form</h4></center>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label>Email ID: </label>
                        <input class="form-control" type="text" name="email" placeholder="Enter your email">   
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input class="form-control" type="password" name="password" placeholder="Enter your Password">
                    </div>
                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                </form>
                <a href="register.php">Click here to register</a>
            </div>  
        </div>
    </section>
</body>
</html>