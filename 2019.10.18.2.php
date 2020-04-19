<html>
  <body>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

      <font color='white'>Type in a 4(or less)-lettered word</font> <br>
      <input type="text" name="text" maxlength="4">
      <input type="submit" name="submit">

      <?php
  if (isset ($_GET["submit"])) {
/*
      $keyword = "qwas";
      $text = $_GET["text"] . $keyword;



        $totalnum = strpos($text, $keyword);
        $letnum = 0;
        foreach ($letnum < $totalnum) {
          lettercheck (substr ($text, $letnum, 1));
          echo "<br><br>";
          $letnum++;
        }

*/
        echo '<body style="background-color:black">';
        echo "<font color='white'>";
        $text = $_GET["text"];
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
        echo "</font>";

  }
      ?>

    </form>

  <?php
    function a () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ........_/........<br>
      ......._/_/.......<br>
      ......_/.._/......<br>
      ....._/...._/.....<br>
      ...._/_/_/_/_/....<br>
      ..._/........_/...<br>
      .._/.........._/..<br>
      ..................<br>

      </p>';
    }
    function b () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ...._/_/_/_/_/....<br>
      ...._/......._/...<br>
      ...._/......_/....<br>
      ...._/_/_/_/......<br>
      ...._/......_/....<br>
      ...._/......._/...<br>
      ...._/_/_/_/_/....<br>
      ..................<br>

      </p>';
    }
    function c () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ......_/_/_/_/....<br>
      ...._/........_/..<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ...._/........_/..<br>
      ......_/_/_/_/....<br>
      ..................<br>

      </p>';
    }
    function d () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/_/_/.........<br>
      ..._/...._/.......<br>
      ..._/......_/.....<br>
      ..._/......._/....<br>
      ..._/......_/.....<br>
      ..._/....._/......<br>
      ..._/_/_/.........<br>
      ..................<br>

      </p>';
    }
    function e () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/_/_/_/_/_/...<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/_/_/_/_/.....<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/_/_/_/_/_/...<br>
      ..................<br>

      </p>';
    }
    function f () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/_/_/_/_/_/...<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/_/_/_/_/.....<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ..................<br>

      </p>';
    }
    function g () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ......_/_/_/_/....<br>
      ...._/........_/..<br>
      ..._/.............<br>
      ..._/....._/_/_/..<br>
      ..._/........._/..<br>
      ...._/........_/..<br>
      ......_/_/_/_/....<br>
      ..................<br>

      </p>';
    }
    function h () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/_/_/_/_/_/...<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..................<br>

      </p>';
    }
    function i () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/_/_/_/_/_/_/..<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      .._/_/_/_/_/_/_/..<br>
      ..................<br>

      </p>';
    }
    function j () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/_/_/_/_/_/_/..<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      .._/...._/........<br>
      ...._/_/..........<br>
      ..................<br>

      </p>';
    }
    function k () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/........_/...<br>
      ..._/......_/.....<br>
      ..._/...._/.......<br>
      ..._/_/_/.........<br>
      ..._/...._/.......<br>
      ..._/......_/.....<br>
      ..._/........_/...<br>
      ..................<br>

      </p>';
    }
    function l () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/_/_/_/_/_/...<br>
      ..................<br>

      </p>';
    }
    function m () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ._/_/........_/_/.<br>
      ._/._/......_/._/.<br>
      ._/.._/...._/.._/.<br>
      ._/..._/.._/..._/.<br>
      ._/...._/_/...._/.<br>
      ._/....._/....._/.<br>
      ._/............_/.<br>
      ..................<br>

      </p>';
    }
    function n () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/_/......_/...<br>
      ..._/._/....._/...<br>
      ..._/..._/..._/...<br>
      ..._/...._/.._/...<br>
      ..._/....._/._/...<br>
      ..._/......_/_/...<br>
      ..._/........_/...<br>
      ..................<br>

      </p>';
    }
    function o () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ......_/_/_/......<br>
      ...._/......_/....<br>
      ..._/........._/..<br>
      ..._/........._/..<br>
      ..._/........._/..<br>
      ...._/......_/....<br>
      ......_/_/_/......<br>
      ..................<br>

      </p>';
    }
    function p () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/_/_/_/_/.....<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/_/_/_/_/.....<br>
      ..._/.............<br>
      ..._/.............<br>
      ..._/.............<br>
      ..................<br>

      </p>';
    }
    function q () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ......_/_/_/......<br>
      ...._/......_/....<br>
      ..._/........._/..<br>
      ..._/........._/..<br>
      ..._/....._/.._/..<br>
      ...._/......_/....<br>
      ......_/_/_/.._/..<br>
      ..................<br>

      </p>';
    }
    function r () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/_/_/_/_/.....<br>
      ..._/........_/...<br>
      ..._/......_/.....<br>
      ..._/_/_/_/.......<br>
      ..._/....._/......<br>
      ..._/......_/.....<br>
      ..._/......._/....<br>
      ..................<br>

      </p>';
    }
    function s () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ....._/_/_/_/.....<br>
      ..._/........_/...<br>
      ...._/............<br>
      ......_/_/_/......<br>
      ............_/....<br>
      ..._/........_/...<br>
      ....._/_/_/_/.....<br>
      ..................<br>

      </p>';
    }
    function t () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/_/_/_/_/_/_/..<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ..................<br>

      </p>';
    }
    function u () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ..._/........_/...<br>
      ...._/......_/....<br>
      ......_/_/_/......<br>
      ..................<br>

      </p>';
    }
    function v () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/.........._/..<br>
      ..._/........_/...<br>
      ...._/......_/....<br>
      ....._/...._/.....<br>
      ......_/.._/......<br>
      ......._/_/.......<br>
      ........_/........<br>
      ..................<br>

      </p>';
    }
    function w () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/.........._/..<br>
      .._/.........._/..<br>
      .._/...._/...._/..<br>
      .._/..._/_/..._/..<br>
      .._/.._/.._/.._/..<br>
      ..._/_/...._/_/...<br>
      ...._/......_/....<br>
      ..................<br>

      </p>';
    }
    function x () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/.........._/..<br>
      ...._/......_/....<br>
      ......_/.._/......<br>
      ........_/........<br>
      ......_/.._/......<br>
      ...._/......_/....<br>
      .._/.........._/..<br>
      ..................<br>

      </p>';
    }
    function y () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/.........._/..<br>
      ...._/......_/....<br>
      ......_/.._/......<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ........_/........<br>
      ..................<br>

      </p>';
    }
    function z () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      .._/_/_/_/_/_/_/..<br>
      ............_/....<br>
      .........._/......<br>
      ........_/........<br>
      ......_/..........<br>
      ...._/............<br>
      .._/_/_/_/_/_/_/..<br>
      ..................<br>

      </p>';
    }
    function space () {
      echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
      ..................<br>
      ..................<br>
      ..................<br>
      ..................<br>
      ..................<br>
      ..................<br>
      ..................<br>
      ..................<br>
      ..................<br>

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
