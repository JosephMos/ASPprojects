<?php
 require "2020.05.ia.01.login.header.php";
?>

  <main>
    <?php
      if (isset($_SESSION['userId'])) {
        $username = $_SESSION['userUid'];
        echo '<p class="login-status" style="color:#d1d1d1">You are logged in. Welcome back, ' . $username . '</p>';
        if ($_SESSION['userUid'] == "test2"){
          echo '<br><p class="login-status" style="color:#d1d1d1">Ready to start admining?</p>';
        }
      }
      else{
        echo '<p class="login-status" style="color:#d1d1d1">You are logged out</p>';
      }
     ?>
  </main>

<?php
 require "2020.05.ia.01.login.footer.php";
?>
