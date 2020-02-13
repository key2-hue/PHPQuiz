<?php
  require_once("quiz.php");
  require_once('config.php');
  $quiz = new MyQuiz\Quiz();

  $answer = $quiz->manyQuiz();
  shuffle($answer['b']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>クイズ</title>
</head>
<body>
  <h2><?php echo h($answer['a']); ?></h2>
  <form action="answer.php" method="post">
    <?php foreach($answer['b'] as $a): ?>
      <input type="radio" name="question" value="<?php echo $a ?>">
      <?php echo $a ?>
      <input type="hidden" name="answer" value="<?php echo $answer ?>">
    <?php endforeach; ?>
    <input type="submit" value="回答する">
  </form>
</body>
</html>