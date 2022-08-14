$(function() {

  $('.p-edit_main_sample_lists').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    autoplay: false,
    arrow: true,
    swipeToSlide: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>'
  });

  $('.p-edit_side_add_choice_can_btn').on('click', function() {
    $(this).parent().children().removeClass('on');
    $(this).addClass('on');
  });

  $('.modal_confirm_main_inner_cancel').on('click', function() {
    $('.modal_confirm').fadeOut();
  });

  $('.p-edit_main_movie_addsample_btn').on('click', function() {
    $('.modal_confirm_main_inner_sample,.modal_confirm_main_inner_explain').hide();
    $('.modal_confirm_main_inner_sample').show();
    $('.modal_confirm').fadeIn();
  });

  $('.p-edit_side_add_choice_title_question').on('click', function() {
    $('.modal_confirm_main_inner_sample,.modal_confirm_main_inner_explain').hide();
    $('.modal_confirm_main_inner_explain').show();
    $('.modal_confirm').fadeIn();
  });

});
