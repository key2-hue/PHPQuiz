<?php

require_once('/config.php');

$quiz = new MyQuiz\Quiz();

try {
  echo $quiz->rightAnswer();
} catch(Exception $e) {
  header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden', true, 403);
  echo $e->getMessage();
  exit;
}

header('Content-Type: application/json; charset=UTF-8');
echo json_encode([
  'correct_answer' => $quiz->rightAnswer()
]);