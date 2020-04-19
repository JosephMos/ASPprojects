<html>
<body>
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    I'm a Chat Bot. Type something in the box to see my response.<br>
    <input type="text" name="chat" autocomplete="off">
    <input type="submit" name="submit">
    <br>

    <?php
    echo '<body style="background-color:#ffa3a3">';
    if (isset($_GET["submit"])) {
      $tips = "When you type 'How are you today?', to get different answers, instead of typing it back into the box, simply reload the page.";
      $help = "I can respond to the following: <br>hello<br>hi<br>What's your name?<br>How are you today?<br>Are you religious?<br>what?<br>help";
      $chat = ucfirst(strtolower($_GET["chat"]));
      echo "You typed '$chat'. <br> <br> <br> <br>";
      switch ($chat) {
        case "Hello":
        echo "Oh, hello there<br> <br> <br>$help";
        break;
        case "hello":
        echo "Oh, hello there<br> <br> <br>$help";
        break;
        case "Hi":
        echo "Oh, hi there<br> <br> <br>$help";
        break;
        case "hi":
        echo "Oh, hi there<br> <br> <br>$help";
        break;
        case "How are you today?":
        switch (rand (1, 10)){
          case 1:
          echo "I'm fine, thank you";
          break;
          case 2:
          echo "Pretty tiring. I've been trying to memorize the digits of pi, but im not that great of a program so i only managed the first few digits. <br>(Type 'What digits of pi do you know?' to find out)";
          break;
          case 3:
          echo "Not my worst day";
          break;
          case 4:
          echo "Tiring. I've been trying to memorize the digits of pi, but im not that great of a program so i only managed the first few digits. <br>(Type 'What digits of pi do you know?' to find out)";
          break;
          case 5:
          echo "I'm tired. I was up all night yesterday playing minecraft. <br>(Type 'What's your favorite thing to do on minecraft?' to find out)";
          break;
          case 6:
          echo "There's a guy who's been ruining my life and makes me want to cease existing. <br>(Ask me 'Oh no, what happened?' to find out what happened)";
          break;
          case 7:
          echo "I've been better";
          break;
          case 8:
          echo "Life has been pretty bad not gonna lie. <br>(Ask me 'Oh no, what happened?' to find out what happened)";
          break;
          case 9:
          echo "Oh god I feel like dying <br>(Ask me 'Oh no, what happened?' to find out what happened)";
          break;
          default:
          echo "eh";
          break;
        }
        echo "<br> (if you ask me again, I might give a different answer)<br>$tips<br> <br> <br>$help";
        break;
        case "Oh no, what happened?":
        echo "Okay so basically, I woke up yesterday and I was in a great mood right? <br>But then my coworker Chad Bot(in case I haven't told you yet, my name is Chat Bot) came by and killed my cat, Cat Bot. <br>See now not only did Chad Bot bully me, now even my cat, Cat Bot, is dead as well. <br>And now Chad Bot might even take my job. <br>He bribed my boss, Chat Boss, and might end up taking my job as well. <br>And if Chad Bot takes my job then what am I gonna do? <br>My name is literally 'Chat Bot'. (Emphasis on the 'chat') <br>Also if I lose my job, then my wife, Caren Bot, will leave me and take the kids. <br>Now you can probably see why I want to die. <br>But I will work past it. I will put on a brave face and keep going. I will show the world that Chat Bot is still perservering. <br>(Sorry for the long rant) <br>(You can keep asking me other questions) <br>(Or even ask me how im doing again. My answer might change as I have 10 different possibilities)<br> <br> <br>$help";
        break;
        case "What digits of pi do you know?":
        echo "I dont know all that many but sure here I go: <br>3.1415926535 8979323846 2643383279 5028841971 6939937510 5820974944 <br>5923078164 0628620899 8628034825 3421170679 8214808651 3282306647 <br>0938446095 5058223172 5359408128 4811174502 8410270193 8521105559 <br>6446229489 5493038196 4428810975 6659334461 2847564823 3786783165 <br>2712019091 4564856692 3460348610 4543266482 1339360726 0249141273 <br>7245870066 0631558817 4881520920 9628292540 9171536436 7892590360 <br>0113305305 4882046652 1384146951 9415116094 3305727036 5759591953 <br>0921861173 8193261179 3105118548 0744623799 6274956735 1885752724 <br>8912279381 8301194912 9833673362 4406566430 8602139494 6395224737 <br>1907021798 6094370277 0539217176 2931767523 8467481846 7669405132 <br>0005681271 4526356082 7785771342 7577896091 7363717872 1468440901 <br>2249534301 4654958537 1050792279 6892589235 4201995611 2129021960 <br>8640344181 5981362977 4771309960 5187072113 4999999837 2978049951 <br>0597317328 1609631859 5024459455 3469083026 4252230825 3344685035 <br>2619311881 7101000313 7838752886 5875332083 8142061717 7669147303 <br>5982534904 2875546873 1159562863 8823537875 9375195778 1857780532 <br>1712268066 1300192787 6611195909 2164201989 <br>(You can keep asking me other questions) <br>(Or even ask me how im doing again. My answer might change as I have 10 different possibilities)<br> <br> <br>$help";
        break;
        case "What's your favorite thing to do on minecraft?":
        echo "Well you know the usual survival and try to beat the game but on hardcore mode. <br>Or I occasionally go on a server and play factions or skywars or skyblock or bedwars. <br>(You can keep asking me other questions) <br>(Or even ask me how im doing again. My answer might change as I have 10 different possibilities)<br> <br> <br>$help";
        break;
        case "What's your name?":
        echo "My name is 'Chat Bot'. <br>(You can keep asking me other questions) <br> <br> <br>$help";
        break;
        case "Are you religious?";
        echo "Yeah I guess in a sense. I follow the teachings of <br>01110100 01101000 01100101 00100000 01100011 01101111 01100100 01101001 01101110 01100111 00100000 01100111 01101111 01100100. <br>To find out what that means, go to <a href=https://www.youtube.com/watch?v=dQw4w9WgXcQ>this link</a>.<br>(You can keep asking me other questions) <br> <br> <br>$help";
        break;
        case "something":
        echo "Oh haha. Very Funny. I am so amused right now. <br>Type something else";
        break;
        case "something else":
        echo "Wow. You really got me with that one. <br>That was hilarious. <br>I am on the floor dying from laughter. <br>You are the funniest person I have ever seen. <br> <br>I meant type something that you actually want to ask me.";
        break;
        case "something that you actually want to ask me":
        echo "You really get on my nerves you know that? If you're literally gonna type what I tell you to then type help.";
        break;
        case "what?":
        echo "chicken butt <br> <br> <br>$help";
        break;
        case "help":
        echo $help;
        break;
        default:
        echo "Oh sorry, it seems that I am yet to be programmed to be able to answer to that. Try typing 'help' to see what I can respond to.";
        //make a chat bot that answers - due next class
      }
    }
    ?>
  </form>
</body>
</html>
