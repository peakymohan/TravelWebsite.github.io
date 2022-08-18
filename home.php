<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!--Font Awesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS File Link-->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>

    <!--header section start-->
    <section class="header">
        <div id="menu-btn" class="fas fa-bars"> </div>

        <a href="home.php" class="logo">Lonely Planet</a>

        <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About</a>
         <a href="services.php">Services</a>
         <a href="package.php">Packages</a>
         <a href="gallery.php">Gallery</a>
         <a href="book.php">Booking</a>
         <a href="contactus.php">Contact Us</a>
      </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="What are You looking for?">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </section>
    <!--header section ends-->

    <!--loginForm section starts-->
    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>
        <form action="">
            <h3>Login</h3>
            <input type="email" class="box" placeholder="Email">
            <input type="password" class="box" placeholder="Password">
            <input type="submit" value="Log In" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember Me</label>
            <p>Forgot Password? <a href="#"> Reset Here</a></p>
            <p>Don't Have an Account? <a href="#"> Sign Up!</a></p>
        </form>
    </div>
    <!--loginForm section ends-->

    <!-- home section starts -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Around the World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour Memorable</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

            </div>



        </div>

    </section>
    <!-- home section ends -->


    <!-- home about section starts  -->
    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" alt="abt img">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="about.php" class="btn">Read More</a>
        </div>

    </section>
    <!-- home about section ends -->

    <!-- home packages section starts  -->
    <section class="home-packages">

        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/p-1.jpg" alt="p1">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Mumbai </h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, veniam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="book.php" class="btn">Book Now!</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-2.jpg" alt="p2">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Sydney </h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, veniam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $120.00 <span>$150.00</span> </div>
                    <a href="book.php" class="btn">Book Now!</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-3.jpg" alt="p1">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Hawai </h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, veniam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn">Book Now!</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="package.php" class="btn">Load More</a> </div>

    </section>
    <!-- home packages section ends -->

    <!--home offer section starts-->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 45% Off!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dolores nemo ipsum inventore veritatis magni!</p>
            <a href="book.php" class="btn">Book Now!</a>
        </div>
    </section>
    <!--home offer section ends-->

    <!--Footer Section Start-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Booking</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Uses</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +880 188 2660 360</a>
                <a href="#"><i class="fas fa-phone"></i> +880 130 9040 483</a>
                <a href="#"><i class="fas fa-envelope"></i> travelsBD2122@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Dhaka, Bangladesh 4025</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>

        </div>

        <div class="credit">
            Created by <span>Afia & Nahin</span> | All Rights Reserved | 2022
        </div>

    </section>
    <!--Footer Section End-->

    <!--Swiper JS Link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--Custom JS Link-->
    <script src="js/script.js"></script>

</body>

</html>