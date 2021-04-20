$(document).ready(function(){

 $(function() {
        $('#nav-icon3').click(function() {
            $(this).toggleClass('open');
        });
    });


 $(function (){

  $(".slider_develop_directions").slick({
    slidesToShow: 1,
    //prevArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
    //nextArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
    dots: true,
    pauseOnHover: false,
    fade:true,
    autoplaySpeed: 10000,
    appendDots: $(".slide-m-dots_develop"),
    nextArrow: $(".slick-next_develop"),
    prevArrow: $(".slick-prev_develop"),
   });

 });

   $(".slider_meet").slick({
    slidesToShow:1,
    prevArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
    nextArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
    dots: true,
    fade:true,
    autoplay: true,
    autoplaySpeed: 10000,
    appendDots: $(".slide-m-dots_meet"),
    prevArrow: $(".slick-prev_meet"),
    nextArrow: $(".slick-next_meet")
   });
   $(".slider_reviews").slick({
    slidesToShow:1,
    prevArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
    nextArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
    dots: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 10000,
    appendDots: $(".slide-m-dots_reviews"),
    prevArrow: $(".slick-prev_reviews"),
    nextArrow: $(".slick-next_reviews")
   });
   $(".slider_news").slick({
    slidesToShow:2,
    prevArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
    nextArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
    dots: true,
    autoplay: true,
    autoplaySpeed: 10000,
    appendDots: $(".slide-m-dots_news"),
    prevArrow: $(".slick-prev_news"),
    nextArrow: $(".slick-next_news"),
     responsive: [
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true
      }
    }
  ]
   });
   $(".slider_our_clients").slick({
    speed:5000,
    slidesToShow:6,
    centerMode: true,
	infinite:true,
     cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 0,
      rtl: true,
    centerMargin: '40px',
    responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
   });

  $('.slider_out_team').slick({
      slidesToShow:3,
      dots: true,
      appendDots: $(".dots-team"),
      prevArrow: $(".team-next"),
      nextArrow: $(".team-prev"),
       responsive: [
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
    }
     }

  ]
   });

   // $('.style_bg').parallax();
   // $(".our_developments").waypoint(function() {
   //    $(".header_mobile_section").toggleClass('active');

   // });
   $(".our_developments").waypoint(function() {
      $(".header_top_menu").toggleClass('active');

   });
   $(window).scroll(function() {
    var height = $(window).scrollTop();
     /*Если сделали скролл на 100px задаём новый класс для header*/
    if(height > 300){
    $('.header_top_menu.inner').addClass('active');
    } else{
    /*Если меньше 100px удаляем класс для header*/
    $('.header_top_menu.inner').removeClass('active');
    }
    });

// main form
   $(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });

});

$(function() {
        $('#nav-icon3').click(function() {
            $(".header-section_wrap,.agancy_nav_mnu,body").toggleClass('open');
        });
    });

jQuery('#nav-icon3').on('click', function(e) {
    jQuery(".menu_list ul li").toggleClass("show-me");   
    });
   
$(document).ready(function() {
          $('.curtain,.curtain-transparent').addClass('transition');
          setTimeout(function(){

            $('.curtain,.curtain-transparent').hide();
          },1300);
     

         
      });
        $(document).ready(function() {
            var curtain = $(".curtain");
            $(document).on("click", "a:not([data-fancybox]):not([data-b24-crm-button-widget-blank]):not([target='_blank']):not([href^='#']):not([href^='tel']):not([href^='mailto']):not([href^='javascript:;'])", function(e) {
                e.preventDefault();
                $('.curtain,.curtain-transparent').show();
                $('.curtain,.curtain-transparent').removeClass('transition');
                var self = this;
                setTimeout(function() {
                    window.location.href = $(self).attr("href");
                }, 1000);
            });
        });
          
$('.header-section_wrap').each(function(){
  var slider = $(this).find('.slick-main-carousel');

    slider.on('init reInit afterChange', function(){
      var timer = $('.main-slider-timer').clone().removeClass('animation');
        $('.main-slider-timer').remove();
        $('.main-slider-nav').append(timer);
        $('.main-slider-timer').addClass('animation');
    });

  slider.slick({
    
    infinite: true,
    autoplay:false,
    autoplaySpeed:5000,
    lazyLoad: 'progressive',
    pauseOnFocus:false,
    pauseOnHover:false,
    slidesToShow: 1,
    appendDots: $(".slide-m-dots"),
      nextArrow: $(".slick-next"),
      prevArrow: $(".slick-prev"),
    // prevArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
    // nextArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
    dots: true
  }).slickAnimation();
  });



$('.slick-prev').click(function(e){
      e.preventDefault();
      slider.slick('slickPrev');
    });

    $('.slick-next').click(function(e){
      e.preventDefault();
      slider.slick('slickNext');
    });

});


 $(document).ready(function() {
  var scene = document.getElementById('scene');
  if (scene) {
      var parallaxInstance = new Parallax(scene);
  }
});

 $(document).ready(function() { 
    $(".slider_advertising").slick({
      slidesToShow:1,
      prevArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
      nextArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
      dots: true,
      autoplaySpeed: 10000,
    fade:true,
    appendDots: $(".slide-m-dots_develop"),
    prevArrow: $(".slick-prev_develop"),
    nextArrow: $(".slick-next_develop")
  });

});
 $(document).ready(function() { 
    $(".slider_advertising_seo").slick({
      slidesToShow:1,
      prevArrow: '<button type="button" class="slick-prev"><span class="arrow"><span></span><span></span></span></button>',
      nextArrow: '<button type="button" class="slick-next"><span class="arrow"><span></span><span></span></span></button>',
      dots: true,
      autoplay: true,
    autoplaySpeed: 10000,
    fade:true,
    appendDots: $(".slide-m-dots_develop"),
    prevArrow: $(".slick-prev_develop"),
    nextArrow: $(".slick-next_develop")
  });



 $('.card').hover(function() {
            $('.top_line_button').stop().addClass('active');
        }, function() {
            $('.top_line_button').stop().removeClass('active');
});
	
 });     

 

$(document).ready(function(){
    $(window).scroll(function() {
  var height = $(window).scrollTop();

       /*���� ������� ������ �� 100px ����� ����� ����� ��� header*/
  if(height >900){
  $('body').addClass('to-top');
  } else{
       /*���� ������ 100px ������� ����� ��� header*/
  $('body').removeClass('to-top');
  }

  });

});
  $(document).ready(function(){
    $(window).scroll(function() {
  var height = $(window).scrollTop();

       
  if(height >300){
  $('.agancy_nav_mnu').addClass('fixed');
  } else{
      
  $('.agancy_nav_mnu').removeClass('fixed');
  }

  });

});
$(document).ready(function(){
    $(window).scroll(function() {
  var height = $(window).scrollTop();

       /*���� ������� ������ �� 100px ����� ����� ����� ��� header*/
  if(height >110){
  $('body').addClass('fixed');
  } else{
  $('body').removeClass('fixed');
  }

  });

});
$(document).ready(function(){

    $('.btn-circle')
    .on('mouseenter', function(e) {
      var parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('span').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
      var parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('span').css({top:relY, left:relX})
    });
  

});
   

$(document).ready(function(){

    $('.block_photo')
    .on('mouseenter', function(e) {
      var parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('.overlay').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
      var parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('.overlay').css({top:relY, left:relX})
    });

$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length,
        top_name = '';
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    for (var i = 0; i < numberOfOptions; i++) {
        if ($this.children('option').eq(i)[0].selected==true){
            top_name =  $this.children('option').eq(i).text();
        }
    }
    if (top_name){
        $styledSelect.text(top_name);
    }else{
        $styledSelect.text($this.children('option').eq(0).text());
    }
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        if ($this.children('option').eq(i)[0].selected==true){
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
    }
    
    for (var i = 0; i < numberOfOptions; i++) {
        if ($this.children('option').eq(i)[0].selected==false){
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
  
    function checkedOption(){
       $('.checkbox').each(function(){
        if ($(this).prop('checked') == false){
            $(this).closest('form').find('[type="submit"]').addClass('disabled');
            return;
        }
        $(this).closest('form').find('[type="submit"]').removeClass('disabled');
    });
    
    }
    checkedOption();
    
    $('.checkbox').click(function(){
        checkedOption();
    });

    // submitBtns.prop("input:",true);
    //  function enableBtnReview(){
    //     $('.btn-true').prop("disabled",false);
    // }

});

$(document).on('click', '#to_top', function() {
    var time = $(this).offset().top/3;
    browser = navigator.userAgent.toLowerCase();
    if (browser.indexOf('opera') > 0) $('html').animate({scrollTop: 0}, time);
    else $('html,body').animate({scrollTop: 0}, time);  
  });


(function($){       
      $('.chooseFileRed').bind('change',function(){ 
        var filename = $(this).val();          
          $(".text-file").text(filename.replace("C:\\fakepath\\", ""));
      });
      $('.chooseFile').bind('change',function(){ 
        var filename = $(this).val();          
          $(".text-file-req").text(filename.replace("C:\\fakepath\\", ""));
      });
       $('.chooseFilejob').bind('change',function(){ 
        var filename = $(this).val();          
          $(".text-file-job").text(filename.replace("C:\\fakepath\\", ""));
      });
       $('.chooseFileRev').bind('change',function(){ 
        var filename = $(this).val();          
          $(".text-file-rev").text(filename.replace("C:\\fakepath\\", ""));
      });
  })(jQuery)


  $(window).scroll(function(){
  var $initSlideAutoplay = $('.slider_develop_directions');
  if ($(this).scrollTop() > 300 ){  
      $('.slider_develop_directions').slick('slickPlay');
  }
  else{
    $('.slider_develop_directions').slick('slickPause');
  } 
});