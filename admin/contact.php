<?php
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
    <section class="cont-header">
        <nav>
            <a class="logo" href="index.html"><img src="images/logo.png"></a>
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
        <h1>Contact US</h1>
    </section>
    <!----------------------Contact us ---------------------->
    <section class="location">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.210796721186!2d67.02777521447888!3d24.92488784881184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f91751192b9%3A0x7d44a810d3040989!2sJinnah%20University%20For%20Women!5e0!3m2!1sen!2s!4v1661438725596!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <section class="contact-us">
    <section class="cta1">
    <div class="controw">
        <h1 style= color:#fff;font-size:54px;margin:20px;>We are here to serve you...!</h1>
            <div class="contact-col">
                <div>
                    <form action="formhandler.php" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                        <input type="email" name="email" placeholder="Enter Your Address" required>
                        <input type="text" name="subject" placeholder="Enter Your Subject" required>
                        <textarea rows="8" name="message" placeholder="Message" required></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </section>


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