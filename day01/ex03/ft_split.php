#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$str = trim($str);
		while (strstr($str, "  ")) {
			$str = str_replace("  ", " ", $str);
		}
		$my_tab = explode(" ", $str);
		sort($my_tab);
		return ($my_tab);
	}

	print_r(ft_split("Hello    World AAA"));
?>
