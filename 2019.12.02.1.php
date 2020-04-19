<!--part 1-->
<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
  <?php
  echo '<body style="background-color:#696969">';
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database = "world";

  $db = mysqli_connect($servername, $username, $password, $database);
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else {
    mysqli_connect($servername, $username, $password, $database);
  }

  ?>
<!--part 2-->
  <h1> Simpsons Database </h1>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">


    <input type="text" name="text" placeholder="Enter Country Name">
    <input type="submit" name="submit">
    <?php
    $query = "";

    $result = mysqli_query($db,$query);
//--part 3-->
    echo "<br>" . $_GET["text"];
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {

        echo "";

      }
    }
     else {
      echo "0 results";
    }

    mysqli_close($db);
    ?>
  </form>
</body>
</html>
