<html>
  <body>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
      <title>Letter text to Hex 2 (for Pep9)</title>
      <br>
      Type in a 10(or less)-lettered word <br>
      (For this version, this only works with lowercase letters) <br>
      <input type="text" name="text" maxlength="10">
      <input type="submit" name="submit">

      <?php
  if (isset ($_GET["submit"])) {
/*
      $keyword = "qwas";
      $text = $_GET["text"] . $keyword;
*/

/*
        $totalnum = strpos($text, $keyword);
        $letnum = 0;
        foreach ($letnum < $totalnum) {
          lettercheck (substr ($text, $letnum, 1));
          echo "<br><br>";
          $letnum++;
        }

*/

        $text = $_GET["text"];
        /*
        lettercheck (substr ($text, 0, 1));
        //echo "<br>";
        $letnum++;
        lettercheck (substr ($text, 1, 1));
        //echo "<br>";
        $letnum++;
        lettercheck (substr ($text, 2, 1));
        //echo "<br>";
        $letnum++;
        lettercheck (substr ($text, 3, 1));
        //echo "<br>";
        $letnum++;
        */
        $x = 0;
        while ($x <= 9) {
          lettercheck (substr ($text, $x, 1));
          //echo "<br>";
          $x++;
        }


  }
      ?>

    </form>

  <?php
    function a () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 61<br>
      F1 FC 16<br>

      </p>';
    }
    function b () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 62<br>
      F1 FC 16<br>

      </p>';
    }
    function c () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 63<br>
      F1 FC 16<br>

      </p>';
    }
    function d () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 64<br>
      F1 FC 16<br>

      </p>';
    }
    function e () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 65<br>
      F1 FC 16<br>

      </p>';
    }
    function f () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 66<br>
      F1 FC 16<br>

      </p>';
    }
    function g () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 67<br>
      F1 FC 16<br>

      </p>';
    }
    function h () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 68<br>
      F1 FC 16<br>

      </p>';
    }
    function i () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 69<br>
      F1 FC 16<br>

      </p>';
    }
    function j () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 6A<br>
      F1 FC 16<br>

      </p>';
    }
    function k () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 6B<br>
      F1 FC 16<br>

      </p>';
    }
    function l () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 6C<br>
      F1 FC 16<br>

      </p>';
    }
    function m () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 6D<br>
      F1 FC 16<br>

      </p>';
    }
    function n () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 6E<br>
      F1 FC 16<br>

      </p>';
    }
    function o () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 6F<br>
      F1 FC 16<br>

      </p>';
    }
    function p () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 70<br>
      F1 FC 16<br>

      </p>';
    }
    function q () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 71<br>
      F1 FC 16<br>

      </p>';
    }
    function r () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 72<br>
      F1 FC 16<br>

      </p>';
    }
    function s () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 73<br>
      F1 FC 16<br>

      </p>';
    }
    function t () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 74<br>
      F1 FC 16<br>

      </p>';
    }
    function u () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 75<br>
      F1 FC 16<br>

      </p>';
    }
    function v () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 76<br>
      F1 FC 16<br>

      </p>';
    }
    function w () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 77<br>
      F1 FC 16<br>

      </p>';
    }
    function x () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 78<br>
      F1 FC 16<br>

      </p>';
    }
    function y () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 79<br>
      F1 FC 16<br>

      </p>';
    }
    function z () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 7A<br>
      F1 FC 16<br>

      </p>';
    }
    function space () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      D0 00 20<br>
      F1 FC 16<br>

      </p>';
    }
    function lettercheck ($letter) {
      switch ($letter) {
        case "a":
          a();
        break;
        case "b":
          b();
        break;
        case "c":
          c();
        break;
        case "d":
          d();
        break;
        case "e":
          e();
        break;
        case "f":
          f();
        break;
        case "g":
          g();
        break;
        case "h":
          h();
        break;
        case "i":
          i();
        break;
        case "j":
          j();
        break;
        case "k":
          k();
        break;
        case "l":
          l();
        break;
        case "m":
          m();
        break;
        case "n":
          n();
        break;
        case "o":
          o();
        break;
        case "p":
          p();
        break;
        case "q":
          q();
        break;
        case "r":
          r();
        break;
        case "s":
          s();
        break;
        case "t":
          t();
        break;
        case "u":
          u();
        break;
        case "v":
          v();
        break;
        case "w":
          w();
        break;
        case "x":
          x();
        break;
        case "y":
          y();
        break;
        case "z":
          z();
        break;
        default:
          space();
      }
    }
  ?>
  </body>
  </html>
