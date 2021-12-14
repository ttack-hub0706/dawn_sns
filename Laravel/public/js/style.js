
$( '.arrow' ).click( function()
{
  $(this).toggleClass('arrow_active');
  if ($(this).hasClass('arrow_active')) {
      $(this).addClass('arrow_active');
    } else {
      $(this).removeClass('active');
  }
  $('#syncer-acdn').addClass('active');
	// [data-target]の属性値を代入する
	var target = $( this ).data( 'target' ) ;
	// [target]と同じ名前のIDを持つ要素に[slideToggle()]を実行する
	$( '#' + target ).slideToggle() ;
});
