<?php
 require "2020.05.ia.01.login.header.php";
?>

  <main>
    <?php
    echo "<br>";
      if (isset ($_GET['error'])){
        if ($_GET['error']=="emptyfields"){
          echo "<font color='#ff2626'>Empty Fields</font>";
        }
        elseif ($_GET['error']=="invalidmailuid"){
          echo "<font color='#ff2626'>Invalid Email and Username</font>";
        }
        elseif ($_GET['error']=="invalidmail"){
          echo "<font color='#ff2626'>Invalid Email</font>";
        }
        elseif ($_GET['error']=="invaliduid"){
          echo "<font color='#ff2626'>Invalid Username</font>";
        }
        elseif ($_GET['error']=="passwordcheck"){
          echo "<font color='#ff2626'>Passwords do not match</font>";
        }
      }
     ?>
    <h1 style="color:#d1d1d1">Signup</h1>
    <form class="form-signup" action="2020.05.ia.01.login.signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username" value=<?=$_GET['uid']?>><br>
      <input type="text" name="mail" placeholder="Email" value=<?=$_GET['mail']?>><br>
      <input type="password" name="pwd" placeholder="Password"><br>
      <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
      <button type="submit" name="signup-submit">Signup</button>
    </form>
  </main>

<?php
 require "2020.05.ia.01.login.footer.php";
?>
