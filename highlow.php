<?php

$min = 1;
$max = 100;
$a = mt_rand($min, $max);

fwrite(STDOUT, "Guess a number between 1 - 100" .PHP_EOL );

$userGuess = fgets(STDIN);

while ($userGuess != $a){

	if ($userGuess > $a) {
		fwrite(STDOUT, "Guess lower ".PHP_EOL);
		$userGuess = fgets(STDIN);

	} elseif ($userGuess < $a) {
		fwrite(STDOUT, "Guess higher " .PHP_EOL);
		$userGuess = fgets(STDIN);

	}

} if ($userGuess == $a) {
	echo " Good guess, YOU WON! Number of tries: " . count($userGuess) . PHP_EOL;
}
		


