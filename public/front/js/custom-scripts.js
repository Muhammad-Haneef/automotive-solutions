/* KLB Addons for Elementor v1.0 */

jQuery.noConflict();
!(function ($) {
	"use strict";

	
	/* CAROUSEL*/
	function klb_carousel($scope, $) {
		var _this = this;
		var container = document.querySelectorAll(".site-slider");
		  container.forEach(function(slide) {
			if (slide.classList.contains("swiper-initialized")) return; 
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
	
	/* Countdown */
	function klb_countdown($scope, $) {
		var DateTime = luxon.DateTime;
		var container = document.querySelectorAll(".site-countdown");
		  container.forEach(function(block) {
			var date = block.getAttribute("data-date");
			var format = block.getAttribute("data-format");
			var timezone = block.getAttribute("data-timezone") || "local";
			var countdownContainer = block.querySelector(".site-countdown-block") || block;
			var ending = DateTime.fromFormat(date, format, {
			  zone: timezone
			});
			var interval;
			function updateCountdown() {
			  var now = DateTime.now().setZone(timezone);
			  if (ending <= now) {
				clearInterval(interval);
				countdownContainer.classList.add("countdown-finished");
				return;
			  }
			  var diff = ending.diff(now, ["days", "hours", "minutes", "seconds"]).toObject();
			  var days = block.querySelector(".countdown-time-days");
			  var hours = block.querySelector(".countdown-time-hours");
			  var minutes = block.querySelector(".countdown-time-minutes");
			  var seconds = block.querySelector(".countdown-time-seconds");
			  if (days) days.textContent = String(Math.floor(diff.days)).padStart(2, "0");
			  if (hours) hours.textContent = String(Math.floor(diff.hours)).padStart(2, "0");
			  if (minutes) minutes.textContent = String(Math.floor(diff.minutes)).padStart(2, "0");
			  if (seconds) seconds.textContent = String(Math.floor(diff.seconds)).padStart(2, "0");
			}
			if (ending <= DateTime.now().setZone(timezone)) {
			  countdownContainer.classList.add("countdown-finished");
			} else {
			  updateCountdown();
			  interval = setInterval(updateCountdown, 1e3);
			}
		});
	}
	
	/* PRODUCT CONTENTFADE */
	function klb_product_contentfade($scope, $) {
		var el = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : null;
		  var products = document.querySelectorAll(".product");
		  if (products !== null) {
			products.forEach(function(product) {
			  var hiddenContent = product.querySelector(".product-hidden-content");
			  if (hiddenContent !== null) {
				  var hiddenFooter = product.querySelector(".product-footer.hidden-content");
				  if (hiddenContent !== null || hiddenFooter !== null) {
					var themePaddingVar = getComputedStyle(document.documentElement).getPropertyValue("--theme-product-hidden-padding").trim();
					var themePadding = parseFloat(themePaddingVar.replace("px", "")) || 0;
					var hiddenFooterHeight = hiddenFooter.offsetHeight;
					var totalOffset = themePadding + hiddenFooterHeight;
					hiddenContent.style.bottom = "-".concat(totalOffset, "px");
					if (el && typeof el.style !== 'undefined') {
					  product.addEventListener("mouseenter", function() {
						el.style.setProperty("--product-hidden-offset", "".concat(totalOffset, "px"));
					  });
					  product.addEventListener("mouseleave", function() {
						el.style.removeProperty("--product-hidden-offset");
					  });
					}
				  }
			  }
			});
		}
	}
	
	
	

    jQuery(window).on('elementor/frontend/init', function () {
		
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-home-slider.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-home-slider2.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-carousel.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-carousel2.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-testimonial-carousel.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-tab-carousel.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-icon-slider.default', klb_carousel);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-home-slider.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-carousel.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-carousel2.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-tab-carousel.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-grid.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-banner.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-banner2.default', klb_countdown);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-tab-carousel.default', klb_product_contentfade);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-carousel.default', klb_product_contentfade);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-carousel2.default', klb_product_contentfade);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-grid.default', klb_product_contentfade);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-banner.default', klb_product_contentfade);
		elementorFrontend.hooks.addAction('frontend/element_ready/ignavo-product-banner2.default', klb_product_contentfade);
		
    });

})(jQuery);
