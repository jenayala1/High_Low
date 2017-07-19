<?php


$a = 7;

fwrite(STDOUT, "Guess a number between 1 - 100" );
$userGuess = fgets(STDIN);

	If (userGuess > $a) {
		echo "Guess lower" . PHP_EOL,
		fwrite(STDOUT, "Try again"),
		$userGuess = fgets(STDIN);

	} else if (userGuess < $a) {
		echo "Guess higher" . PHP_EOL,
		fwrite(STDOUT, "Try again"),
		$userGuess = fgets(STDIN);

	} else {
		echo "Good guess!";
	}
