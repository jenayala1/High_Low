<?php


$a = mt_rand(1, 100);
$attempts = 0;
echo "Guess a number between 1 - 100" . PHP_EOL;

do {
	echo "Guess a number between 1 - 100" . PHP_EOL;
	$userGuess = trim(fgets(STDIN));


	if (! is_numeric($userGuess)){
		echo "That is not a number";
		continue;
	}

	$attempts += 1;

	if ($userGuess > $a) {
		echo "Guess lower ".PHP_EOL;

	} 
	if ($userGuess < $a) {
		echo "Guess higher " .PHP_EOL;

	}
	if ($userGuess == $a) {
		echo " Good guess, YOU WON! Number of tries: " . $attempts . PHP_EOL;
	}
		
} while ($userGuess != $a);
