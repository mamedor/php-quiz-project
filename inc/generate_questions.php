
<?php
// Generate random questions
$questions =[];
// Loop for required number of questions
for ($i = 0; $i <= 9; $i++) {
// Get random numbers to add
$leftchoice= rand(0,100);
$rightchoice= rand(0,100);
// Calculate correct answer
$Answer = $leftchoice + $rightchoice;
// Get incorrect answers within 10 numbers either way of correct answer
$nicetry= $Answer + rand(1,10);

$tryagain= $Answer + rand(-10,-1);

// Make sure it is a unique answer???
// Add question and answer to questions array
$questions[] = [
    'leftAdder' => $leftchoice,
    'rightAdder' => $rightchoice,
    'correctAnswer' => $Answer,
    'wrongAnswer1' => $nicetry,
    'wrongAnswer2' => $tryagain
];
$answers = [
  $Answer,
  $nicetry,
  $tryagain
];
}