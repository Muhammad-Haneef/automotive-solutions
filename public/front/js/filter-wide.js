(function ($) {
  "use strict";

	$(document).on('ignavoShopPageInit added_to_cart', function () {
		ignavoThemeModule.filterwide();
	});

	ignavoThemeModule.filterwide = function() {
	   var filterButton = document.querySelector(".dropdown-button.dropdown-filter");
      var dropdownHolder = document.querySelector(".dropdown-holder.dropdown-filter");
      if (!filterButton || !dropdownHolder) return;
      filterButton.addEventListener("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        dropdownHolder.classList.toggle("open");
      });
      document.addEventListener("click", function(e) {
        if (!dropdownHolder.contains(e.target) && !filterButton.contains(e.target)) {
          dropdownHolder.classList.remove("open");
        }
      });
	}
	
	$(document).ready(function() {
		ignavoThemeModule.filterwide();
	});

}(jQuery));