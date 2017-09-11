#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$my_tab = explode(" ", $str);
		sort($my_tab);
		return ($my_tab);
	}

	print_r(ft_split("Hello    World AAA"));	
?>