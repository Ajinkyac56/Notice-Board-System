<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board_system_");

    if(isset($_POST['register'])) {
        $query = "insert into users
        values(null, '$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[class]')";
        $query_run = mysqli_query($connection,$query);
        if($query_run) {
            echo "<script>alert('Registration successfully... You may now login.');
            window.location.href = 'index.php';
            </script>";
        }
        else {

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
                <center><h4>Registration Form</h4></center>
                </div>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label>First Name: </label>
                        <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">   
                    </div>
                    <div class="form-group">
                        <label>Last Name: </label>
                        <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">   
                    </div>  
                    <div class="form-group">
                        <label>Email ID: </label>
                        <input class="form-control" type="text" name="email" placeholder="Enter your email">   
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input class="form-control" type="password" name="password" placeholder="Enter your Password">
                    </div>
                    <div class="form-group">
                        <label>Select Your Class:</label>
                        <select class="form-control" name="class">
                            <option>-Select-</option>
                            <option>FY Bcs</option>
                            <option>SY Bcs</option>
                            <option>TY Bcs</option>
                            <option>FY Mcs</option>
                            <option>SY Bcs</option>
                        </select>

                    </div>
                    <button class="btn btn-primary" type="submit" name="register">Register</button>
                </form>
                <a href="index.php">click here to login</a>
            </div>  
        </div>
    </section>
</body>
</html>