<!--part 1-->
<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
  <?php
  echo '<body style="background-color:#696969">';
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database = "simpsons";

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


    <input type="text" name="text">
    <input type="submit" name="submit">
    <?php
    $query = "SELECT * FROM students WHERE name = '$_GET[text]';";
    $result = mysqli_query($db,$query);
//--part 3-->
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"].  "<br>";
      }
    } else {
      echo "0 results";
    }

    mysqli_close($db);
    ?>
  </form>
</body>
</html>
