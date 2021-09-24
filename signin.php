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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="./statics/logo.jpg" type="image/x-icon">
    <title>Rocket Travels - Login</title>
</head>

<body>

    <center>
        <div class="form">
            <form method="POST" action="./backend/login_be.php">
        <?php
            if (isset($_GET)) {
                $error = intval($_GET['error']);
            } else {
                $error = 0;
            }
            if ($error === 1) {
                echo "<div ><h4 style='color: #ee3333; font-size: 18px; width: auto; height: auto; background-color: burlywood;'>Email or Password is incorrect.</h4></div>";
            }
        ?>
                <table>
                    <th colspan="2">Sign In</th>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" class="input_field" placeholder="Email" required value="<?php if (isset($_GET)){echo $_GET["user"];}?>"></td>
                    </tr>
                    <tr>
                        <td><label for="passwd">Password</label></td>
                        <td><input type="password" name="passwd" class="input_field" placeholder="Password"
                                minlength="6" required></td>
                    </tr>
                </table>
                <input type="submit" value="Sign In">
            </form>
            <br>
            <p style="color:burlywood;">OR</p>
            <br>
            <a href="./signup.php?error=0" style="color: red;"><h3 style="margin-top: 5px; color: white;">Don't have an account.</h3></a>
        </div>
    </center>

</body>

</html>