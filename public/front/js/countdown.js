(function ($) {
  "use strict";

	$(document).on('ignavoShopPageInit', function () {
		ignavoThemeModule.countdown();
	});

	ignavoThemeModule.countdown = function() {
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
	
	$(document).ready(function() {
		ignavoThemeModule.countdown();
	});

})(jQuery);
