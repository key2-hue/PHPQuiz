<?php
require_once('quiz.php');
$question = $_POST['question'];
$answer = $_POST['answer'];
$currentAnswer = Quiz::currentAnswer() + 1;
if($qusetion == $answer) {
  $result = "正解"; 
} else {
  $result = "不正解";
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>結果</title>
</head>
<body>
  <h2>クイズ結果</h2>
  <p><?php echo $currentAnswer ?>問目:<?php echo $result ?></p>
  <a href="index.php">次の問題に進む</a>
</body>
</html>