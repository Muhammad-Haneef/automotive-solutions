(function ($) {
  "use strict";

	$(document).on('ignavoShopPageInit', function () {
		ignavoThemeModule.siteslider();
	});

	ignavoThemeModule.siteslider = function() {
		var _this = this;
		var container = document.querySelectorAll(".site-slider");
		  container.forEach(function(slide) {
			var parent = slide.closest(".site-slider-wrapper");
			var controls = parent.querySelector(".site-slider-controls");
			var items = slide.dataset.items && !isNaN(Number(slide.dataset.items)) ? Number(slide.dataset.items) : 1;
			var itemsTablet = slide.dataset.itemsTablet && !isNaN(Number(slide.dataset.itemsTablet)) ? Number(slide.dataset.itemsTablet) : 1;
			var itemsMobile = slide.dataset.itemsMobile && !isNaN(Number(slide.dataset.itemsMobile)) ? Number(slide.dataset.itemsMobile) : 1;
			var slidesPerGroup = slide.dataset.slidesPerGroup && !isNaN(Number(slide.dataset.slidesPerGroup)) ? Number(slide.dataset.slidesPerGroup) : 1;
			var slidesPerGroupTablet = slide.dataset.slidesPerGroupTablet && !isNaN(Number(slide.dataset.slidesPerGroupTablet)) ? Number(slide.dataset.slidesPerGroupTablet) : 1;
			var slidesPerGroupMobile = slide.dataset.slidesPerGroupMobile && !isNaN(Number(slide.dataset.slidesPerGroupMobile)) ? Number(slide.dataset.slidesPerGroupMobile) : 1;
			var spaceBetween = slide.dataset.margin && !isNaN(Number(slide.dataset.margin)) ? Number(slide.dataset.margin) : 0;
			var spaceBetweenTablet = slide.dataset.marginTablet && !isNaN(Number(slide.dataset.marginTablet)) ? Number(slide.dataset.marginTablet) : 0;
			var spaceBetweenMobile = slide.dataset.marginMobile && !isNaN(Number(slide.dataset.marginMobile)) ? Number(slide.dataset.marginMobile) : 0;
			var speed = slide.dataset.speed && !isNaN(Number(slide.dataset.speed)) ? Number(slide.dataset.speed) : 400;
			var direction = slide.dataset.direction || "horizontal";
			var loop = slide.dataset.loop ? slide.dataset.loop === "true" : false;
			var autoplay = slide.dataset.autoplay ? slide.dataset.autoplay === "true" : false;
			var autoplaySpeed = slide.dataset.autoplaySpeed && !isNaN(Number(slide.dataset.autoplaySpeed)) ? Number(slide.dataset.autoplaySpeed) : 1;
			var mousewheel = slide.dataset.mousewheel ? slide.dataset.mousewheel === "true" : false;
			var simulateTouch = slide.dataset.simulateTouch ? slide.dataset.simulateTouch === "true" : false;
			var parallax = slide.dataset.parallax ? slide.dataset.parallax === "true" : false;
			var dotsClickable = slide.dataset.dotsClick ? slide.dataset.dotsClick === "true" : false;
			var freeModes = slide.dataset.free ? slide.dataset.free === "true" : false;
			var watchSlides = slide.dataset.watch ? slide.dataset.watch === "true" : false;
			var forThumbs = slide.dataset.thumbs ? slide.dataset.thumbs : null;
			var paginationEl = (controls === null || controls === void 0 ? void 0 : controls.querySelector(".swiper-pagination")) || slide.querySelector(".swiper-pagination");
			var nextButton = (controls === null || controls === void 0 ? void 0 : controls.querySelector(".swiper-button-next")) || slide.querySelector(".swiper-button-next");
			var prevButton = (controls === null || controls === void 0 ? void 0 : controls.querySelector(".swiper-button-prev")) || slide.querySelector(".swiper-button-prev");
			var scrollBar = (controls === null || controls === void 0 ? void 0 : controls.querySelector(".swiper-scrollbar")) || slide.querySelector(".swiper-scrollbar");
			var setOffsetFromImage = function setOffsetFromImage2(swiperInstance) {
			  var _swiperInstance$navig, _swiperInstance$navig2;
			  var activeSlide = swiperInstance.slides[swiperInstance.activeIndex];
			  var image = activeSlide === null || activeSlide === void 0 ? void 0 : activeSlide.querySelector(".product-media img");
			  var nextEl = (_swiperInstance$navig = swiperInstance.navigation) === null || _swiperInstance$navig === void 0 ? void 0 : _swiperInstance$navig.nextEl;
			  var prevEl = (_swiperInstance$navig2 = swiperInstance.navigation) === null || _swiperInstance$navig2 === void 0 ? void 0 : _swiperInstance$navig2.prevEl;
			  if (!image || !nextEl || !prevEl) return;
			  var updateOffset = function updateOffset2() {
				var imageHeight = image.clientHeight;
				if (imageHeight > 0) {
				  var offset = imageHeight / 2;
				  prevEl.style.setProperty("--swiper-navigation-top-offset", "".concat(offset, "px"));
				  nextEl.style.setProperty("--swiper-navigation-top-offset", "".concat(offset, "px"));
				}
			  };
			  if (image.complete) {
				updateOffset();
			  } else {
				image.addEventListener("load", updateOffset);
			  }
			  window.addEventListener("resize", updateOffset);
			};
			var args = _defineProperty(_defineProperty(_defineProperty(_defineProperty(_defineProperty(_defineProperty(_defineProperty(_defineProperty(_defineProperty(_defineProperty({
			  // Optional parameters
			  slidesPerView: itemsMobile,
			  slidesPerGroup: slidesPerGroupMobile,
			  direction,
			  loop,
			  speed,
			  spaceBetween: spaceBetweenMobile,
			  parallax,
			  watchSlidesProgress: true,
			  freeMode: freeModes,
			  observer: true
			}, "watchSlidesProgress", watchSlides), "lazy", {
			  loadPrevNext: true,
			  // pre-loads the next image to avoid showing a loading placeholder if possible
			  loadPrevNextAmount: 2
			  //or, if you wish, preload the next 2 images
			}), "pagination", {
			  el: paginationEl,
			  clickable: dotsClickable
			}), "navigation", {
			  nextEl: nextButton,
			  prevEl: prevButton
			}), "scrollbar", {
			  el: scrollBar
			}), "mousewheel", mousewheel), "simulateTouch", simulateTouch), "slideVisibleClass", "slide-on-visible"), "breakpoints", {
			  // when window width is >= 320px
			  567: {
				slidesPerView: itemsMobile,
				spaceBetween: spaceBetweenMobile,
				slidesPerGroup: slidesPerGroupMobile,
				direction: "horizontal"
			  },
			  // when window width is >= 768px
			  768: {
				slidesPerView: itemsTablet,
				spaceBetween: spaceBetweenTablet,
				slidesPerGroup: slidesPerGroupTablet,
				direction: "horizontal"
			  },
			  // when window width is >= 1024px
			  1024: {
				slidesPerView: items,
				spaceBetween,
				slidesPerGroup
			  }
			}), "on", function on(el) {
			  el.slides.forEach(function(slide2) {
				if (!slide2.classList.contains("slide-on-visible")) {
				  var firstChild = slide2.children[0];
				  if (firstChild && firstChild.classList.contains("inview-element")) {
					firstChild.classList.remove("inview-element");
				  }
				}
			  });
			});
			if (autoplay) {
			  args.autoplay = {
				delay: autoplaySpeed,
				disableOnInteraction: false,
				pauseOnMouseEnter: true,
				waitForTransition: true
			  };
			}
			if (forThumbs) {
			  args.thumbs = {
				swiper: forThumbs
			  };
			}
			var swiper = new Swiper(slide, args);
			setOffsetFromImage(swiper);
			var hiddencontent = document.querySelectorAll(".product-hidden-content");
			if (hiddencontent.length !== 0) {
				ignavoThemeModule.productHiddenContent = function(slide) {
				};
			}
		});
	}
	
	$(document).ready(function() {
		ignavoThemeModule.siteslider();
	});

})(jQuery);
