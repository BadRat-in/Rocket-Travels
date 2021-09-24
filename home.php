<?php 

    session_start();
    if (isset($_SESSION["auth"])) {
        header("location: ./main.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/home.css" type="text/CSS">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="./statics/logo.jpg" type="image/x-icon">
    <title>Rocket Travels</title>
</head>

<body>

    <!-- <div>
        
    </div> -->
    <nav class="nav-bar">
        <ul>
            <a href="./signup.php?error=0">
                <li class="btn">Sign Up</li>
            </a>
            <a href="./signin.php?error=0&user=">
                <li class="btn">Sign In</li>
            </a>
            <a href="#">
                <li class="stitle">Rocket Travels</li>
            </a>
            <a href="#">
                <!-- <img src="./statics/logo.jpg" class="logo" alt="Logo" width="20%" height="20%"> -->
            </a>
        </ul>
    </nav>
    <center>
        <div class="search-container">
            <div class="search-box">
                <input class="search-input" type="search" name="s-from" placeholder="From">
                <i class="fas fa-exchange-alt"></i>
                <input class="search-input" type="search" name="s-to" placeholder="To"><br>
                <button class="search-btn">Search</button>
            </div>
        </div>
     
    </center>
</body>

</html>