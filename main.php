<?php
    session_start();
    if (!isset($_SESSION['auth'])){
        header("location: ./signin.php?error=0&user=");
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
    <nav class="nav-bar">
        <ul>
            <a href="./backend/logout.php">
                <li class="btn">Logout</li>
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
        <h3 class="user-data">Auth &nbsp;<?php echo $_SESSION['auth'];?></h3><br>
        <h3 class="user-data">User Id &nbsp;<?php echo $_SESSION['user_id'];?></h3><br>
        <h3 class="user-data">Name &nbsp;<?php echo $_SESSION['user_name'];?></h3><br>
        <h3 class="user-data">Mail &nbsp;<?php echo $_SESSION['email'];?></h3><br>
        <h3 class="user-data">Number &nbsp;<?php echo $_SESSION['number'];?></h3><br>
        <h3 class="user-data">Password &nbsp;<?php echo $_SESSION['pass'];?></h3><br>
        <h3 class="user-data">Table &nbsp;<?php echo $_SESSION['table_name'];?></h3><br>
    </center>
</body>

</html>