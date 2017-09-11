#!/usr/bin/php
<?PHP
	$i = 0;
	foreach ($argv as $element) {
		if ($i > 0) {
			echo $element."\n";
		}
		$i++;
	}
?>