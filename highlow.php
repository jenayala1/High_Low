<?php


$a = 7;

fwrite(STDOUT, "Guess a number between 1 - 100" .PHP_EOL );
$userGuess = fgets(STDIN);

if (userGuess > $a) {
		fwrite(STDOUT, "Guess lower" .PHP_EOL);
		$userGuess = fgets(STDIN);

	} else if (userGuess < $a) {
		fwrite(STDOUT, "Guess higher " .PHP_EOL);
		$userGuess = fgets(STDIN);

	} else {
		fwrite(STDOUT, " Good guess! ");
	}
