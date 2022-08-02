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
        <a href="home.php" class="logo">travel</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>
    <!--header section ends-->

    <!-- home section starts -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <!-- home section ends -->

    <!--services section starts-->
    <section class="services">
        <h1 class="heading-title">
            Our Services
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="icon1">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="icon2">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="icon3">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="icon4">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="icon5">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="icon6">
                <h3>Camping</h3>
            </div>
        </div>

    </section>
    <!--services section ends-->

    <!-- home about section starts  -->
    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </section>

    <!-- home about section ends -->

    <!-- home packages section starts  -->
    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

    </section>
    <!-- home packages section ends -->


    <!--home offer section starts-->
    <section class="home-offer">
        <div class="content">
            <h3> Upto 40% off!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dolores nemo ipsum inventore veritatis magni!</p>
            <a href="book.php" class="btn">book now</a>
        </div>

    </section>
    <!--home offer section starts-->





























    <!--Footer Section Start-->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
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
                <a href="#"><i class="fas fa-map"></i> Dhaka, Bangladesh 400125</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>

        <div class="credit">
            Created by <span>Afia & Nahin</span> | all rights reserved
        </div>



    </section>

    <!--Footer Section End-->





    <!-- swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script src="js/script.js"></script>

</body>

</html>