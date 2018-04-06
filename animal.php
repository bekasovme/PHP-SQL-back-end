<?php

$countinents = array(
	'africa' => array('macaca sylvanus', 'panthera pardus', 'felis margarita'),
	'eurasia' => array('capra', 'meleseles meles', 'tarsius'),
	'north america' => array('rangifer tarandus', 'lynx rufus', 'canis latrans'),
	'south america' => array('vicugna vicugna', 'hydrochoerus hydrochaeris', 'panthera onca'),
	'australia' => array('canis lupus dingo',	'macropodidae', 'raphus cucullatus'),
	'antarctica' => array('ursus maritimus', 'aptenodytes patagonicus', 'nyctea scandiaca')
);

$result = [];
foreach ($countinents as $animals)
{
	$result = array_merge($result, array_filter($animals, function ($item){ return count(explode(' ', $item)) === 2; }) );
}


$animal1 = $animal2 = [];
    
    foreach($result as $value)
        list($animal1[], $animal2[]) = explode(' ', $value);
    
    shuffle($animal1);
    
    foreach($animal1 as $key=>$animal)
    		// echo '<pre>';
        echo "{$animal} {$animal2[$key]}" . PHP_EOL, '<br>';