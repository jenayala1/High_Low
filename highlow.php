<?php

$min = $argv[1];
$max = $argv[2];
$a = mt_rand($min, $max);
$attempts = 0;
echo "Guess a number between " . $min . " and " . $max . PHP_EOL;


do {
	$userGuess = trim(fgets(STDIN));


	if (! is_numeric($userGuess)){
		echo "That is not a number" . PHP_EOL;
		continue;
	}

	$attempts += 1;

	if ($userGuess > $a) {
		echo "Guess lower ". PHP_EOL;

	} 
	if ($userGuess < $a) {
		echo "Guess higher " . PHP_EOL;

	}
	if ($userGuess == $a) {
		echo " Good guess, YOU WON! Number of tries: " . $attempts . PHP_EOL;
	}
		
} while ($userGuess != $a);



var_dump($argc);
var_dump($argv);


