<?php
    include "connection.php";
    session_start();
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
        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }

        nav img {
            width: 100px;
        }

        .nav-links {
            flex: 1;
            text-align: right;
        }

        .nav-links ul li {
            list-style: none;
            display: inline-block;
            padding: 5px 10px;
            position: relative;
        }

        .nav-links ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 13px;
        }

        .nav-links ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background: #f44336;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav-links ul li:hover::after {
            width: 100%;
        }
    </style>
</head>

<body>
    <section class="sub-header">
        <nav>
            <a class="logo" href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <?php
                if (isset($_SESSION['login_user']))
                {
                    ?>
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="books.php">BOOKS</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    <?php
                }
                else
                {
                    ?>
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="login.php">BOOKS</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            <li class="navbtn"><a href="signup.php">SIGN UP</a></li>
                            <li class="navbtn"><a href="login.php">LOGIN</a></li>
                        </ul>
                    <?php
                }
                ?>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About US</h1>
    </section>
    <!----------------------About us ---------------------->

    <section class="about-us">

        <div class="abtrow">
            <div class="about-col">
                <h1>Who we are..</h1>
                <div class="readMore">
                    <p>"JUW Auto Lib" a best automated library in the town. It makes the library smart one by organizing the
                        books systematically by author, title and subject. This enables users to search for books quickly
                        and effortlessly.
                        <span class="moreText">
                            "JUW Auto Lib" contains over "45000" physical books of management, social & natural sciences for
                            example Computer Science and Information Technology, Business Administration, Media Studies,
                            Pharmacy, Physical Sciences, Urdu and English Literature, History, Commerce, Economies etc. "JUW
                            Auto Lib" which automate the existing system of manually maintain the records of the Book Issue,
                            Book Return from the student and book borrow from the library to be computerized. The main
                            reason is that it facilitates students to avoid from being standing in que and searching the
                            books. This project provides mobile augmented reality for proper library navigation.
                        </span>
                    </p>
                </div>
                <span class="navbtn">Read More...</span>
            </div>
            <div class="about-col">
                <img src="images/img3.jpg" alt="">
            </div>
        </div>

    </section>

    <!------Footer------>

    <section class="footer">
        <div class="container">
            <div class="content">
                <h3>About us</h3>
                <p>"JUW Auto Lib" a best automated library in the town. It makes the library smart one by organizing
                    the books systematically by author, title and subject. 
                </p>
            </div>
            <div class="contactInfo">
                <h3>Contact Info</h3>
                <p>Email: info@juw.edu.pk <br>
                    Contact No: 021 36620857-59 <br>
                    Adress: 5C, Nazimabad, Karachi - 74600 </p>
            </div>
            <div class="fIcons">
                <h3>Social Links </h3>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    </section>

    <!----JavaScript for readmore btn------>
    <script src="./main.js"></script>

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
</body>

</html>