(function ($) {
  "use strict";

	$(document).on('ignavoShopPageInit added_to_cart', function () {
		ignavoThemeModule.filterpopup();
	});

	ignavoThemeModule.filterpopup = function() {
		var openElement = function openElement2(el) {
			el.classList.add("active");
			document.body.classList.add("action-enable");
		  };
		  var closeElement = function closeElement2(el) {
			el.classList.remove("active");
			document.body.classList.remove("action-enable");
		  };
		  var closeAction = function closeAction2(selector) {
			document.querySelectorAll(selector).forEach(function(el) {
			  el.addEventListener("click", function(e) {
				if (e.target.classList.contains("site-overlay") || e.target.classList.contains("site-close-button")) {
				  e.preventDefault();
				  closeElement(el);
				}
			  });
			});
		  };
		  document.querySelectorAll(".toggle-button").forEach(function(button) {
			button.addEventListener("click", function(e) {
			  e.preventDefault();
			  var className = _toConsumableArray(button.classList).find(function(c) {
				return c.startsWith("toggle-") && c !== "toggle-button";
			  });
			  if (className) {
				var target = className.replace("toggle-", "");
				var drawer = document.querySelector(".".concat(target, "-drawer"));
				if (drawer) openElement(drawer);
			  }
			});
		  });
		  document.querySelectorAll(".popup-button").forEach(function(button) {
			button.addEventListener("click", function(e) {
			  e.preventDefault();
			  var className = _toConsumableArray(button.classList).find(function(c) {
				return c.startsWith("popup-") && c !== "popup-button";
			  });
			  if (className) {
				var target = className.replace("popup-", "");
				var popup = document.querySelector(".".concat(target, "-popup"));
				if (popup) openElement(popup);
			  }
			});
		  });
		  document.querySelectorAll(".popup-on-load").forEach(function(popup) {
			var scrollTrigger = popup.dataset.scroll;
			var timeTrigger = popup.dataset.time;
			var cookieDays = popup.dataset.cookie;
			var popupClass = _toConsumableArray(popup.classList).find(function(c) {
			  return c.startsWith("popup-") && c !== "popup" && c !== "popup-on-load";
			});
			if (cookieDays && popupClass && Cookies.get(popupClass)) {
			  return;
			}
			if (scrollTrigger) {
			  var scrollVal = parseInt(scrollTrigger);
			  var lastScrollY = window.scrollY;
			  var totalScrollDistance = 0;
			  var _onScroll = function onScroll() {
				var currentScrollY = window.scrollY;
				totalScrollDistance += Math.abs(currentScrollY - lastScrollY);
				lastScrollY = currentScrollY;
				console.log(popupClass);
				if (totalScrollDistance >= scrollVal) {
				  openElement(popup);
				  if (cookieDays && popupClass) Cookies.set(popupClass, parseInt(cookieDays));
				  window.removeEventListener("scroll", _onScroll);
				}
			  };
			  window.addEventListener("scroll", _onScroll);
			}
			if (timeTrigger) {
			  setTimeout(function() {
				openElement(popup);
				if (cookieDays && popupClass) Cookies.set(popupClass, parseInt(cookieDays));
			  }, parseInt(timeTrigger) * 1e3);
			}
		  });
		  closeAction(".drawer");
		  closeAction(".popup");
	}
	
	$(document).ready(function() {
		ignavoThemeModule.filterpopup();
	});

}(jQuery));