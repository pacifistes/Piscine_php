#!/usr/bin/php
<?PHP
	if ($argc == 2)
	{
		$str = trim($argv[1]);
		while (strstr($str, "  ")) {
			$str = str_replace("  ", " ", $str);
		}
		echo $str;
	}

?>