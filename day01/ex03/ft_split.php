#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$my_tab = preg_split('/\s+/', $str);
		sort($my_tab);
		return ($my_tab);
	}

	print_r(ft_split("Hello    World AAA"));
?>
//https://stackoverflow.com/questions/2326125/remove-multiple-whitespaces
