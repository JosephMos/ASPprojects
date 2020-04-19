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
    $query = "SELECT teachers.name AS teachers, grades.grade, courses.name AS course FROM teachers
    JOIN courses ON courses.teacher_id = teachers.id
    JOIN grades ON grades.course_id = courses.id
    JOIN students ON students.id = grades.student_id
    WHERE students.name LIKE '$_GET[text]';";

    $result = mysqli_query($db,$query);
//--part 3-->
    echo "<br>" . $_GET["text"] . " Report Card:<br><br>";
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $teachers1 = $row["teachers"] . " ";
        while (strlen ($teachers1) <= 10) {
          $teachers1 = $teachers1 . "-";
        }
        $course1 = $row["course"] . " ";
        while (strlen ($course1) <= 24) {
          $course1 = $course1 . "-";
        }

        echo "<font face='monospace' size=5 color='black'>Teacher: " . $teachers1 . "  Course: " . $course1 . "  Grade: " . $row["grade"] . "<br></font>";
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
