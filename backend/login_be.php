<?php
    ini_set( "session.gc_maxlifetime", 300 );
    ini_set( "session.cookie_lifetime", 300 );
    session_start();
    if (isset($_SESSION["auth"])) {
        header("location: ../home.php?error=0");
    }
    require_once("./db.php");

    $email = $_POST['email'];
    $pass = $_POST['passwd'];
    $pass5 = md5($pass);
    $query = "SELECT * FROM users WHERE mail LIKE '$email' && passwd LIKE '$pass5'";
    $result = mysqli_query($con, $query) or die("error: $query");
    $data = mysqli_fetch_array($result);
    echo $pass5;
    echo $email;
    if ($data[4] === $pass5 && $data[2]= $email){
        $_SESSION["auth"] = TRUE;
        $_SESSION['user_id'] = $data[0];
        $_SESSION['user_name'] = $data[1];
        $_SESSION['email'] = $data[2];
        $_SESSION['number'] = $data[3];
        $_SESSION['pass'] = $data[4];
        $_SESSION['table_name'] = $data[5];
        header("location: ../main.php");
    }else{
        header("location: ../signin.php?error=1&user=$email");
    }
?>