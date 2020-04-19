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

  <h1> Simpsons Database </h1>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <input type="radio" name="qry" value="1"> show all the students and their grades<br>
    <input type="radio" name="qry" value="2"> show Bart and Lisa’s grades<br>
    <input type="radio" name="qry" value="3"> show Ralph’s grades and the course names<br>
    <input type="radio" name="qry" value="4"> show Milhouse’s grades and his email and password<br>
    <input type="radio" name="qry" value="5"> show the names of all students with grades less than a B-<br>
    <input type="submit" name="submit"><br><br><br> Result: <br><br>

    <?php
    switch ($_GET["qry"]) {
      case "1" :
      $query = "SELECT name, grade FROM students JOIN grades ON id = student_id;";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $name1= $row["name"] . " ";
          while (strlen ($name1) <= 9) {
            $name1 = $name1 . "-";
          }
          echo "<font face='monospace' size=5 color='black'>Name: " . $name1 . "  Grade: " . $row["grade"] . "<br></font>";
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "2" :
      $query = "SELECT students.name, grades.grade FROM students JOIN grades ON students.id = grades.student_id WHERE students.id = 888 OR students.id = 123;"; //<- FIX THIS
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $name2= $row["name"] . " ";
          while (strlen ($name2) <= 9) {
            $name2 = $name2 . "-";
          }
          echo "<font face='monospace' size=5 color='black'>Name: " . $name2 . "  Grade: " . $row["grade"] . "<br></font>";
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "3" :
      $query = "SELECT grades.grade, courses.name FROM grades JOIN courses ON grades.course_id = courses.id WHERE grades.student_id = 404;";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<font face='monospace' size=5 color='black'>Ralph has a " . $row["grade"] . " in " . $row["name"] . ". <br></font>";//<- fix this
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "4" :
      $query = "SELECT students.name, grades.grade, students.email, students.password FROM students JOIN grades ON students.id = grades.student_id WHERE students.id = 456;";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<font face='monospace' size=5 color='black'>" . $row["name"] . " has a " . $row["grade"] . ". His email is " . $row["email"] . " and his password is " . $row["password"] . ".<br></font>";//<- fix this
        }
      }
      else {
        echo "0 results";
      }
      break;
      case "5" :
      $query = "SELECT students.name, grades.grade FROM students JOIN grades ON students.id = grades.student_id WHERE grades.grade = 'C+' OR grades.grade = 'C' OR grades.grade = 'C-' OR grades.grade = 'D+' OR grades.grade = 'D' OR grades.grade = 'D-';";
      $result = mysqli_query($db,$query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $name5= $row["name"] . " ";
          while (strlen ($name5) <= 9) {
            $name5 = $name5 . "-";
          }
          echo "<font face='monospace' size=5 color='black'>Name: " . $name5 . "  Grade: " . $row["grade"] . "<br></font>";
        }
      }
      else {
        echo "0 results";
      }
      break;
      default:
      echo "Choose One of the Choices";
    }
    mysqli_close($db);
    ?>
  </form>
</body>
</html>
