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
  <link rel="stylesheet" href="statics/home.css" type="text/CSS">
  <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous">
  <link rel="shortcut icon" href="./statics/logo.jpg" type="image/x-icon">
  <title>Rocket Travels</title>
</head>

<body id="body" class="down">

  <center>
    <div class="welcome-box" id="wwb">
      <div class="welcome">
        <h2>Mr.
          <?php echo $_SESSION["user_name"]?><br>
        </h2>
        <h3>Welcome to <b>Rocket Travels</b>.<br>We are happy to see you. We
          beliave in safe and secure journy.<br> The best story about traveling
          with family of all generations grandparents, parents, children,
          cousins, siblings or journeying to discover roots.
        </h3>
        <button onclick="hideWelcome()" id="fhwind">OK</button>
      </div>
    </div>
  </center>
  <nav class="nav-bar">
    <ul>
      <a>
        <li class="username">Welcome Mr.
          <?php echo $_SESSION['user_name'];
                ?>
        </li>
      </a>
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
        <input class="search-input" type="search" id="city_from" name="s-from"
          placeholder="From" onkeypress="showHint1(this.value)">
        <i class="fas fa-exchange-alt" onclick="swapvalue()"></i>
        <input class="search-input" type="search" id="city_to" name="s-to"
          placeholder="To" onkeypress="showHint2(this.value)"><br>
        <button class="search-btn">Search</button>
      </div>
      <div id="city_list">
      </div>
    </div>
  </center>
</body>
<script>
  function showHint1(str) {
    if (str.length == 0) {
      document.getElementById("").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var data = this.responseText;
          var data_arr = JSON.parse(data);
          var html_data = "";
          data_arr.forEach((city, index, array) => {
            html_data += "<h4 class='csc' onclick='go_from(this.id)' id='" + index + "' style='cursor: pointer;'>" + city + "</h4>";
          })
          document.getElementById("city_list").innerHTML = html_data;
        }
      };
      xmlhttp.open("GET", "./backend/city_list.php?q=" + str, true);
      xmlhttp.send();
    }
  }

  function go_from(str) {
    window.scrollTo({
      top: 10,
      behavior: 'smooth'
    });
    city_name = document.getElementById(str).innerHTML;
    document.getElementById("city_from").value = city_name;
  }


  function showHint2(str) {
    if (str.length == 0) {
      document.getElementById("").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var data = this.responseText;
          var data_arr = JSON.parse(data);
          var html_data = "";
          data_arr.forEach((value, index, array) => {
            html_data += "<h4 class='csc' onclick='go_to(this.id)' id='" + index + "' style='cursor: pointer;'>" + value + "</h4>";
          })
          document.getElementById("city_list").innerHTML = html_data;
        }
      };
      xmlhttp.open("GET", "./backend/city_list.php?q=" + str, true);
      xmlhttp.send();
    }
  }

  function go_to(str) {
    window.scrollTo({
      top: 10,
      behavior: 'smooth'
    });
    var city_name = document.getElementById(str).innerHTML;
    document.getElementById("city_to").value = city_name;
  }

  var scrollPos = 0;
  // adding scroll event
  window.addEventListener('scroll', function () {
    if ((document.body.getBoundingClientRect()).top > scrollPos)
      document.getElementById("body").className = "up";
    else
      document.getElementById('body').className = "down";
    scrollPos = (document.body.getBoundingClientRect()).top;
  });

  function hideWelcome(){
    document.getElementById("wwb").style = "display: none";
  }


  function swapvalue(){
    var strvalue = document.getElementById("city_from").value;
    document.getElementById("city_from").value = document.getElementById("city_to").value;
    document.getElementById("city_to"). value = strvalue;
  }
</script>

</html>