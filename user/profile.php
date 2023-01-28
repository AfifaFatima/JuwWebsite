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
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    
    <style type="text/css">
        .wrapper{
            width: 300px;
            margin: 0 auto;
            color: #fff;
            text-align: center;
        }
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
        <div class="container1">
            <form action="" method="post">
                <button class="btn btn-default" style= "float: right; width: 70px; margin-right:20px;" name="submit1">Edit</button>
            </form>
            <div class="wrapper">
                <?php
                    $q=mysqli_query($db, "SELECT * FROM student where username='$_SESSION[login_user]';");
                ?>
                <h2 style= "text-align: center;">My Profile</h2>
                <?php
                    $row=mysqli_fetch_assoc($q);
                    echo "<div style='text-align: center'><img class='img-circle profile-img' height=110 width=120
                    src='images/".$_SESSION['pic']."'>
                    </div>";
                ?>
                <div style= "text-align: center;"><h5>Welcome, </h5></div>
                <h4 style= "text-align: center;">
                    <?php echo $_SESSION['login_user']; ?>
                </h4>
                <?php
                    echo  "<table class='table table-bordered'>";
                        echo "<tr>";
                            echo "<td>";
                                echo "<b> ID: </b>";
                            echo "</td>";

                            echo "<td>";
                                echo $row['ID'];
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Username: </b>";
                            echo "</td>";

                            echo "<td>";
                                echo $row['username'];
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Batch: </b>";
                            echo "</td>";
                            echo "<td>";
                                echo $row['batch'];
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Department: </b>";
                            echo "</td>";
                            echo "<td>";
                                echo $row['department'];
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Mobile No: </b>";
                            echo "</td>";
                            echo "<td>";
                                echo $row['mobile_no'];
                            echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Enrolment No: </b>";
                            echo "</td>";
                            echo "<td>";
                                echo $row['enrolment_no'];
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>";
                                echo "<b> Email: </b>";
                            echo "</td>";
                            echo "<td>";
                                echo $row['email'];
                            echo "</td>";
                        echo "</tr>";

                    echo  "</table>";

                ?>
            </div>
        </div>
    </div>
    
</body>
</html>