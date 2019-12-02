<?php

 /* PHP Techdegree Project 2: Build a Quiz App in PHP
 * * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions

// Keep track of which questions have been asked

// Show which question they are on
// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score
 

session_start();
include ('generate_questions.php');
$question= filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if (empty ($question)){
    $question= 1;
}
if ($question<= 10) {
    // Show random question
// Show which question they are on
// Show random question
    echo "<p class='breadcrumbs'> Question ". $question. " of 10 </p>";
    echo '<form method = "post" action="index.php?p='. ($question+ 1) . '" />';
    echo "<p class='quiz'> What is " . $leftAdder . "+" . $rightAdder . "? </p>";
// Shuffle answer buttons
shuffle($answers);
    echo "<input type='submit' class='btn' name='answer' value=' " . $answers[0] . "'>";
    echo "<input type='submit' class='btn' name='answer' value=' " . $answers[1] . "'>";
    echo "<input type='submit' class='btn' name='answer' value=' " . $answers[2] . "'>";
    echo "<input type='hidden' name='correctAnswer' value='" . $correctAnswer . "'>";
    echo '</form>';
  }

if (!isset($_SESSION['rightanswers'])) {
    $_SESSION['rightanswers'] = 0;
}
if (isset($_POST['answer']) && isset($_POST['correctAnswer'])) {
    $_SESSION['answer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['correctAnswer'] = filter_input(INPUT_POST, 'correctAnswer', FILTER_SANITIZE_NUMBER_INT);
if (($_SESSION['answer'] == $_SESSION['correctAnswer'])) {
    $_SESSION['rightanswers']++;
    echo '<h1>CORRECT! You are a Genius </h1>';
}elseif ($_SESSION['answer'] !== $_SESSION['correctAnswer']){
    echo '<h1>Nice Try ! The correct answer was ' . $_SESSION['correctAnswer'] . '.</h1>';
        }
}
// Show score
if ($question == 11) {
    echo '<h1> You got '. $_SESSION['numberCorrect'] . ' out of 10 correct!</h1>';
    echo "<form action='index.php' method='GET'>";
    echo "<input type='submit' class='btn' name='Math Quiz' value='Try Again?'>";
    session_destroy();
    echo '</form>';
}
 
 