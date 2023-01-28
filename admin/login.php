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
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">

    <style type="text/css">
        section
        {
            margin-top: -20px;
        }
    </style>
</head>

<body>
    <section class="log-header">
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
        <!----------------------login ---------------------->

        <section class="login">
            <div class="login-box">
                <form name="Login" action="" method="post">
                <div class="text-box1">
                    <h1>JUW Library</h1>
                    <h2>LOGIN FORM</h2>
                </div>
                    <div class="login">
                        <input class="form-control" type="text" name="username" placeholder="Name" maxlength="50"
                            required=""><br>
                        <input class="form-control" type="password" name="password" minlength="8" placeholder="Password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, one special characters, and at least 8 or more characters"
                            required=""><br>
                        <input type="submit" name="submit" value="LOGIN">
                        <div>
                            <a href="updatepassword.php" class="button1">Forget Password</a>
                            <p style="font-size: 18px;">Don't have an account? <a href="signup.php" class="btn">Sign Up</a>
                        </div>
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

    <!---------------php------------>
    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $res=mysqli_query($db, "SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
        $row= mysqli_fetch_assoc($res);
        $count=mysqli_num_rows($res);

        if($count>0)
        {
            /*------------if username and password matches------*/
            $_SESSION['login_user'] = $_POST['username'];
            $_SESSION['pic'] = $_row['pic'];
            ?>
                <script type="text/javascript">
                    window.location="books.php"
                </script>
            <?php
        }
        else
        {
            ?>
                <div>
                    <strong>Incorrect Username and password. Please Try again..!</strong>
                </div>
            <?php
        }

      }

    ?>
</body>

</html>