function _arrayLikeToArray(r, a) {
  (null == a || a > r.length) && (a = r.length);
  for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e];
  return n;
}
function _arrayWithoutHoles(r) {
  if (Array.isArray(r)) return _arrayLikeToArray(r);
}
function _defineProperty(e, r, t) {
  return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, {
    value: t,
    enumerable: true,
    configurable: true,
    writable: true
  }) : e[r] = t, e;
}
function _iterableToArray(r) {
  if ("undefined" != typeof Symbol && null != r[Symbol.iterator] || null != r["@@iterator"]) return Array.from(r);
}
function _nonIterableSpread() {
  throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}
function _toConsumableArray(r) {
  return _arrayWithoutHoles(r) || _iterableToArray(r) || _unsupportedIterableToArray(r) || _nonIterableSpread();
}
function _toPrimitive(t, r) {
  if ("object" != typeof t || !t) return t;
  var e = t[Symbol.toPrimitive];
  if (void 0 !== e) {
    var i = e.call(t, r);
    if ("object" != typeof i) return i;
    throw new TypeError("@@toPrimitive must return a primitive value.");
  }
  return ("string" === r ? String : Number)(t);
}
function _toPropertyKey(t) {
  var i = _toPrimitive(t, "string");
  return "symbol" == typeof i ? i : i + "";
}
function _unsupportedIterableToArray(r, a) {
  if (r) {
    if ("string" == typeof r) return _arrayLikeToArray(r, a);
    var t = {}.toString.call(r).slice(8, -1);
    return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0;
  }
}
(function($) {
  var IGNAVO = {
    init: function init() {
      this.dom();
      this.inviewAnimation(75);
      this.ratingStar();
      this.dropdownMenu();
      this.mobileNavigation();
      this.marqueeAnimation();
      this.gridBordered();
      this.moveWidgetsResponsively();
      this.myAccountNavigation();
      this.customSelect();
    },
    dom: function dom() {
      this.$window = $(window);
      this.$document = $(document);
      this.$body = $("body");
      this.$html = $("html");
    },
    inviewAnimation: function inviewAnimation() {
      var staggerDelay = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : 0;
      var items = document.querySelectorAll(".inview-item");
      var delay = 0;
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            setTimeout(function() {
              entry.target.classList.add("inviewed");
            }, delay);
            delay += staggerDelay;
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });
      items.forEach(function(item) {
        observer.observe(item);
      });
    },
    ratingStar: function ratingStar() {
      var ratings = document.querySelectorAll(".star-rating");
      ratings.forEach(function(rating) {
        var score = parseFloat(rating.dataset.score);
        var stars = rating.querySelectorAll(".star");
        stars.forEach(function(star, index) {
          if (index + 1 <= score) {
            star.classList.add("filled");
          } else if (index < score) {
            star.classList.add("not-filled");
          }
        });
      });
    },
    dropdownMenu: function dropdownMenu() {
      var dropdownIcon = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 8L12 16L20 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      var drawerMenu = document.querySelectorAll(".navigation-dropdown");
      drawerMenu.forEach(function(menu) {
        var menuItemsWithChildren = menu.querySelectorAll(".menu-item-has-children");
        function calculateTotalHeight(submenu) {
          var totalHeight = submenu.scrollHeight;
          var activeNestedSubmenus = submenu.querySelectorAll(".active > .sub-menu");
          activeNestedSubmenus.forEach(function(nestedSubmenu) {
            totalHeight += nestedSubmenu.scrollHeight;
          });
          return totalHeight;
        }
        menuItemsWithChildren.forEach(function(menuItem) {
          var link = menuItem.querySelector("a");
          var wrapper = document.createElement("div");
          wrapper.className = "menu-item-wrapper";
          link.parentNode.insertBefore(wrapper, link);
          wrapper.appendChild(link);
          var iconDiv = document.createElement("div");
          iconDiv.className = "dropdown-icon-wrapper";
          iconDiv.innerHTML = dropdownIcon;
          wrapper.appendChild(iconDiv);
          var submenu = menuItem.querySelector(".sub-menu");
          var linkClickHandler = function linkClickHandler2(e) {
            if (link.getAttribute("href") === "#") {
              e.preventDefault();
              toggleSubmenu(menuItem, submenu);
            }
          };
          var iconClickHandler = function iconClickHandler2(e) {
            e.stopPropagation();
            toggleSubmenu(menuItem, submenu);
          };
          menuItem.mobileMenuHandlers = {
            link: linkClickHandler,
            icon: iconClickHandler
          };
          link.addEventListener("click", linkClickHandler);
          iconDiv.addEventListener("click", iconClickHandler);
        });
        function toggleSubmenu(menuItem, submenu) {
          var isActive = menuItem.classList.contains("active");
          var activeSiblings = menuItem.parentElement.querySelectorAll(".menu-item.active");
          activeSiblings.forEach(function(sibling) {
            if (sibling !== menuItem) {
              sibling.classList.remove("active");
              var siblingSubmenu = sibling.querySelector(".sub-menu");
              if (siblingSubmenu) {
                siblingSubmenu.style.maxHeight = "0px";
              }
              var activeChildren2 = sibling.querySelectorAll(".active");
              activeChildren2.forEach(function(child) {
                child.classList.remove("active");
                var childSubmenu = child.querySelector(".sub-menu");
                if (childSubmenu) {
                  childSubmenu.style.maxHeight = "0px";
                }
              });
            }
          });
          if (!isActive) {
            menuItem.classList.add("active");
            if (submenu) {
              submenu.style.maxHeight = submenu.scrollHeight + "px";
              var parent = menuItem.parentElement.closest(".sub-menu");
              while (parent) {
                var totalHeight = calculateTotalHeight(parent);
                parent.style.maxHeight = totalHeight + "px";
                parent = parent.parentElement.closest(".sub-menu");
              }
            }
          } else {
            menuItem.classList.remove("active");
            if (submenu) {
              submenu.style.maxHeight = "0px";
              var _parent = menuItem.parentElement.closest(".sub-menu");
              while (_parent) {
                var _totalHeight = calculateTotalHeight(_parent);
                _parent.style.maxHeight = _totalHeight + "px";
                _parent = _parent.parentElement.closest(".sub-menu");
              }
            }
            var activeChildren = menuItem.querySelectorAll(".active");
            activeChildren.forEach(function(child) {
              child.classList.remove("active");
              var childSubmenu = child.querySelector(".sub-menu");
              if (childSubmenu) {
                childSubmenu.style.maxHeight = "0px";
              }
            });
          }
        }
      });
    },
    mobileNavigation: function mobileNavigation() {
      var mobileNav = document.querySelector(".site-mobile-navigation");
      if (mobileNav !== null) {
        var handleScroll = function handleScroll2() {
          var scrollTop = window.scrollY;
          var windowHeight = window.innerHeight;
          var documentHeight = document.documentElement.scrollHeight;
          if (scrollTop + windowHeight >= documentHeight - 5) {
            mobileNav.classList.add("close");
          } else {
            mobileNav.classList.remove("close");
          }
        };
        window.addEventListener("scroll", handleScroll);
      }
    },
    marqueeAnimation: function marqueeAnimation() {
      function setupMarquee() {
        var marquees = document.querySelectorAll(".site-marquee");
        marquees.forEach(function(marquee) {
          var inner = marquee.querySelector(".site-marquee-inner");
          var group = inner.querySelector(".site-marquee-group");
          var clone = marquee.dataset.clone;
          if (!inner || !group) return;
          var currentSpeed = getComputedStyle(marquee).getPropertyValue("--marquee-speed");
          var userDefinedSpeed = !!currentSpeed.trim();
          var groupWidth = group.scrollWidth;
          var containerWidth = marquee.offsetWidth;
          inner.querySelectorAll('.site-marquee-group[aria-hidden="true"]').forEach(function(clone2) {
            return clone2.remove();
          });
          var totalWidth = groupWidth;
          while (totalWidth < containerWidth * clone) {
            var _clone = group.cloneNode(true);
            _clone.setAttribute("aria-hidden", "true");
            inner.appendChild(_clone);
            totalWidth += groupWidth;
          }
          if (!userDefinedSpeed) {
            var calculatedSpeed = Math.max(10, totalWidth / 40);
            marquee.style.setProperty("--marquee-speed", "".concat(calculatedSpeed, "s"));
          }
        });
      }
      window.addEventListener("load", setupMarquee);
      window.addEventListener("resize", function() {
        clearTimeout(window.__marqueeTimeout);
        window.__marqueeTimeout = setTimeout(setupMarquee, 200);
      });
    },
    gridBordered: function gridBordered() {
      var grids = document.querySelectorAll(".box-grid");
      grids.forEach(function(grid) {
        var items = grid.querySelectorAll(".box-grid-item");
        if (items.length > 0) {
          var addBorders = function addBorders2() {
            var gridLg = parseInt(getComputedStyle(grid).getPropertyValue("--box-grid-lg"));
            var gridSm = parseInt(getComputedStyle(grid).getPropertyValue("--box-grid-sm"));
            var gridXs = parseInt(getComputedStyle(grid).getPropertyValue("--box-grid-xs"));
            items.forEach(function(item, index) {
              item.classList.remove("border-e-1", "border-b-1");
              var gridColumnCount;
              if (window.innerWidth >= 1024) {
                gridColumnCount = gridLg;
              } else if (window.innerWidth >= 576) {
                gridColumnCount = gridSm;
              } else {
                gridColumnCount = gridXs;
              }
              if ((index + 1) % gridColumnCount !== 0) {
                item.classList.add("border-e-1");
              }
              if (index < items.length - gridColumnCount) {
                item.classList.add("border-b-1");
              }
            });
          };
          if (grid.classList.contains("has-bordered-grid")) {
            addBorders();
            window.addEventListener("resize", addBorders);
          }
        }
      });
    },
    moveWidgetsResponsively: function moveWidgetsResponsively() {
      var sidebar = document.querySelector(".filter-widgets");
      var drawer = document.querySelector(".filter-drawer");
      var drawerWidgets = drawer === null || drawer === void 0 ? void 0 : drawer.querySelector(".site-filter-drawer");
      if (!sidebar || !drawer || !drawerWidgets) return;
      var widgets = Array.from(sidebar.querySelectorAll(".widget"));
      var moveWidgets = function moveWidgets2() {
        var isMobile = window.innerWidth < 1024;
        widgets.forEach(function(widget) {
          var currentParent = widget.parentElement;
          if (isMobile && currentParent !== drawerWidgets) {
            drawerWidgets.appendChild(widget);
          }
          if (!isMobile && currentParent !== sidebar) {
            sidebar.appendChild(widget);
          }
        });
      };
      window.addEventListener("resize", moveWidgets);
      document.addEventListener("DOMContentLoaded", moveWidgets);
      moveWidgets();
    },
    myAccountNavigation: function myAccountNavigation() {
      var button = document.querySelector(".user-menu-toggle a");
      var accountMenu = document.querySelector(".my-account-navigation");
      if (button !== null || accountMenu !== null) {
        button.addEventListener("click", function(e) {
          e.preventDefault();
          accountMenu.classList.toggle("active");
        });
      }
    },
    customSelect: function customSelect() {
      var selects = document.querySelectorAll(".custom-select");
      selects.forEach(function(select) {
        var selectPlaceholder = select.dataset.placeholder;
        var options = {
          width: "resolve"
        };
        if (selectPlaceholder) {
          options.placeholder = selectPlaceholder;
        }
        $(select).select2(options);
      });
    }
  };
  IGNAVO.init();
  
	$(window).load(function(){
		$('.site-loading').fadeOut('slow',function(){$(this).remove();});
	});
	
	$(window).scroll(function() {
        $(this).scrollTop() > 135 ? $("header.site-header").addClass("sticky-header") : $("header.site-header").removeClass("sticky-header")
    });
	
})(jQuery);
