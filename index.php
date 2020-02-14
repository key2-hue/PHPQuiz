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
      <input type="radio" name="question" value="<?php echo $a ?>" class="radio">
      <?php echo $a ?>
      <input type="hidden" name="answer" value="<?php echo $answer['c'] ?>">
    <?php endforeach; ?>
    <input type="submit" value="回答する" class="submit" disabled>
  </form>
  <p class="choice">あなたの選んでいる回答:</p>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="index.js"></script>
</body>
</html>