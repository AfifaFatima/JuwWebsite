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
    <section class="header">
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

        <div class="text-box">
            <h1>Welcome to JUW Library</h1>
            <p>
                "Libraries defines, develop and measure out comes that contribute to institutional <br> effectiveness
                and
                apply findings for purposes of continuous improvement"

            </p>
            <a href="#" class="btn">Visit Us to know More</a>
        </div>

    </section>

    <!--------Serices---------->

    <section class="services">
        <h1>Our Services</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="serRow">
            <div class="col">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nisi quae molestiae rem optio
                    doloremque eum minus sit ea harum inventore iusto</p>
            </div>
            <div class="col">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nisi quae molestiae rem optio
                    doloremque eum minus sit ea harum inventore iusto</p>
            </div>
            <div class="col">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nisi quae molestiae rem optio
                    doloremque eum minus sit ea harum inventore iusto</p>
            </div>
            <div class="col">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nisi quae molestiae rem optio
                    doloremque eum minus sit ea harum inventore iusto</p>
            </div>
            <div class="col">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nisi quae molestiae rem optio
                    doloremque eum minus sit ea harum inventore iusto</p>
            </div>
        </div>
    </section>
    <!---------Books-------->

    <section class="books">
        <h1>Books</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="carousel" data-flickity='{ "wrapAround": true, "imagesLoaded":true }'>
                <div class="carousel-cell">
                    <img src="images/books/book1.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="images/books/book2.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="images/books/book3.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="images/books/book4.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="images/books/book5.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-----Call to action----->
    <section class="cta">
        <h3>If you found any difficulty feel free to Contact US</h3>
        <a href="contact.php" class="btn">CONTACT US</a>
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
                <i class="fa-brands fa-square-facebook" ></i>
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