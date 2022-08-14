$(function() {

  $('.p-upload_sample_lists_item_flex_cancel').on('click', function() {
    $('.modal_confirm').fadeIn();
  });

  $('.modal_confirm_back,.modal_confirm_upload_ok').on('click', function() {
    $('.modal_confirm').fadeOut();
  });

});
