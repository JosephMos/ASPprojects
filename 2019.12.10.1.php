<!DOCTYPE html> <html><head> <title>SQL Demo</title> <meta charset="UTF-8"></head>
<body>
  <!--Using the world database updater files, make a webpage that allows a user
  to search for a movie by name and then update the movie's name, year, and rank. -->
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


  <h1> Imdb Database Records</h1>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <input type="text" name="movieName" placeholder="Enter a movie name"><br>
    <input type="text" name="change" placeholder="Enter change"><br>
    Which of these would you like to change for the movie inputted above?<br>
    <input type="checkbox" name="changeComp" value="movies.name"> Its name (I would not reccomend this one because it makes for finding the movie again very difficult)<br>
    <input type="checkbox" name="changeComp" value="movies.year"> Its release year<br>
    <input type="checkbox" name="changeComp" value="movies.rank"> Its rank<br>
    <input type="submit" name="update" value="update"><br>
    <input type="submit" name="cancel" value="cancel"><br>



  <?php

  if (isset($_GET["movieName"])){  // They submitted an update to the database
    $name = $_GET["movieName"];
    $query3 = "SELECT movies.id FROM movies WHERE name = '$name';";
    $result3 =  mysqli_query($db,$query3);
    $row3 = mysqli_fetch_assoc($result3);
    //echo $result3;
    $id = $row3[movies.id];
    //echo $id;
    //echo $row3[movies.id];

    echo "Database updated";

    $changeVal = $_GET["change"];
    $changeComp = $_GET["changeComp"];
    $query = "UPDATE movies SET $changeComp = '$changeVal' WHERE name = '$name';";
    $result = mysqli_query($db,$query);
    $query2 = "SELECT movies.name, movies.year, movies.rank FROM movies WHERE movies.id = 112290;";
    $result2 = mysqli_query($db,$query2);
    $row2 = mysqli_fetch_assoc($result2);

    echo "<br><br>Movie Name: " . $row2[movies.name] . "<br>Release Date: " . $row2[movies.year] . "<br>Rank (out of 10): " . $row2[movies.rank];
  }
  else if (isset($_GET["cancel"]) == TRUE){ // They canceled an update to the database
    echo "Update canceled";
  }

/*else if (isset($_GET["inputText"]) == TRUE) // They entered a country name
{
$name = $_GET["inputText"];
$query= "SELECT * FROM movies WHERE name = '$name';";
$result = mysqli_query($db,$query);

if (mysqli_num_rows($result) == 1) {
$row = mysqli_fetch_assoc($result);
echo "Name: " . $row["name"] .  "<br>";
echo "<form action='$_SERVER[PHP_SELF]' method='get'>
Head of State: <input type='text' name='headOfState' value='$row[head_of_state]'>
<input type='hidden' name='countryName' value='$row[name]'><br>
<input type='submit' name='update'> <input type='submit' value='Cancel' name='cancel'>
</form>";

}
else {
echo "Error: Invalid country name. <a href='$_SERVER[PHP_SELF]'> Reload page.</a>";
}
}*/
?>
</form><br>
<?php
mysqli_close($db);
?>

</body>
</html>
