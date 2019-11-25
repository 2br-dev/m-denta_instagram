 $(document).ready(function() {
   	// анимации для десктоп версий
   	if($(window).width() >= 1024){
  		new WOW().init();
	}
    // SLICK
     $('.gallery-license').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         dots: true,
         arrows: true,
     });
     $('.gallery-photos').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         dots: true,
         arrows: true,
         fade: true,
         CSSease: 'linear',
         speed: 1000
     });

     // Фотогаларея
     $('.container-docs-preview').hide();
     $('.container-gallery-preview').hide();

     $(".container-gallery a, .gallery-link").click(function() {
         $('.container-gallery-preview').show();
         $('.container-docs-preview').hide();
         $('#gallery-header').text('Клиника в фотографиях');

     });
     $(".container-docs a, .docs-link").click(function() {
         $('.container-docs-preview').show();
         $('.container-gallery-preview').hide();
         $('#gallery-header').text('Документы');
     });

     // Цены
     $(".link.centre").click(function() {
         let id = this.id.slice(0, -1);
         $("#" + id).slideToggle();
     });

     $('.link.centre').toggle(function() {
         $(this).text('↑ свернуть ↑');
     }, function() {
         $(this).text('↓ развернуть ↓');
     });

     $(".centre.btn").click(function() {
         let id = this.id.slice(0, -1);
         $("#" + id).slideToggle();
     });
  
     // MASK
     $("#phone1, #phone2, #phone3, #submit-modal, #phone").mask("+7 (999) 999-99-99");

     // при клике открывает modal с формой
     $(".header-contacts-phone-desc").click(function() {
      $('.modal-first-touch').show();
      $('.modal-wrapper').show();
     });

     $('.feedback__form a').on('click', function(){
         $('.show').each(function(){
             $(this).removeClass('show');
         });
         $('.modal__wrapper').addClass('show_modal');
         $('.appointment').addClass('show');
     });
     $('.appointment__close').on('click', function(){
         $('.modal__wrapper').removeClass('show_modal');
         $('.show').each(function(){
             $(this).removeClass('show');
         });
     });
     $('body').on('focus', '.input__error', function(){
         $(this).removeClass('input__error');
     });

     // кнопочки, закрывающие modal окна
     $(".modal-wrapper, .modal-close").click(function() {
      $('.modal-first-touch').hide();
      $('.modal-wrapper').hide();
      $('.modal-reaction').hide();
      $('.hamburger-slide').slideToggle();
     });
    
     // закрывает окошки при нажатии ESC
     jQuery(document).on('keyup',function(evt) {
      if (evt.keyCode == 27) {
          $('.modal__wrapper').removeClass('show_modal');
      }
     });

    $(".appointment__buttons a").on('click', function(e){
      e.preventDefault();

      var data = {
        name: $('#name').val(),
        phone: $('#phone').val(),
        comment: $('#comment').val()
      };
      $.ajax({
          type: "POST",
          url: "/ajax/sendmessage",
          data: data,
          dataType: "JSON",
          success: function(res){
            if(res.success == 1){
                $('.appointment').removeClass('show');
                $('.success').addClass('show');
            }
            if(res.error.name){
                $('#name').addClass('input__error');
            }
            if(res.error.phone){
                $('#phone').addClass('input__error');
            }

          },
          error: function(err) {
            console.log(err);
          }
      });
    });

    /// плавный скроллинг
    var $page = $('html, body');
    $('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
    });

     $(window).scroll(function(){
         var sticky = $('header'),
             scroll = $(window).scrollTop();

         if (scroll >= 100) sticky.addClass('fixed');
         else sticky.removeClass('fixed');
     });

    //BURGER
    $('.menu').click(function() {
      if($(this).is('.active:not(.back)')) {
         $(this).addClass('back');
      } else if ($(this).is('.back')) {
        $(this).removeClass('back');
      } else {
        $(this).addClass('active');
      }
        $('.modal-wrapper').toggle();
        $('.hamburger-slide').slideToggle();
        $('.menu .bar:last-child').show();
    });

     //access_token=2710023971.975393b.27d30fbe0027442789bae7407bb25550
     $.ajax({
         url: 'https://api.instagram.com/v1/users/2710023971/', // если ваше приложение прошло аппрув, вместо self можете указать ID пользователя
         dataType: 'jsonp',
         type: 'GET',
         data: {access_token: '2710023971.975393b.27d30fbe0027442789bae7407bb25550'},
         success: function(response){
             $('#insta_count').text(response.data.counts.followed_by); // количество подписчиков
             // $('#insta_count').text(response.data.counts.follows); // количество подписок
             // $('#insta_count').text(response.data.counts.media); // количество фото и видео в аккаунте
         }
     });

    $('.header_menu').on('click', function(){
        $('.main-menu__wrapper').addClass('main-menu__show');
    });

     $('.main-menu__close').on('click', function(){
         $('.main-menu__wrapper').removeClass('main-menu__show');
     });

     $('.footer-contacts a').on('click' ,function () {
         $('.footer-contacts__wrapper').toggleClass('footer-contacts__show');
     })

     $('.footer-contacts__close').on('click', function(){
         $('.footer-contacts__wrapper').removeClass('footer-contacts__show');
     });
     $('.works-item__title').on('click', function(){
        let id = $(this).data('id');
        $(this).toggleClass('close');
        $('#'+id+'').toggleClass('close');
         $('#'+id+'').slideToggle();
     });

 });

 /**
  * Показ прелоадера
  */
 $(window).load(function(){
    setTimeout(function(){
        $('.loader').removeClass('loader_show');
        $('.loader img').detach();
    }, 800)

});

if($(window).width() >= 1200){
  while( $('.ourworks-container a').length % 3 != 0) {
      $('.ourworks-container a:last-child').clone().css({'opacity':'0', 'pointer-	events':'none'}).appendTo('.ourworks-container');
  }
}
if($(window).width() >= 800 && $(window).width() < 1200){
  while( $('.ourworks-container a').length % 2 != 0) {
      $('.ourworks-container a:last-child').clone().css({'opacity':'0', 'pointer-	events':'none'}).appendTo('.ourworks-container');
  }
}

$('.workresults-image a').simpleLightbox({ alertError: false });
