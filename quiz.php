<?php

namespace MyQuiz;

class Quiz {

  private $goodQuiz = [];

  public function __construct() {
    $this->someQuiz();
    

    if(!isset($_SESSION['quiz_num'])) {
      $this->startSession();
    }
  }

  private function startSession() {
    $_SESSION['quiz_num'] = 0;
  }

  public function manyQuiz() {
    return $this->goodQuiz[$_SESSION['quiz_num']];
  }


  public function someQuiz() {
    $this->goodQuiz[] = array(
      'a' => '日本の首都は?',
      'b' => ["東京","大阪","福岡"],
      'c' => "東京"
    );
    $this->goodQuiz[] = array(
      'a' =>'世界一高い建物は?',
      'b' => array("ブルジュハリファ","エンパイアステートビル","東京スカイツリー"),
      'c' => "ブルジュハリファ"
    );
    $this->goodQuiz[] = array(
      'a' =>'世界で最も話されている言語は?',
      'b' => array("中国語","英語","フランス語"),
      'c' => "中国語"
    );
  }
}