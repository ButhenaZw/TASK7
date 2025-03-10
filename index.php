<?php
// Task 1
$colors = array('white', 'green', 'red');
echo "Duration: 4 Hour\n";
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . 
    $colors[2] . " carpet, the " . $colors[1] . " lawn, the " . $colors[0] . " house, the leaden sky. " . 
    "The new president and his first lady. - Richard M. Nixon\n";

// Task 
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
//Task 3
$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid"
);
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}

// Task 4
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color) . "<br>";

// Task 5
$numbers = array(1, 2, 3, 4, 5);
array_splice($numbers, 3, 0, "$");
echo implode(" ", $numbers) . "<br>";

// Task6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}

// Task7
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
65, 64, 68, 73, 75, 79, 73);
$avgTemp = array_sum($temps) / count($temps);
sort($temps);
$lowestTemps = array_slice($temps, 0, 7);
$highestTemps = array_slice($temps, -7);
echo "Average Temperature is: $avgTemp<br>";
echo "List of seven lowest temperatures: " . implode(", ", $lowestTemps) . "<br>";
echo "List of seven highest temperatures: " . implode(", ", $highestTemps) . "<br>";

// Task 8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//Task 9
$colors = array("red", "blue", "white", "yellow");
$upperColors = array_map('strtoupper', $colors);
print_r($upperColors);

// Task 10
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowerColors = array_map('strtolower', $colors);
print_r($lowerColors);

// Task11
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$lengths = array_maps s{('strlen', $words);
echo "The shortest arsray length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".<br>";

// Task12
$array1 = array(2, 0, 10, 12, 6);
$filteredArray = array_filter($array1, function($num) {
    return $num != 0;
});
echo min($filteredArray);
?>
