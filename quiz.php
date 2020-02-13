<?php

namespace Myquiz;

class Quiz {

  private $goodQuiz = [];

  public function __construct() {
    $this->goodQuiz();
    Good::create();

    if(!isset($_SESSION['quiz_num'])) {
      $this->firstSession();
    }
  }

  private $goodQuiz = array();

  public function goodQuiz() {
    $this->goodQuiz = array(
      'Q' => '日本の首都は?',
      'A' => array("東京","大阪","福岡")
    );
    $this->goodQuiz = array(
      'Q' =>'世界一高い建物は?',
      'A' => array("ブルジュハリファ","エンパイアステートビル","東京スカイツリー")
    );
    $this->goodQuiz = array(
      'Q' =>'世界で最も話されている言語は?',
      'A' => array("中国語","英語","フランス語")
    );
  }
}