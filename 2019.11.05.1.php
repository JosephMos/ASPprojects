<html>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
  <input type = "text" name="words">
  <input type="submit">
</form>

<?php
  if (isset($_GET["words"])){
    echo "You said: " . $_GET["words"] . "<br>";
    echo "Chatbot says: " . getResponse($_GET["words"]);
  }
  else{
    echo "Welcome to my chatbot. How are you?";
  }
?>

<?php
  function getResponse($statement = ""){
    if ($statement == ""){
      return "Say something, please.";
    }
    elseif (findKeyword($statement, "no") >= 0){
      return "Don't be so negative.";
    }
    elseif (findKeyword($statement, "mother") >= 0
				or findKeyword($statement, "father") >= 0
				or findKeyword($statement, "sister") >= 0
				or findKeyword($statement, "brother") >= 0)
    {
			return "Tell me more about your family.";
		}
		// Responses which require transformations
		elseif (findKeyword($statement, "I want to", 0) >= 0)
		{
			return transformIWantToStatement($statement);
		}
		elseif (findKeyword($statement, "I want", 0) >= 0)
		{
			return transformIWantStatement($statement);
		}
    // Look for a two word (you <something> me) pattern
		elseif (findKeyword($statement, "you", 0) >= 0 and findKeyword($statement, "me", findKeyword($statement, "you", 0)) >= 0)
		{
			return transformYouMeStatement($statement);
		}
    // Look for a two word (I <something> you) pattern
		elseif (findKeyword($statement, "i", 0) >= 0	and findKeyword($statement, "you", findKeyword($statement, "i", 0)) >= 0)
    {
      return transformIYouStatement($statement);
    }
		else
		{
			return getRandomResponse();
		}
  }

  function findKeyword($statement, $goal, $pos = 0){
    $statement = substr($statement, $pos);
    $goal = " " . strtolower($goal) . " ";
    $statement = " " . strtolower($statement) . " ";

    if (strpos($statement,$goal) === false){
      return -1;
    }
    else{
      return strpos($statement,$goal);
    }
  }
/**
	 * Take a statement with "I want to <something>." and transform it into
	 * "What would it mean to <something>?"
	 * @param statement the user statement, assumed to contain "I want to"
	 * @return the transformed statement
	 */
  function transformIWantToStatement($statement){
    if (stripos($statement, "I want to") !== false){
      $something = substr()
      echo "What would it mean to $something?";
    }
  }
/**
	 * Take a statement with "I want <something>." and transform it into
	 * "Would you really be happy if you had <something>?"
	 * @param statement the user statement, assumed to contain "I want"
	 * @return the transformed statement
	 */
  function transformIWantStatement($statement){
    echo "Would you really be happy if you had $something?";
  }
/**
	 * Take a statement with "you <something> me" and transform it into
	 * "What makes you think that I <something> you?"
	 * @param statement the user statement, assumed to contain "you" followed by "me"
	 * @return the transformed statement
	 */
  function transformYouMeStatement($statement){
    echo "What makes you think that I $something you?";
  }
/**
	 * Take a statement with "I <something> you" and transform it into
	 * "Why do you <something> me?"
	 * @param statement the user statement, assumed to contain "I" followed by "you"
	 * @return the transformed statement
	 */
  function transformIYouStatement($statement){
    echo "Why do you $something me?";
  }
/**
	 * Pick a default response to use if nothing else fits.
	 * @return a non-committal string
	 */
  function getRandomResponse(){
    echo "Sorry I don't quite understand what you mean";
  }
?>
</html>
