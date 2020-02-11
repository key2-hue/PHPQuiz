<?php

namespace Myquiz;

class Quiz {
  private $goodQuiz = array();

  public function goodQuiz() {
    $goodQuiz = array(
      'Q' => '日本の首都は?',
      'A' => array("東京","大阪","福岡")
    );
    $goodQuiz = array(
      'Q' =>'世界一高い建物は?',
      'A' => array("ブルジュハリファ","エンパイアステートビル","東京スカイツリー")
    );
    $goodQuiz = array(
      'Q' =>'世界で最も話されている言語は?',
      'A' => array("中国語","英語","フランス語")
    );
  }
}