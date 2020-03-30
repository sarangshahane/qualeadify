

$(document).ready( function() {
    'use strict';
    /*-----------------------------------
    Navbar
    -----------------------------------*/
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
      var $el = $(this);
      var $parent = $(this).offsetParent(".dropdown-menu");
      if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass('show');
      
      $(this).parent("li").toggleClass('show');

      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
        $('.dropdown-menu .show').removeClass("show");
      });
      
      if (!$parent.parent().hasClass('navbar-nav')) {
        $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
      }

      return false;
    });

    if($(window).width() < 992) {
      $(document).on('click', function(event) {
        var clickover = $(event.target);
        var _opened = $('#navbarSupportedContent').hasClass('show');
        if(_opened === true && !(clickover.is('.navbar-nav li, .navbar-nav .dropdown *'))) {
          $('button.navbar-toggler').trigger('click');
        }
      });
    }

    /*-----------------------------------
    Back to Top
    -----------------------------------*/
    $('.backtotop').on('click', function() {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    })


    $(".navbar-nav li a").click(function() {
      var menu = $(this),
          href = menu.attr('scrool-to');
        $('html, body').animate({
            scrollTop: $('#'+href).offset().top
        }, 2000);
    });

    $(".link").click(function() {
        $('html, body').animate({
            scrollTop: $('#contact').offset().top
        }, 2000);
    });

    $(".banner-content a").click(function() {
        $('html, body').animate({
            scrollTop: $('#who-we-are').offset().top
        }, 2000);
    });

    /*-----------------------------------
    CountTo 
    -----------------------------------*/
    function animateCountTo(ct) {
      if ($.fn.visible && $(ct).visible() && !$(ct).hasClass('animated')) {
        $(ct).countTo({
          speed: 1000,
          refreshInterval: 1
        });
        $(ct).addClass('animated');
      }
    }

    function initCountTo() {
      var counter = $('.count');
      counter.each(function () {
        animateCountTo(this);
      });
    }

    initCountTo();
    
    /*-------------------------------------
      Plyr Js  
    -------------------------------------*/
    plyr.setup();

    /*-------------------------------------
    owlCarousel
    -------------------------------------*/
    $('.banner-slider').owlCarousel({
      loop:true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplaySpeed: 1000,
      margin:0,
      dots: false,
      nav:true,
      navText: ['<span class="ti-angle-left"></span>','<span class="ti-angle-right"></span>'],
      responsive:{
        0:{
          items:1
        }
      }
    })

    $('.post-slider').owlCarousel({
      loop:true,
      autoplay: false,
      margin:0,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      dots: false,
      nav:true,
      navText: ['<span class="ti-angle-left"></span>','<span class="ti-angle-right"></span>'],
      responsive:{
        0:{
          items:1
        }
      }
    })

    $('.portfolio-details-slider').owlCarousel({
      loop:true,
      autoplay: true,
      margin:0,
      dots: true,
      nav:false,
      responsive:{
        0:{
          items:1
        }
      }
    })

    $('.post-details-slider').owlCarousel({
      loop:true,
      autoplay: false,
      margin:0,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      dots: false,
      nav:true,
      navText: ['<span class="ti-angle-left"></span>','<span class="ti-angle-right"></span>'],
      responsive:{
        0:{
          items:1
        }
      }
    })
    


    /*-------------------------------------
    Isotope
    -------------------------------------*/
    // init Isotope
    var $grid = $('.iso-gallery').isotope({
      // options...
      itemSelector: '.iso-gallery>div',
      masonry: {
        columnWidth: 0
      }
    });
    // layout Isotope after each image loads
    $grid.imagesLoaded().progress(function () {
      $grid.isotope('layout');
    });

    $('#iso-nav .btn').on('click', function () {
      $('#iso-nav .btn-filter').removeClass('active');
      $(this).addClass('active');

      var selector = $(this).attr('data-filter');
      $('.iso-gallery').isotope({
          filter: selector
      });
      return false;
    });

    /*-----------------------------------
    Subscription
    -----------------------------------*/
    $(".subscribtion-form").ajaxChimp({
      callback: mailchimpResponse,
      url: "http://codepassenger.us10.list-manage.com/subscribe/post?u=6b2e008d85f125cf2eb2b40e9&id=6083876991" // Replace your mailchimp post url inside double quote "".  
    });

    function mailchimpResponse(resp) {
      if (resp.result === 'success') {
        $('.newsletter-success').html(resp.msg).fadeIn().delay(3000).fadeOut();
      } else if (resp.result === 'error') {
        $('.newsletter-error').html(resp.msg).fadeIn().delay(3000).fadeOut();
      }
    }


    /*-------------------------------------
    Window Scroll
    -------------------------------------*/
    $(window).on('scroll', function () {
      initCountTo();
    });
})


$(window).on('scroll', function () {
  $('.testimonial').owlCarousel({
    loop:true,
    autoplay: false,
    margin:0,
    dots: false,
    nav:true,
    navText: ['<span class="ti-arrow-left"></span>','<span class="ti-arrow-right"></span>'],
    responsive:{
      0:{
        items:1
      }
    }
  })

  $('.case-study-slider').owlCarousel({
    loop:true,
    autoplay: false,
    margin: 10,
    dots: true,
    nav:true,
    navText: ['<span class="ti-arrow-left"></span>','<span class="ti-arrow-right"></span>'],
    responsive:{
      0:{
          items:1
      },
      575:{
          items:2
      },
      768:{
          items:3
      },
      1200:{
          items:4
      }
    }
  })
});

// ------------------------- Ajax Request for contact form -----------------------------
// Variable to hold request
var request;

// Bind to the submit event of our form
$("#quick_contact").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "post-contact.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log(response);
        $('#quick_contact_btn').text(response);
        setTimeout(function(){ 
          document.getElementById("quick_contact").reset();  
          $('#quick_contact_btn').html("Submit <i class='fab fa-telegram-plane'></i>");
        }, 3000);
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
      // Log the error to the console
      console.error(
          "The following error occurred: "+
          textStatus, errorThrown
      );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});
// ------------------------- Ajax Request for contact form -----------------------------



// ------------------------- Validate footer contact form -----------------------------
function validate(){
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      // First Name
      if(document.contact_form.f_name.value=='')
       {
         document.getElementById("newsletter-error").innerHTML= "<i class='fas fa-exclamation-triangle'></i> Please Enter Your First Name";
          document.contact_form.f_name.focus();
          jQuery(document).ready(function($) {
            $(document).ready(function() {
              $('#f_name').css('border-color','red');
            });
          });
         return false;
       }

     // Last Name
     if(document.contact_form.l_name.value=='')
       {
         document.getElementById("newsletter-error").innerHTML= "<i class='fas fa-exclamation-triangle'></i> Please Enter Your Last Name";
          document.contact_form.l_name.focus();
          jQuery(document).ready(function($) {
            $(document).ready(function() {
              $('#l_name').css('border-color','red');
            });
          });
         return false;
       }
     
     // Email
     if(document.contact_form.email.value=='')
       {
         document.getElementById("newsletter-error").innerHTML= "<i class='fas fa-exclamation-triangle'></i> Please Enter Your email";
          document.contact_form.email.focus();
          jQuery(document).ready(function($) {
            $(document).ready(function() {
              $('#email').css('border-color','red');
            });
          });
         return false;
       }
     if(document.contact_form.email.value.match(mailformat))
       {
         var email = document.contact_form.email.value;
         var domain = email.substring(email.lastIndexOf("@") +1);
         if(domain == 'mail.ru')
           {
             //alert("You are a bot. Stay away");
              document.getElementById("newsletter-error").innerHTML= "<i class='fas fa-exclamation-triangle'></i> You are a bot. Stay away";
              document.contact_form.email.focus();
             return false;
           }
       
       }
        
        // Mobile Number Validation
        if(document.contact_form.contact_no.value=='')
        {
          document.getElementById("newsletter-error").innerHTML= "<i class='fas fa-exclamation-triangle'></i> Please Enter Mobile No.";
            jQuery(document).ready(function($) {
              $(document).ready(function() {
                $('#contact_no').css('border-color','red');
              });
            });
            document.contact_form.contact_no.focus() ;
          return false;
        }else if(isNaN( document.contact_form.contact_no.value ))
          {
            document.getElementById("newsletter-error").innerHTML = "<i class='fas fa-exclamation-triangle'></i> Please Enter Valid Mobile No.";
            jQuery(document).ready(function($) {
              $(document).ready(function() {
                $('#contact_no').css('border-color','red');
              });
            });
            document.contact_form.contact_no.focus() ;
            return false;
          }
    
          var a =document.contact_form.contact_no.value;
          if(a.length <=9 || a.length > 10)
          {
            document.getElementById("newsletter-error").innerHTML = "<i class='fas fa-exclamation-triangle'></i> Number must be of ten digit";
            jQuery(document).ready(function($) {
              $(document).ready(function() {
                $('#contact_no').css('border-color','red');
              });
            });
            document.contact_form.contact_no.focus() ;
            return false;
          }
        
        // Message
        if(document.contact_form.message.value=='')
       {
            document.getElementById("newsletter-error").innerHTML= "<i class='fas fa-exclamation-triangle'></i> Please Enter Your Message";
            document.contact_form.message.focus();
            jQuery(document).ready(function($) {
              $(document).ready(function() {
                $('#message').css('border-color','red');
              });
            });
            return false;
       }
}

// ------------------------- Validate footer contact form -----------------------------
