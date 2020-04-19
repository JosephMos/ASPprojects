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
<h1> World Database Records</h1>
<?php
if (isset($_GET["inputText"]) == FALSE){ // First time loading page
  echo "<form action='$_SERVER[PHP_SELF]' method='get'>
      <input type='text' name='inputText' placeholder='Enter a movie name'>
      <input type='submit'>
    </form><br>";

    if (isset($_GET["update"]) == TRUE){  // They submitted an update to the database
      echo "Database updated<br>";
      $query= "UPDATE movies SET name = $_GET[name], year = $_GET[year], rank = $_GET[rank] WHERE id = $_GET[id]";
      mysqli_query($db, $query);
      foreach ($_GET as $key => $value){ // each key is a column name, each value was in the textbox
        if ($key != "update" && $key != "name" && $key != "year" && $key != "rank" && $key != "id"){ //don't use the update key as a column name
          $columnName = substr($key, 6);
          if ($columnName=="first_name"){
            $actorId = substr($key, 0, 6);
          }
          elseif ($columnName=="last_name"){
            $actorId = substr($key, 0, 6);
          }
          else {
            $actorId = substr($key, 0, 6);
          }
          $query = "UPDATE actors SET " . $columnName . " = '" . $value . "' WHERE id = '$actorId';";
          mysqli_query($db, $query);
        }
      }
      $query = substr($query,0,strlen($query)-2); // get rid of last comma
      $query = $query . " WHERE id = '$_GET[id]';";
      mysqli_query($db,$query);
      echo $query;
    }
    else if (isset($_GET["cancel"]) == TRUE){ // They canceled an update to the database
      echo "Update canceled";
    }
}
else if (isset($_GET["inputText"]) == TRUE) // They entered a country name
{
  $name = $_GET["inputText"];
  $query= "SELECT movies.id AS movie_id, movies.name, movies.year, movies.rank, actors.first_name, actors.last_name,
  roles.role AS r, actors.id FROM movies
  JOIN roles ON movies.id = roles.movie_id
  JOIN actors ON roles.actor_id = actors.id
  WHERE name = '$name';";
  $result = mysqli_query($db,$query);

  if (mysqli_num_rows($result) > 0) { // check if there are any results
      $row = mysqli_fetch_assoc($result); // get the first row
      echo "<form action='$_SERVER[PHP_SELF]' method='get'>"; // make the form
      echo "<input type='hidden' name='id' value='$row[movie_id]'>";
      foreach ($row as $key=>$value){ // print out the movie name, year and rank
        if ($key == "name" || $key == "year" || $key == "rank"){ // if column is name,rank,or year
          echo "$key: <input type='text' name='$key' value='$value'> <br>";
        }
      }

      while($row) { // loop through all the rows and print out the actors information
        foreach ($row as $key=>$value){ // loop through the current row
          if ($key == 'first_name' || $key == 'last_name' || $key == 'role'){ //if column is ...
            echo "$key: <input type='text' name='" . $row["id"] . $key . "' value='$value'>";
          }
        }
        echo "<br>"; // create a new line after each actor
        $row = mysqli_fetch_assoc($result); // go to the next row
      }

      echo "<input type='submit' name='update'>";
      echo "<input type='submit' value='Cancel' name='cancel'> </form>";

  }
  else {
      echo "Error: Invalid movie name. <a href='$_SERVER[PHP_SELF]'> Reload page.</a>";
  }
}
mysqli_close($db);
?>

</body>
</html>
