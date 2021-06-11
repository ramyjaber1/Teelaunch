<html>
  
  <head>
      <title>
         Exercice 2 
      </title>
  </head>
<?php

$str = $_POST['str1'];
?>

<?php
function isBalance($string) {

		$openingBrackets = array("(", "[", "{");
		$closingBrackets = array(")", "]", "}");
		$stack = array();
		for ($i = 0; $i < strlen($string); $i++) {
			$char = $string[$i];

			if (in_array($char, $openingBrackets)) {
				array_push($stack, $char);
			}

			if (in_array($char, $closingBrackets)) {
				$matchingOpeningBracket = $openingBrackets[array_search($char, $closingBrackets)];
				
				$topOfStack = array_values(array_slice($stack, -1))[0];
				if ($topOfStack == $matchingOpeningBracket) {

					array_pop($stack);
				} else {

					echo "Error at character location {$i}. {$topOfStack} not closed properly.\n";
					break;
				}
			}

	
			if ((strlen($string) - 1) == $i) {
				echo "Success\n";
			}
		}
	}
	isBalance($str);

?>