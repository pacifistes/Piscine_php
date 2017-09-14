#!/usr/bin/php
<?PHP
	echo "Entrez un nombre: ";
	$fichier = fopen("php://stdin", "r+");
	while (($my_var = fgets($fichier)) != FALSE)
	{
		$my_var = substr($my_var, 0, strlen($my_var) - 1);
		if (is_numeric($my_var) == true) {
			if ($my_var % 2 == 0) {
				echo "Le chiffre ".$my_var." est Pair\n";
			}
			else {
				echo "Le chiffre ".$my_var." est Impair\n";
			}
		}
		else {
			echo "'$my_var' n'est pas un chiffre\n";
		}
		echo "Entrez un nombre: ";
	}
	echo "\n";
	fclose($fichier);
?>
