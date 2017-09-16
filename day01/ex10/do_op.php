#!/usr/bin/php
<?PHP
	function print_operation($firstNumber, $operator, $secondNumber) {
		if ($operator == "+") {
			$result = $firstNumber + $secondNumber;
			echo "$result";
		}
		elseif ($operator == "-") {
			$result = $firstNumber - $secondNumber;
			echo "$result";
		}
		elseif ($operator == "*") {
			$result = $firstNumber * $secondNumber;
			echo "$result";
		}
		elseif ($operator == "/") {
			$result = $firstNumber / $secondNumber;
			echo "$result";
		}
		elseif ($operator == "%") {
			$result = $firstNumber % $secondNumber;
			echo "$result";
		}
		else {
			echo "Incorrect Parameters\n";
		}
	}

	if ($argc == 4)
	{
		$str = trim($argv[1]);
		while (strstr($str, "  ")) {
			$str = str_replace("  ", " ", $str);
		}
		echo $str;
	}
	else {
		echo "Incorrect Parameters\n";
	}

?>