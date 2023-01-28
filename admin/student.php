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
    <title>Student Information</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="search">
        <form class="navbar-form" action="" method="post" name="form1">
            <div>
                <input class="form-control" type="text" name="search" placeholder="Search a Students..." required="">
                <button type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
        </form>
    </div>
    <h2>List of Students</h2>
    <?php

        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db, "SELECT ID,username,batch,department,mobile_no,enrolment_no,email FROM `student` where username like '%$_POST[search]%' ");

            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry..! No Student found with this username. Try again";
            }
            else
            {
        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: #6db6b9e6;'>";
                //Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "Batch";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
				echo "<th>"; echo "Mobile_no";  echo "</th>";
				echo "<th>"; echo "Enrolment_no";  echo "</th>";
				echo "<th>"; echo "email";  echo "</th>";
			echo "</tr>";	

            while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['ID']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['batch']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				echo "<td>"; echo $row['mobile_no']; echo "</td>";
				echo "<td>"; echo $row['enrolment_no']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
            }
        }
        /*if button is not pressed.*/
        else
        {
            $res=mysqli_query($db,"SELECT ID,username,batch,department,mobile_no,enrolment_no,email FROM `student`;");
        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: #6db6b9e6;'>";
                //Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "Batch";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
				echo "<th>"; echo "Mobile_no";  echo "</th>";
				echo "<th>"; echo "Enrolment_no";  echo "</th>";
				echo "<th>"; echo "email";  echo "</th>";
			echo "</tr>";	

            while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['ID']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['batch']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				echo "<td>"; echo $row['mobile_no']; echo "</td>";
				echo "<td>"; echo $row['enrolment_no']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
        }
    ?>
</body>
</html>