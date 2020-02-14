$(function(){
  'use strict';
  console.log('Aaa');
  $('input[name="question"]').change(function(){
    let result = $(this).val();
    console.log(result);
    if(result !== "") {
      $('.submit').attr('disabled',false);
    }
    $.post('/choice.php', {
      result: result
    }).done(function(ans){
      $('.choice').text("あなたの選んでいる回答:" + ans);
    });
});
});