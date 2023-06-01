<?php
$day = "Thursday";
echo "Hello, World. Today is $day";

echo "<a href='https://ttcma.azurewebsites.net/'>Click here</a> to visit our group project";


// Decisions
$max_characters = 15;

if ($max_characters < 15) {
    echo "Password two short.";
} else {
    echo "Good password";
}

// Repetition
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

$counter = 1;
while ($counter <= 5) {
    echo "Number: $counter<br>";
    $counter++;
}

$colours = array("Pink", "Red", "Orange");
foreach ($colours as $colour) {
    echo "$colour<br>";
}

//Functions
function greet($name) {
    echo "Hello, $name!";}

greet("Heshan");

