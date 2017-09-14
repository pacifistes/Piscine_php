#!/usr/bin/php
<?PHP
	if ($argc == 2)
	{
		$epur_str = trim($argv[1], "\x00..\x1F");
		$epur_str = preg_replace("/\s+(?=\s)/", "", $argv[1]);
		echo $epur_str;
	}

?>

^\s+      # Match whitespace at the start of the string
|         # or
\s+$      # Match whitespace at the end of the string
|         # or
\s+(?=\s) # Match whitespace if followed by another whitespace character
