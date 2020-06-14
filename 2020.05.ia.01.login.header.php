<?php
  session_start();
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>IB CompSci IA</title>
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="2020.05.ia.01.login.stylesheet.css">
  </head>
  <body>

    <header>
      <nav>
        <a href="#">
          <!--<img src="(image)" alt="logo">-->
        </a>
        <div>
          <a style="color=white" href="2020.05.ia.01.login.index.php">Home</a>
          <form action="2020.05.ia.01.login.index.php" method="get">
            <input type="submit" name="loginButton" value="Login" id=loginButton>
          </form>

          <?php
          if (isset($_SESSION['userId'])){
            echo '<script>
                    document.getElementById("loginButton").style.visibility = "hidden";
                  </script>';
          }
          $signup = true;
          if (isset($_GET['loginButton'])){
            $signup = false;
          }
            if (isset($_SESSION['userId'])) {
              echo '<form action="2020.05.ia.01.logout.inc.php" method="post">
                      <button type="submit" name="logout-submit">Logout</button>
                    </form>';
            }
            else{
              if ($signup == false){
                echo '<form class="box" action="2020.05.ia.01.login.inc.php" method="post">
                        <h1>Login</h1>
                        <input type="text" name="mailuid" placeholder="Username/Email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                      </form>';
              }
              echo'<a href="2020.05.ia.01.login.signup.php">Signup</a>';
            }
           ?>

        </div>
      <nav>
    </header>
