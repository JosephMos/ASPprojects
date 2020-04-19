<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "imdb";

    $db = mysqli_connect($servername, $username, $password, $database);
    if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>

<!-- THIS IS PART 2 -->
<h1> Imdb Database Records</h1>
<?php
if (isset($_GET["inputText"]) == FALSE){ // First time loading page
  echo "<form action='$_SERVER[PHP_SELF]' method='get'>
      <input type='text' name='inputText' placeholder='Enter a movie name'>
      <input type='submit'>
    </form><br>";

    if (isset($_GET["update"]) == TRUE){  // They submitted an update to the database
      echo "Database updated<br>";
      $value = $_GET["changedValue"];
      $component = $_GET["component"];
      $id = $_GET["id"];
      $query= "UPDATE actors SET $component = '$value' WHERE actors.id = '$id';";
      mysqli_query($db,$query);
      
    }
    else if (isset($_GET["cancel"]) == TRUE){ // They canceled an update to the database
      echo "Update canceled";
    }
}
else if (isset($_GET["inputText"]) == TRUE) // They entered a country name
{
  $name = $_GET["inputText"];
  $query= "SELECT movies.name, actors.first_name, actors.last_name, roles.role, actors.id FROM movies
  JOIN roles ON movies.id = roles.movie_id
  JOIN actors ON roles.actor_id = actors.id
  WHERE name = '$name';";
  $result = mysqli_query($db,$query);
  echo "Movie: " . $name;

  if (mysqli_num_rows($result) > 0) { // check if there are any results
      $row = mysqli_fetch_assoc($result); // get the first row
      echo "<form action='$_SERVER[PHP_SELF]' method='get'>"; // make the form


      while($row) { // loop through all the rows and print out the actors information
        foreach ($row as $component=>$value){ // loop through the current row
          if ($component == 'first_name' OR $component == 'last_name' OR $component == 'role' OR $component == 'id'){ //if column is ...
            echo "$component: $value . . .";
          }
        }
        echo "<br>"; // create a new line after each actor
        $row = mysqli_fetch_assoc($result); // go to the next row
      }

      echo "<br><input type='text' name='id'> Put the (5 or 6 digit) ID code of the actor you wish to change.";
      echo "<br><input type='text' name='component'> Put either 'first_name', 'last_name', or 'role' here to change one of those.";
      echo "<br><input type='text' name='changedValue'> Put the value you want to change to here.";
      echo "<br><input type='submit' name='update'>";
      echo "<br><input type='submit' value='Cancel' name='cancel'> </form>";

  }
  else {
      echo "Error: Invalid movie name. <a href='$_SERVER[PHP_SELF]'> Reload page.</a>";
  }
}
mysqli_close($db);
?>

</body>
</html>
