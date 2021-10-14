<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Rocket Travels</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--style css-->
    <!--  <link type="text/css" rel="stylesheet" href="css/main.css" /> -->
    <link rel="stylesheet" href="./statics/main.css" />
    <link rel="shortcut icon" href="./statics/logo.jpg" type="image/x-icon">
</head>

<body background="black">


    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par">
                    <a href="#">
                        <h2>Rocket Travels</h2>
                    </a>

                </div>
                <div class="nav">
                    <ul>
                        <li><a class="menu-hover" href="#">Home</a>
                        </li>
                        <li><a class="menu-hover" href="./home.php">Book now</a>
                        </li>
                        <li><a class="menu-hover" href="photos.php">Gallery</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="header-info-par">
                <h1>"Happiness is closer than you think" ,"Adventure awaits, go find it.","Dont be a tourist, be a travel."
                </h1>
                <a href="./home.php">Book Now</a>

            </div>
            <div class="video">
                <video id="video" autoplay loop muted>
                    <source src="images/sr.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </header>
    <!--second page-1-->
    <section id="welcome-text">
        <div class="container">
            <h2>The official travel site of the friendly fiji Islands</h2>
            <p>when an unknown printer took a gallery of type and scrambled it to make a type specimen</p>
        </div>
    </section>
    <!--second page-2-->
    <section id="slides-par">
        <div class="container">
            <div class="slides">
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_2" class="slide_">
                    <img class="image-gl" src="images/slides/Kanyakumari-1.jpg" alt="City">
                    <p id="2">Kanyakumari</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_3" class="slide_">
                    <img src="./images/slides/1590569330_india_gate.jpg.jpg" class="image-gl" alt="city">
                    <p id="3">Delhi</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_4" class="slide_">
                    <img src="./images/slides/1_fYA-b-KA9UUqPL2OsDYkQw.png" class="image-gl" alt="city">
                    <p id="4">Jaipur</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_5" class="slide_">
                    <img src="./images/slides/21-1505994121-2.jpg" class="image-gl" alt="city">
                    <p id="5">Chambal</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_6" class="slide_">
                    <img src="./images/slides/Alleppey.jpg" class="image-gl" alt="city">
                    <p id="6">Karnataka</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_8" class="slide_">
                    <img src="./images/slides/Chennai-1.jpg" class="image-gl" alt="city">
                    <p id="8">Chennai</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_7" class="slide_">
                    <img src="./images/slides/Chhatrapati-Shivaji-Terminus.jpg" class="image-gl" alt="city">
                    <p id="7">Mumbai</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_9" class="slide_">
                    <img src="./images/slides/Gwalior.jpg" class="image-gl" alt="city">
                    <p id="9">Gwalior</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_10" class="slide_">
                    <img src="./images/slides/GettyImages-126924479-5b840d6746e0fb0050b92c08.jpg" class="image-gl" alt="city">
                    <p id="10">Ujjain</p>
                </div>
                <div onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_11" class="slide_">
                    <img src="./images/slides/wootrips-1-day-delhi-to-mathura-and-vrindavan-sightseeing-tour-package-private-car-header.jpg" class="image-gl" alt="city">
                    <p id="11">Mathura</p>
                </div>
                <div class="slide_" onmouseover="showimage(this.id)" onmouseleave="hideimage(this.id)" id="div_1">
                    <img src="./images/slides/HD-wallpaper-taj-mahal-agra-mausoleum-mosque-river-jamna-fountain-india.jpg" class="image-gl" alt="city">
                    <p id="1">Agra</p>
                </div>
            </div>

        </div>
    </section>

    <section id="welcome-text">
        <div class="container">
            <h2> Go On India Tour</h2>
            <p>when an unknown printer took a gallery of type and scrambled it to make a type specimen</p>
        </div>
    </section>

    <!--js scroll file-->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/extrenal.js"></script>
</body>
<script>
    function showimage(str) {
        str = str.split("_");
        document.getElementById(str[1]).style = "color: white\; font-size: 30px\; animation: changePlace 300ms ease-in-out\; top: -90px";
    }

    function hideimage(str) {
        str = str.split("_")
        console.log(str);
        document.getElementById(str[1]).style = "color: black\; font-size: normel\; animation: changePlace2 300ms ease-in-out;";
    }
</script>

</html>