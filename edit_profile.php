<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board_system_");
    $fname = "";
    $lname = "";
    $email = "";
    $password = "";
    $class = "";

    $query = "select * from users where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $password = $row['password'];
            $class = $row['class'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
        </div>
        <div class="form-group">
            <label>Select Class:</label>
            <select class="form-control" name="class" required>
                <option><?php echo $class;?></option>
                <option>FY Bcs</option>
                <option>SY Bcs</option>
                <option>TY Bcs</option>
                <option>FY Mcs</option>
                <option>SY Bcs</option>
            </select>      
        </div>
        <button type="submit" name="update_profile" class="btn btn-primary">Update</button>       
</form>
</body>
</html>