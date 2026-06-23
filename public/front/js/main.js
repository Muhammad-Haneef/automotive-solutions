/*--------------------------------------------------
Template Name: Venta;
Description: Venta Ecommerce Template;
Template URI:Venta.pk;
Author Name:Web key solution;
Author URI:;
Version: 1.0;

NOTE: main.js, All custom script and plugin activation script in this file. 

    
================================================*/
 $('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
    $('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
  },300);
});

/*================= 
    Main Menu
=====================*/


$(document).ready(function(){

  const levels = [1, 2, 3, 4];
  let currentLevel = 1;

  function showLevel(levelToShow) {
    levels.forEach(function (level) {
      const $panel = $('#level' + level);
      if (level === levelToShow) {
        $panel.addClass("show").css("transform", "translateX(0)");
      } else if (level < levelToShow) {
        $panel.removeClass("show").css("transform", "translateX(-100%)");
      } else {
        $panel.removeClass("show").css("transform", "translateX(100%)");
      }
    });
    currentLevel = levelToShow;
  }

  $('#openSidebarBtn').on('click', function () {
    $('#sidebar').addClass("show");
    $('#overlay').show();
    showLevel(1);
  });

  function closeSidebar() {
    $('#sidebar').removeClass("show");
    $('#overlay').hide();
    showLevel(1);
  }

  $('#closeSidebarBtn, #overlay').on('click', closeSidebar);

  $('.category-item[data-next-level]').on('click', function () {
    const nextLevel = parseInt($(this).data('next-level'), 10);
    showLevel(nextLevel);
  });

  $('.back-btn').on('click', function () {
    const level = parseInt($(this).data('current-level'), 10);
    showLevel(level - 1);
  });









    "use Strict";
    /*--------------------------
    1. Newsletter Popup
    ---------------------------*/
    setTimeout(function () {
        $('.popup_wrapper').css({
            "opacity": "1",
            "visibility": "visible"
        });
        $('.popup_off').on('click', function () {
            $(".popup_wrapper").fadeOut(500);
        })
    },700000);

    /*----------------------------
    2. Mobile Menu Activation
    -----------------------------*/
    // jQuery('.mobile-menu nav').meanmenu({
    //     meanScreenWidth: "991",
    // });

    /*----------------------------
    3. Tooltip Activation
    ------------------------------ */
    $('.pro-actions a,.quick_view').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });

    /*----------------------------
    4.1 Vertical-Menu Activation
    -----------------------------*/
    // $('.categorie-title,.mobile-categorei-menu').on('click', function () {
    //     $('.vertical-nav,.mobile-categorei-menu-list').slideToggle();
    // });

    /*------------------------------
     4.2 Category menu Activation
    ------------------------------*/
    // $('#cate-toggle li.has-sub>a,#cate-mobile-toggle li.has-sub>a,#shop-cate-toggle li.has-sub>a').on('click', function () {
    //     $(this).removeAttr('href');
    //     var element = $(this).parent('li');
    //     if (element.hasClass('open')) {
    //         element.removeClass('open');
    //         element.find('li').removeClass('open');
    //         element.find('ul').slideUp();
    //     } else {
    //         element.addClass('open');
    //         element.children('ul').slideDown();
    //         element.siblings('li').children('ul').slideUp();
    //         element.siblings('li').removeClass('open');
    //         element.siblings('li').find('li').removeClass('open');
    //         element.siblings('li').find('ul').slideUp();
    //     }
    // });
    // $('#cate-toggle>ul>li.has-sub>a').append('<span class="holder"></span>');

    /*----------------------------
    4.3 Checkout Page Activation
    -----------------------------*/
    $('#showlogin').on('click', function () {
        $('#checkout-login').slideToggle();
    });
    $('#showcoupon').on('click', function () {
        $('#checkout_coupon').slideToggle();
    });
    $('#cbox').on('click', function () {
        $('#cbox_info').slideToggle();
    });
    $('#ship-box').on('click', function () {
        $('#ship-box-info').slideToggle();
    });



    /*----------------------------------------------------
    6. Hot Deal Product Activation
    -----------------------------------------------------*/
    $('.hot-deal').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        margin: 10,
        responsive: {
            0: {
                items: 2,
                autoplay: true,
                nav: false,
                smartSpeed: 500
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    })


    /*----------------------------------------------------
    7. Brand Banner Activation
    -----------------------------------------------------*/
    $('.brand-banner').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        dots: false,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        smartSpeed: 1200,
        margin: 0,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            380: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    $('.brand-banner-sidebar').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        dots: false,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        smartSpeed: 1200,
        margin: 0,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            380: {
                items: 2
            },
            768: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
    
    /*----------------------------------------------------
    8. Electronics Product Activation
    -----------------------------------------------------*/
    $('.electronics-pro-active')
        .on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target)
                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');
        }).owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            smartSpeed: 1000,
            navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
            margin: 10,
            responsive: {
                0: {
                    items: 1,
                    autoplay: true,
                    smartSpeed: 500
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        })

    /*----------------------------------------------------
    9. Best Seller Product Activation
    -----------------------------------------------------*/
    $('.best-seller-pro-active').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        margin: 10,
        responsive: {
            0: {
                items: 2,
                autoplay: true,
                nav: false,
                smartSpeed: 500
            },
            450: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    })
    $('.trending-pro-active').owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        smartSpeed: 1500,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        margin: 10,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            450: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    })
    
    /*----------------------------------------------------
    10. Related Product Single Page 
    -----------------------------------------------------*/
    $('.related-product').owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        margin: 10,
        responsive: {
            0: {
                items: 2,
                autoplay: true,
                nav: true,
                smartSpeed: 500
            },
            450: {
                items: 2,
                autoplay: true,
                nav: true
            },
            768: {
                items: 3,
                 autoplay: true,
                nav: true,
            },
            992: {
                items: 3,
                autoplay: true,
                nav: true,
            },
            1200: {
                items: 4
            }
        }
    })

     /*----------------------------------------------------
    10. Related Product Single Page 
    -----------------------------------------------------*/
    $('.postRelated-slider').owlCarousel({
    items: 1,
    loop: false,
    nav: false,
    dots: false,
    autoplay: true,
    margin: 10,
    smartSpeed: 1500,
     responsive: {
        0: {
            items: 2,
            autoplay: true,
            smartSpeed: 500
        },
        768: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
});
    /*----------------------------------------------------
    11. Second Hot Deal Product Activation
    -----------------------------------------------------*/
    $('.second-hot-deal-active').on('changed.owl.carousel initialized.owl.carousel', function (event) {
        $(event.target)
            .find('.owl-item').removeClass('last')
            .eq(event.item.index + event.page.size - 1).addClass('last');
    }).owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        margin: 0,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    })

    /*----------------------------------------------------
    12. Side Product Activation
    -----------------------------------------------------*/
    var $main = $('#main-carousel');
    var $thumbs = $('#thumb-carousel');

    // Initialize main carousel
    $main.owlCarousel({
      items: 1,
      loop: true,
      nav: false,
      dots: false,
      smartSpeed: 500
    });

    // Initialize thumbnail carousel
    $thumbs.owlCarousel({
      items: 4,
      margin: 10,
      nav: true,
      dots: false,
      responsive: {
        0: { items: 3 },
        576: { items: 4 }
      }
    });

    // Assign index to each thumbnail
    $thumbs.find('.item').each(function (index) {
      $(this).attr('data-index', index);
    });

    // On thumbnail click, go to corresponding main slide
    $thumbs.on('click', '.item', function () {
      var index = $(this).data('index');
      $main.trigger('to.owl.carousel', [index, 300]);

      $thumbs.find('.item').removeClass('active-thumb');
      $(this).addClass('active-thumb');
    });

    // When main changes, sync thumbnail
    $main.on('changed.owl.carousel', function (event) {
      var count = event.item.count;
      var index = (event.item.index - event.relatedTarget._clones.length / 2 + count) % count;

      $thumbs.find('.item').removeClass('active-thumb');
      $thumbs.find('.item[data-index="' + index + '"]').addClass('active-thumb');
    });

    // Initial highlight
    $thumbs.find('.item').eq(0).addClass('active-thumb');

      function setupMobileTabsInSection() {
    if ($(window).width() <= 768) {
      const $section = $('.singleProduct-tabs');

      if ($section.find('.accordion-toggle').length === 0) {
        $section.find('.nav-tabs .nav-link').each(function () {
          const target = $(this).data('bs-target');
          const label = $(this).text();
          const $btn = $('<div class="accordion-toggle fw-semibold border bg-light p-3" data-target="' + target + '">' + label + '</div>');
          $section.find(target).before($btn);
        });

        $section.find('.tab-pane').hide(); // Hide all initially
        $section.find('.tab-pane.active').show(); // Show the default active pane

        $section.on('click', '.accordion-toggle', function () {
          const target = $(this).data('target');

          // Slide up all tab-panes
          $section.find('.tab-pane').slideUp().removeClass('active show');

          // Slide down selected pane
          $section.find(target).slideDown().addClass('active show');

          // Accordion toggle active class
          $section.find('.accordion-toggle').removeClass('active');
          $(this).addClass('active');
        });
      }

      $section.find('.nav-tabs').hide(); // Hide nav-tabs only in mobile
    }
  }

  setupMobileTabsInSection();

  $(window).on('resize', function () {
    location.reload(); // Optional: Reset layout mode on resize
  });

    /*-------------------------------------
    13. Thumbnail Product activation
    --------------------------------------*/
    $('.thumb-menu').owlCarousel({
        loop: false,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        margin: 15,
        smartSpeed: 1000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 3,
                autoplay: true,
                smartSpeed: 500
            },
            768: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    $('.thumb-menu a').on('click', function () {
        $('.thumb-menu a').removeClass('active');
    })
    
    /*----------------------------
    14. Countdown Js Activation
    -----------------------------*/
    $('[data-countdown]').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<div class="count"><p>%D</p> <span>Days</span></div><div class="count"><p>%H</p> <span>Hours</span></div><div class="count"><p>%M</p> <span>Mins</span></div><div class="count"> <p>%S</p> <span>Secs</span></div>'));
        });
    });

    /*----------------------------
    14. Filter Sidebar
    -----------------------------*/

    $('#toggleSidebarBtn').on('click', function () {
            $('#responsiveSidebar').addClass('active');
            $('#filter-sidebarOverlay').addClass('active');
        });

        $('#filter-sidebarOverlay, #closeSidebarBtn').on('click', function () {
            $('#responsiveSidebar').removeClass('active');
            $('#filter-sidebarOverlay').removeClass('active');
        });


    /*----------------------------
    15. ScrollUp Activation
    -----------------------------*/
    // $.scrollUp({
    //     scrollName: 'scrollUp', // Element ID
    //     topDistance: '550', // Distance from top before showing element (px)
    //     topSpeed: 1000, // Speed back to top (ms)
    //     animation: 'fade', // Fade, slide, none
    //     scrollSpeed: 900,
    //     animationInSpeed: 1000, // Animation in speed (ms)
    //     animationOutSpeed: 1000, // Animation out speed (ms)
    //     scrollText: '<i class="fa fa-angle-double-up" aria-hidden="true"></i>', // Text for element
    //     activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    // });

    /*----------------------------
    16. Sticky-Menu Activation
    ------------------------------ */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.header-sticky').addClass("sticky");
        } else {
            $('.header-sticky').removeClass("sticky");
        }
    });
    
    /*----------------------------
    17. Nice Select Activation
    ------------------------------ */
    // $('select').niceSelect();
    
    /*----------------------------
    18. Price Slider Activation
    -----------------------------*/
    // Bootstrap Range Input
      $('#customRange').on('input', function() {
        let value = $(this).val();
        $('#rangeValue').text("Value: " + value);
      });

      // jQuery UI Slider
      $("#slider-range").slider({
        range: true,
        min: 0,
        max: 100,
        values: [0, 85], // Initial range values
        slide: function(event, ui) {
          $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
      });

      // Initialize the amount field with the default values from the slider
      $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
      /*--------------------------
         banner colse Popup
    ---------------------------*/
        $('.top_popup_banner').on('click', function () {
            $(".popup_banner").fadeOut(500);
        });


         $('.counter').each(function () {
      var $this = $(this),
          target = +$this.attr('data-target'),
          count = 0,
          increment = target / 100;

      function updateCounter() {
        if (count < target) {
          count += increment;
          $this.text(Math.ceil(count));
          requestAnimationFrame(updateCounter);
        } else {
          $this.text(target);
        }
      }

      updateCounter();
    });



    // Initialize Owl Carousel
    $('#nav-cat-tab').owlCarousel({
      margin: 10,
      nav: true,
      dots: false,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
      autoWidth: true,
        responsive: {
            0: {
                items: 3,
                autoplay: true,
                smartSpeed: 500
            },
            768: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    // Activate Bootstrap tab (Bootstrap handles the switching)
    $('#nav-cat-tab .nav-link').on('click', function () {
      $('#nav-cat-tab .nav-link').removeClass('active');
      $(this).addClass('active');

      const tabTrigger = new bootstrap.Tab(this);
      tabTrigger.show();
    });

});