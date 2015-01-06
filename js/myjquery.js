$(document).ready(function() {
  /*
  REUSABLE FUNCTIONS 
  */

  //Ajax function. Add element and ajaxed content url
  var ajaxloader = function(element, myurl) {
    var overlay = $('.loading-overlay');
    overlay.hide();
    element.click(function(){
      $.ajax({
        type: 'GET',
        url: myurl,
        success: function(resp) {
          $('#loop-flop').load(myurl);
          overlay.hide();
        },
        beforeSend : function(){
          overlay.show();
        },
        error: function() {
          $('.loading-container').html('<p>oh noes</p>');
        }
      });
    });
  };
  /*
  INITIALIZED FUNCITONS
  */

  //initialize ajax request
  var ajaxing = function(){
    var designurl = 'http://localhost:8888/wp-content/themes/POP/loop-design.php',
      developmenturl = 'http://localhost:8888/wp-content/themes/POP/loop-development.php',
      illustrationurl = 'http://localhost:8888/wp-content/themes/POP/loop-illustration.php',
      allurl = 'http://localhost:8888/wp-content/themes/POP/loop-all.php',

      loopdesign = $('#loop-design'),
      loopdevelopment = $('#loop-development'),
      loopillustration = $('#loop-illustration'),
      loopall = $('#loop-all');

    ajaxloader(loopdesign, designurl);
    ajaxloader(loopdevelopment, developmenturl);
    ajaxloader(loopillustration, illustrationurl);
    ajaxloader(loopall, allurl);
  }();

  //Toggles Hamurger Menu
  //Toggles hiding / showing micronav
  var hamburgerToggler = function(){
    var hc = $('.hamburger-container'),
        hm =  $('.hamburger-menu'),
        ov = $('.overlay'),
        mn = $('.micronav'),
        mna = $('.micronav, .name-micronav');

    hm.click(function(){
      if(hc.hasClass('toggler')) {
        hc.removeClass('toggler');
        mn.removeClass('weirdness');
        ov.addClass('onbitch');
      } else {
        hc.addClass('toggler');
        mn.addClass('weirdness');
        ov.addClass('onbitch');
      }
    });
    ov.click(function(){
      hc.removeClass('toggler');
      mn.removeClass('weirdness');
      ov.removeClass('onbitch');
    });

    $('.page-wrap').scroll(function(){
      var lastScrollTop = 0,
          ct = $(this).scrollTop();
      if (ct <= this.lastScrollTop){
        mna.removeClass('scrollnav');
      } else {
        mna.addClass('scrollnav');
      }
      this.lastScrollTop = ct;
    });
  }();

  /*fixed body content becomes relative to header */

  var popoutnav = function() {
    var nav = $('nav');
    var page = $('.page-wrap');

    nav.hover(function () {
      page.addClass('page-wrap-expand', 1000);
    }, function () {
      page.removeClass('page-wrap-expand', 1000);
    });
    
    nav.hover(function(){
       $('.header-logo').addClass('animated', 1000);
    }, function(){
       $('.header-logo').removeClass('animated', 1000);
    });
     
    nav.hover(function(){
      $('.social-nav span').addClass('ease', 1000);
    }, function(){
      $('.social-nav span').removeClass('ease', 1000);
    });
   
    nav.hover(function(){
      $('.main-nav span').addClass('ease', 1000);
    }, function(){
      $('.main-nav span').removeClass('ease', 1000);
    });
    
    nav.hover(function(){
      $('.name').addClass('fall', 1000);
    }, function(){
      $('.name').removeClass('fall', 1000);
    });
  }();
  //recipe check box (uses [cb] shortcodeq)
  var checkbox = function(){
    check = $('.checkbox');
    check.click(function(){
      $(this).toggleClass('checkbox is-checked');
    });
  }();
  
})(jQuery);


