<html>
  <body>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
      <title>Letter text to Hex 4 (for Pep9)</title>
      <br>
      Type in a 10(by default)-lettered word <br>
      (If you do less, the remaining letters will be spaces) (spaces count as letters)<br><br>
      If you want to change how many letters, simply put in in the desired number of letters here: <br>
      <input type="number" name="length"> though I would not suggest going beyond 25 letters. <br>
      <input type="text" name="text">
      <input type="submit" name="submit">

      <?php
  if (isset ($_GET["submit"])) {
    //FOR THIS ONE TRY TO MAKE IT SO THAT THE USER CAN CHOOSE LENGTH
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
        echo "You typed '$text' <br><br>";
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
        $length = $_GET["length"] - 1;
        $x = 0;
        while ($x <= $length) {
          lettercheck (substr ($text, $x, 1));
          //echo "<br>";
          $x++;
        }


  }
      ?>

    </form>

  <?php
  //the ones with a letter then a b is the uppercase ones
  //the ones with just the letter is the lowercase ones
  function ab () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 41<br>
    F1 FC 16<br>

    </p>';
  }
  function bb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 42<br>
    F1 FC 16<br>

    </p>';
  }
  function cb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 43<br>
    F1 FC 16<br>

    </p>';
  }
  function db () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 44<br>
    F1 FC 16<br>

    </p>';
  }
  function eb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 45<br>
    F1 FC 16<br>

    </p>';
  }
  function fb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 46<br>
    F1 FC 16<br>

    </p>';
  }
  function gb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 47<br>
    F1 FC 16<br>

    </p>';
  }
  function hb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 48<br>
    F1 FC 16<br>

    </p>';
  }
  function ib () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 49<br>
    F1 FC 16<br>

    </p>';
  }
  function jb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 4A<br>
    F1 FC 16<br>

    </p>';
  }
  function kb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 4B<br>
    F1 FC 16<br>

    </p>';
  }
  function lb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 4C<br>
    F1 FC 16<br>

    </p>';
  }
  function mb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 4D<br>
    F1 FC 16<br>

    </p>';
  }
  function nb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 4E<br>
    F1 FC 16<br>

    </p>';
  }
  function ob () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 4F<br>
    F1 FC 16<br>

    </p>';
  }
  function pb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 50<br>
    F1 FC 16<br>

    </p>';
  }
  function qb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 51<br>
    F1 FC 16<br>

    </p>';
  }
  function rb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 52<br>
    F1 FC 16<br>

    </p>';
  }
  function sb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 53<br>
    F1 FC 16<br>

    </p>';
  }
  function tb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 54<br>
    F1 FC 16<br>

    </p>';
  }
  function ub () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 55<br>
    F1 FC 16<br>

    </p>';
  }
  function vb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 56<br>
    F1 FC 16<br>

    </p>';
  }
  function wb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 57<br>
    F1 FC 16<br>

    </p>';
  }
  function xb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 58<br>
    F1 FC 16<br>

    </p>';
  }
  function yb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 59<br>
    F1 FC 16<br>

    </p>';
  }
  function zb () {
    echo '<p style = "font-family:monospace,garamond,serif;font-size:16px;">
    D0 00 5A<br>
    F1 FC 16<br>

    </p>';
  }
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
        case "A":
          ab();
        break;
        case "B":
          bb();
        break;
        case "C":
          cb();
        break;
        case "D":
          db();
        break;
        case "E":
          eb();
        break;
        case "F":
          fb();
        break;
        case "G":
          gb();
        break;
        case "H":
          hb();
        break;
        case "I":
          ib();
        break;
        case "J":
          jb();
        break;
        case "K":
          kb();
        break;
        case "L":
          lb();
        break;
        case "M":
          mb();
        break;
        case "N":
          nb();
        break;
        case "O":
          ob();
        break;
        case "P":
          pb();
        break;
        case "Q":
          qb();
        break;
        case "R":
          rb();
        break;
        case "S":
          sb();
        break;
        case "T":
          tb();
        break;
        case "U":
          ub();
        break;
        case "V":
          vb();
        break;
        case "W":
          wb();
        break;
        case "X":
          xb();
        break;
        case "Y":
          yb();
        break;
        case "Z":
          zb();
        break;
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
