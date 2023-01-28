<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            background-image: linear-gradient(rgba(49, 55, 77, 0.7), rgba(49, 55, 77, 0.7)), url(images/img4.jpg);
            background-position: center;
            background-size: cover;
            position: cover;
        }
    </style>
</head>
<body>
    <div>
        <div class="login-box">
            <div class="text-box1">
                <h1>JUW Library</h1>
                <h2>Change Your Password</h2>
            </div>
            <form action="" method="post">
                <input class="form-control" type="text" name="username" placeholder="Name" required=""><br>
                <input class="form-control" type="email" name="email" placeholder="Email" required=""><br>
                <input class="form-control" type="password" name="password" minlength="8" placeholder="Password" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, one special characters, and at least 8 or more characters"
                required=""><br>
                <button type="submit" name="submit" class="btn btn-default" type="submit" name="submit">CHANGE PASSWORD</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['submit']))
        {
            if($sql=mysqli_query($db, "UPDATE student SET password='$_POST[password]' 
            WHERE username='$_POST[username]' AND email='$_POST[email]' ;"))
            {
                ?>
                    <script type="text/javascript">
                        alert("The Password updated Successfully.");
                    </script>
                <?php
            }
        }
    ?>
</body>
</html>