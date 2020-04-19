<html>
<body>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
  <h1>Login</h1><br>

    Username: <br>
    <input type="text" name="user"><br>
    Password: <br>
    <input type="password" name="pass"><br>
    <input type="submit" name="submit"><br>



    <?php
    if (isset ($_GET["submit"])) {

      $login=array("chicken" => "butt", "bruh" => "bruh", "eddie" => "curry");
      account ($_GET["user"], $_GET["pass"], $login);

    }
    ?>


  </form>
</body>
</html>

<?php
function account ($user, $pass, $login) {
  $yes = "f";
  foreach ($login as $loginU => $loginP) {
    if ($user == $loginU and $pass == $loginP) {
      $yes = "t";
    }
  }
  if ($yes == "t"){
      echo "Logged in<br>Welcome, $_GET[user]";
  }
  else {
      echo '<span style="color:#d90000;">Username or password is incorrect</span>';
  }

}
?>
