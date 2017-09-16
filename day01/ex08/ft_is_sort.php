#!/usr/bin/php
<?PHP
	function ft_is_sort($tab)
	{
		$i = 0;
		$tabSort = $tab;
		sort($tabSort);
		foreach ($tabSort as $strSort) {
			if ($strSort != $tab[$i])
			{
				return FALSE;
			}
			$i++;
		}
		return TRUE;
	}
?>