$(document).ready(function () {

    if ($(window).width() < 992) {

        // Shop dropdown
        $("#dropdownMenuButton2").on("click", function (e) {
            e.preventDefault();

            $(this).next(".dropdown-menu").stop(true, true).slideToggle();
        });

        // Child accordion
        $(".mega-menu > li").each(function () {

            var title = $(this).children(".mega-title");
            var list = $(this).children("ul");

            list.hide();

            if (!title.find("span").length) {
                title.append('<span class="float-end">+</span>');
            }

            title.on("click", function (e) {
                e.preventDefault();

                var currentList = $(this).next("ul");

                $(".mega-menu > li > ul").not(currentList).slideUp();
                $(".mega-menu > li > .mega-title span").text("+");

                currentList.stop(true, true).slideToggle();

                $(this).find("span").text(
                    currentList.is(":visible") ? "-" : "+"
                );
            });

        });

    }

});

$(function () {

    const slider = document.getElementById('price-slider');

    noUiSlider.create(slider, {

        start: [0, 860],

        connect: true,

        step: 10,

        range: {
            min: 0,
            max: 860
        }

    });

    const minInput = $('#min-price');
    const maxInput = $('#max-price');

    // Slider -> Inputs
    slider.noUiSlider.on('update', function (values) {

        let min = Math.round(values[0]);
        let max = Math.round(values[1]);

        minInput.val(min);
        maxInput.val(max);

        $('#price-min').text(min);
        $('#price-max').text(max);

    });

    // Min Input -> Slider
    minInput.on('change keyup', function () {

        let min = parseInt($(this).val()) || 0;
        let max = parseInt(maxInput.val()) || 860;

        if (min < 0)
            min = 0;

        if (min > max)
            min = max;

        slider.noUiSlider.set([min, null]);

    });

    // Max Input -> Slider
    maxInput.on('change keyup', function () {

        let min = parseInt(minInput.val()) || 0;
        let max = parseInt($(this).val()) || 860;

        if (max > 860)
            max = 860;

        if (max < min)
            max = min;

        slider.noUiSlider.set([null, max]);

    });

    // Filter Button
    $('.btn-filter').click(function () {

        let min = minInput.val();
        let max = maxInput.val();

        alert(
            'Selected Price : $' +
            min +
            ' - $' +
            max
        );

     

    });

});

document.addEventListener("DOMContentLoaded", function () {

	    const bestSellerSlider = new Swiper(".bestSellerSlider", {
	    loop: true,
	    spaceBetween: 24,

	    autoplay: {
	        delay: 4000,
	        disableOnInteraction: false,
	        pauseOnMouseEnter: false,
	    },

	    pagination: {
	        el: ".swiper-pagination",
	        clickable: true,
	    },

	    breakpoints: {
	        0: {
	            slidesPerView: 2,
	        },
	        768: {
	            slidesPerView: 3,
	        },
	        1200: {
	            slidesPerView: 5,
	        }
	    }
	});

    var swiper = new Swiper(".featuredSwiper", {
	    slidesPerView: 3,
	    spaceBetween: 20,
	    loop: false,

	    breakpoints: {
	        0: { slidesPerView: 1 },
	        768: { slidesPerView: 2 },
	        1200: { slidesPerView: 3 }
	    }
	});

    new Swiper(".headlightsSwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        navigation: {
            nextEl: ".head-next",
            prevEl: ".head-prev",
        },
        pagination: {
            el: ".head-pagination",
            clickable: true,
        },
        breakpoints: {
            320: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            992: { slidesPerView: 4 },
            1200: { slidesPerView: 5 }
        }
    });

    new Swiper(".tiresSwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        navigation: {
            nextEl: ".tire-next",
            prevEl: ".tire-prev",
        }
    });

    new Swiper(".toolsSwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        navigation: {
            nextEl: ".tool-next",
            prevEl: ".tool-prev",
        }
    });
    var swiper = new Swiper(".categorySwiper", {
      slidesPerView: 2,   // mobile default (2 cards)
      spaceBetween: 12,

      breakpoints: {
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 3
        },
        992: {
          slidesPerView: 6, // desktop like your grid
          spaceBetween: 20
        }
      }
    });

function initBlogSwiper() {

  if (window.innerWidth < 992) {

    new Swiper(".blogSwiper", {
      slidesPerView: 1.2,
      spaceBetween: 15,

      breakpoints: {
        576: {
          slidesPerView: 2
        }
      }
    });

  }

}

initBlogSwiper();

window.addEventListener("resize", function () {
  if (window.innerWidth < 992) {
    initBlogSwiper();
  }
});



});



var thumbSwiper = new Swiper(".thumbSwiper", {

    spaceBetween:10,
    slidesPerView:3,
    watchSlidesProgress:true,
    breakpoints:{
        768:{
            slidesPerView:4
        }
    }

});

var productSwiper = new Swiper(".productSwiper", {
    spaceBetween:10,
    thumbs:{
        swiper:thumbSwiper
    }

});

const minus = document.querySelector(".qty-minus");
const plus = document.querySelector(".qty-plus");
const input = document.querySelector(".qty-input");

plus.onclick = function () {
    input.value = parseInt(input.value) + 1;
}

minus.onclick = function () {

    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
    }

}

document.querySelectorAll('.menu-item-has-children').forEach(item=>{
  item.addEventListener('click', function(e){
    if(window.innerWidth < 992){
      e.preventDefault();
      this.classList.toggle('open');
    }
  });
});

$(function() {
  $('.site-countdown').each(function() {
    let countdown = $(this);
    let targetDate = new Date(countdown.data('date')).getTime();
    let timer = setInterval(function() {
      let now = new Date().getTime();
      let distance = targetDate - now;
      if (distance < 0) {
        clearInterval(timer);
        countdown.find('.site-countdown-block').hide();
        countdown.find('.countdown-expired').show();
        return;
      }
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);
      countdown.find('.countdown-time-days').text(String(days).padStart(2, '0'));
      countdown.find('.countdown-time-hours').text(String(hours).padStart(2, '0'));
      countdown.find('.countdown-time-minutes').text(String(minutes).padStart(2, '0'));
      countdown.find('.countdown-time-seconds').text(String(seconds).padStart(2, '0'));
    },
    1000);
  });
});



function initDropdown(btnId, dropId, hiddenId, nextBtn = null){

    const btn = document.getElementById(btnId);
    const dropdown = document.getElementById(dropId);
    const hidden = document.getElementById(hiddenId);

    btn.addEventListener('click', function(){

        if(btn.classList.contains('disabled')) return;

        document
        .querySelectorAll('.dropdown-box')
        .forEach(el => el.classList.remove('show'));

        dropdown.classList.toggle('show');
    });

    dropdown.querySelectorAll('.option-item')
    .forEach(item => {

        item.addEventListener('click', function(){

            btn.querySelector('.select-text').innerText =
            this.innerText;

            hidden.value = this.innerText;

            dropdown.classList.remove('show');

            if(nextBtn){
                document
                .getElementById(nextBtn)
                .classList.remove('disabled');
            }

        });

    });

    const search =
    dropdown.querySelector('.search-input');

    search.addEventListener('keyup', function(){

        let value =
        this.value.toLowerCase();

        dropdown
        .querySelectorAll('.option-item')
        .forEach(option => {

            option.style.display =
            option.innerText
            .toLowerCase()
            .includes(value)
            ? 'block'
            : 'none';

        });

    });

}

initDropdown(
'makeBtn',
'makeDropdown',
'makeValue',
'modelBtn'
);

initDropdown(
'modelBtn',
'modelDropdown',
'modelValue',
'yearBtn'
);

initDropdown(
'yearBtn',
'yearDropdown',
'yearValue',
'engineBtn'
);

initDropdown(
'engineBtn',
'engineDropdown',
'engineValue'
);

document.addEventListener('click', function(e){

    if(!e.target.closest('.custom-select')){

        document
        .querySelectorAll('.dropdown-box')
        .forEach(el => {

            el.classList.remove('show');

        });

    }

});

jQuery(document).on('click', '[data-bs-target="#searchOffcanvas"]', function(e){
    e.stopImmediatePropagation();
});


