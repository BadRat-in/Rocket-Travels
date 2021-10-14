<?php
session_start();
if (!isset($_SESSION['auth'])) {
  header(" location: ./signin.php?error=0&user=");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['b_name']; ?> - Book Tour Ticket</title>
    <link rel="stylesheet" href="./statics/home.css" type="CSS/text">
    <link rel="shortcut icon" href="./statics/logo.jpg" type="image/x-icon">
</head>

<body>

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
                        <li><a class="menu-hover" href="index.php">Home</a>
                        </li>
                        <li><a class="menu-hover" href="./booking_details.php">Bookings</a>
                        </li>
                        <li><a class="menu-hover" href="./photos.php">Gallery</a>
                        </li>
                        <li><a class="menu-hover" href="./backend/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>