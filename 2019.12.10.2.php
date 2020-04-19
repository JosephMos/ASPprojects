<html>

  <h1> Imdb Database Records</h1>
  <form action="$_SERVER[PHP_SELF]" method="get">
    <input type="text" name="movieName" placeholder="Enter a movie name"><br>

  <?php
    if (isset ($_GET("submit")) != true){
      echo "Which of these would you like to change for the movie inputted above?<br>";
      echo "<input type='checkbox' name='change' value='name'> The name<br>";
      echo "<input type='checkbox' name='change' value='year'> The year it was released<br>";
      echo "<input type='checkbox' name='change' value='rank'> The rank<br>";
    }

    if (isset ($_GET("submit")) == true){
      $x = 0;
      while ($x < 3) {

        $x++;
      }
      echo "<input type='text' name='rank' placeholder='Enter rank (0.0 <= num <= 10.0)'><br>";

    }

  ?>

    <input type="submit" name="sumbit" value="update"><br>
  </form><br>

</html>
