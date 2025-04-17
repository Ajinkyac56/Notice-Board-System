<?php
    session_start();
    if(isset($_POST['update_profile'])) {
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"online_notice_board_system_");
        $query = "upadte users set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class='$_POST[class]'
        where email='$_SESSION[email]'";
        $query_run = mysqli_query($sonnection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Profile upadated successfully...');
            window.loaction.href = 'user_dashboard.php' 
            </script>";
        }    
        else {
            echo "<script type='text/javascript'>
            alert('Can't upadate try again...');
            window.loaction.href = 'user_dashboard.php' 
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
    <script src="JQuery\jquery-3.6.4.js" charset="utf-8"></script>

    <script src="text/javascript">
        $(document).ready(function() {
            $("#edit_profile_button").click(function() {
            $("#main_content").load('edit_profile.php');
            });

        });
    </script>
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
<br> 
<section id="container">
    <div class ="row">
        <div class="col-md-2" id="left_sidebar">
        <img src="image\img1.png" class="img-rounded" width="200px" height="200px"><br>
        <!-- <b><?php echo $_SESSION['email']; ?></b><br>  -->

        <br> <div class="d-grid gap-2 btn-block">
        <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</div></button><br>

        <div class="d-grid gap-2 btn-block">
        <button type="button" class="btn btn-secondary" id="view_notice_button">View All Notice</div></button><br>
        
        <div class="d-grid gap-2 btn-block">
        <button type="button" class="btn btn-success">View Response</div></button><br>

        <div class="d-grid gap-2 btn-block">
        <a href="logout.php" type="button" class="btn btn-danger">Logout</div></a><br>
        
        </div>
        <div class="col-md-8" id="main_content">
            <h2>Welcome to user Dashboard</h2>
            <p>
                This is the admin Dashboard page. Here admin can message notice board system. he can create a
                notice, delete a notice and all the replies of the notice.</p>
            <p>
                This is the admin Dashboard page. Here admin can message notice board system. he can create a
                notice, delete a notice and all the replies of the notice.  
            </p>
            <p>
                This is the admin Dashboard page. Here admin can message notice board system. he can create a
                notice, delete a notice and all the replies of the notice.  
            </p>
        </div>
    </div>
</section>
</body>
</html>