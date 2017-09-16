#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$str = trim($str);
		while (strstr($str, "  ")) {
			$str = str_replace("  ", " ", $str);
		}
		$my_tab = explode(" ", $str);
		return ($my_tab);
	}

	$tab = array();
	if ($argc > 1) {
		$tab = ft_split($argv[1]);
		$i = 0;
		foreach ($tab as $str) {
			if ($i > 0) {
				echo "$str ";
			}
			$i++;
		}
		if ($i > 0) {
			echo "$tab[0]\n";
		}
	}
?>