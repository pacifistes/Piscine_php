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

	$i = 0;
	$finalTab = array();
	foreach ($argv as $element) {
		if ($i > 0) {
			$tabTmp = ft_split($element);
			foreach ($tabTmp as $str) {
				$finalTab[] = $str;
			}
		}
		$i++;
	}
	sort($finalTab);
	foreach ($finalTab as $strSort) {
		echo "$strSort\n";
	}
?>