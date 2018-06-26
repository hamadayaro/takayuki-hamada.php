checkWidth = function(){
    // ブラウザの横幅を取得
    var browserWidth = $(window).width();
    // ボックスの横幅を取得
    var boxW = $(".bd").width();
    // 左端から離す距離pxを計算
    var plusPxW = ((browserWidth - boxW)/2);
    // CSSで追加
    $('.bd').css({'left': plusPxW + "px"});
};
checkHeight = function(){
    var browserHeight = $(window).height();

    // ボックスの縦幅を取得
    var boxH = $(".bd").height();

    // 上端から離す距離pxを計算
    var plusPxH = ((browserHeight - boxH)/2);

    // CSSで追加
    $('.bd').css({'top': plusPxH + "px"});
};

$(function(){
  var $header = $('#top-head');
  // Nav Fixed
  $(window).scroll(function() {
      if ($(window).scrollTop() > 350) {
          $header.addClass('fixed');
      } else {
          $header.removeClass('fixed');
      }
  });
  // Nav Toggle Button
  $('#nav-toggle').click(function(){
      $header.toggleClass('open');
  });
  // http://wataame.sumomo.ne.jp/archives/6458


  // boxをアクティブにする
    $('.box').addClass('active').height($(window).innerHeight());
    $('.box_works').addClass('active').height($(window).innerHeight());
 // .bdを中央に持ってくる
    checkWidth();
    checkHeight();
    $(window).resize(checkWidth);
    $(window).resize(checkHeight);
});
