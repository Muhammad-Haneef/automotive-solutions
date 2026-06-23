(function ($) {
  "use strict";

	$(document).on('ignavoShopPageInit added_to_cart', function () {
		ignavoThemeModule.productcontentfade();
	});

	ignavoThemeModule.productcontentfade = function() {
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
	
	$(document).ready(function() {
		ignavoThemeModule.productcontentfade();
	});

})(jQuery);
