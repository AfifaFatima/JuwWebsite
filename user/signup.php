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
    <title>JUW Auto lib</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">

    <style type="text/css">
        section
        {
            margin-top: -20px;
        }
    </style>
</head>

<body>
    <section class="sign-header">
        <!----
        <nav>
            <a class="logo" href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="login.php">BOOKS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li class="navbtn"><a href="signup.php">SIGN UP</a></li>
                    <li class="navbtn"><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        ---->
        <!----------------------Sign Up ---------------------->

        <section class="signup">
            <div class="signup-box">
                <div class="text-box1">
                    <h1>JUW Library</h1>
                    <h2>Registration Form</h2>
                </div>
                <form name="Registration" action="" method="post">
                    <div class="signup">

                        <input class="form-control" type="text" name="ID" placeholder="User ID" maxlength="50"
                         required=""><br>
                        <input class="form-control" type="text" name="username" placeholder="Name" maxlength="50"
                            required=""><br>
                            <select id="batch" name="batch" class="formControl">
                                <option>---Select Batch---</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                            <select id="department" name="department" class="formControl">
                                <option>---Select Department---</option>
                                <option value="Computer Science & Software Engineering">Computer Science</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Eastern Medicine">Eastern Medicine</option>
                                <option value="English">English</option>
                                <option value="BBA">BBA</option>
                                <option value="Commerse">Commerse</option>
                                <option value="Food Science & Technology">Food Science & Technology</option>
                            </select>
                        <input class="form-control" type="tel" id="phone" name="mobile_no" placeholder="Mobile No" maxlength="15" 
                            pattern="[0-9]{11}" title="Must enter a relevent number" required=""><br>
                        <input class="form-control" type="text" name="enrolment_no" placeholder="Enrolment No"
                            maxlength="20" required=""><br>
                        <input class="form-control" type="password" name="password" minlength="8" placeholder="Password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, one special characters, and at least 8 or more characters"
                            required=""><br>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" maxlength="50"
                            required=""><br>
                        <input type="submit" name="submit" value="SIGN UP">
                        <p style="font-size: 18px;">Already a member? <a href="login.php" class="btn">Login here</a></p>
                    </div>
                </form>
            </div>

            <!---here we write js code--->
            <script>
                var myInput = document.getElementById("psw");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");

                // When the user clicks on the password field, show the message box
                myInput.onfocus = function () {
                    document.getElementById("message").style.display = "block";
                }

                // When the user clicks outside of the password field, hide the message box
                myInput.onblur = function () {
                    document.getElementById("message").style.display = "none";
                }

                // When the user starts to type something inside the password field
                myInput.onkeyup = function () {
                    // Validate lowercase letters
                    var lowerCaseLetters = /[a-z]/g;
                    if (myInput.value.match(lowerCaseLetters)) {
                        letter.classList.remove("invalid");
                        letter.classList.add("valid");
                    } else {
                        letter.classList.remove("valid");
                        letter.classList.add("invalid");
                    }

                    // Validate capital letters
                    var upperCaseLetters = /[A-Z]/g;
                    if (myInput.value.match(upperCaseLetters)) {
                        capital.classList.remove("invalid");
                        capital.classList.add("valid");
                    } else {
                        capital.classList.remove("valid");
                        capital.classList.add("invalid");
                    }

                    // Validate numbers
                    var numbers = /[0-9]/g;
                    if (myInput.value.match(numbers)) {
                        number.classList.remove("invalid");
                        number.classList.add("valid");
                    } else {
                        number.classList.remove("valid");
                        number.classList.add("invalid");
                    }

                    // Validate length
                    if (myInput.value.length >= 8) {
                        length.classList.remove("invalid");
                        length.classList.add("valid");
                    } else {
                        length.classList.remove("valid");
                        length.classList.add("invalid");
                    }
                }
            </script>

        </section>
    </section>

    <!-------JavaScript for bookslider------>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!------JavaScript for Toggle Menu----- -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script>
    <!-------select opions in sign up-------->
    <script>
        function batch ()
        {
            var d=document.getElementById("batch");
            var displaytext=d.option[d.selectedIndex].text;
            document.getElementById("txtvalue");
        }
        function department ()
        {
            var d=document.getElementById("department");
            var displaytext=d.option[d.selectedIndex].text;
            document.getElementById("txtvalue");
        }
    </script>
    <!----------------------Php---------------------->
    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[ID]', '$_POST[username]', '$_POST[batch]', '$_POST[department]', 
          '$_POST[mobile_no]', '$_POST[enrolment_no]', '$_POST[password]', '$_POST[email]', 'pic.png');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("This username already exist.");
            </script>
          <?php

        }

      }

    ?>
</body>

</html>