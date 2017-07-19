<?php


$a = rand(1, 100);
$numberOfGuesses = 0;

fwrite(STDOUT, "Guess a number between 1 - 100" .PHP_EOL );

do {
	echo "Guess a number between 1 - 100";
	$userGuess = trim(fgets(STDIN));

	if (! is_numeric($userGuess)){
		echo "That is not a number";
		continue;
	}
	$numberOfGuesses += 1;

	if ($userGuess < $a) {
		echo "Higher!" . PHP_EOL;
	}

	if ($userGuess > $a) {
		echo "Guess lower ".PHP_EOL;

	}

	if ($userGuess == $a) {
		echo " Good guess, YOU WON! Number of tries: " . $numberOfGuesses . PHP_EOL;

} while ($userGuess != $a);
			


