// GLOBAL AJAX SETUP
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});



// ─── Alert function using iziToast ──────
function showAlert(type, message) {
    switch (type) {
        case "info":
            iziToast.info({
                title: "Info!",
                message: message,
                position: "topRight",
            });
            break;
        case "success":
            iziToast.success({
                title: "Success!",
                message: message,
                position: "topRight",
            });
            break;
        case "warning":
            iziToast.warning({
                title: "Warning!",
                message: message,
                position: "topRight",
            });
            break;
        case "error":
            iziToast.error({
                title: "Error!",
                message: message,
                position: "topRight",
            });
            break;
    }
}

// ─── Wishlist toggle ──────
$(document).on("click", ".btn-wishlist", function () {
    const btn = $(this);
    const productId = btn.data("id");
    const url = btn.data("url");

    $.ajax({
        url: url,
        type: "POST",
        data: { product_id: productId }, // no _token needed anymore
        success: function (res) {
            btn.toggleClass("active", res.status === "added");

            btn.find("i")
                .toggleClass("fa-solid text-success", res.status === "added")
                .toggleClass("fa-regular", res.status === "removed");
            btn.find("span")
                .toggleClass("text-success", res.status === "added")
                .toggleClass("text-secondary", res.status === "removed");

            $(".wishlist-count").text(res.count);
            showAlert(res.alertType, res.message);
        },
    });
});

// ─── Compare toggle ──────
$(document).on("click", ".btn-compare", function () {
    const btn = $(this);
    const productId = btn.data("id");
    const url = btn.data("url");

    $.ajax({
        url: url,
        type: "POST",
        data: { product_id: productId }, // no _token needed anymore
        success: function (res) {
            btn.toggleClass("active", res.status === "added");

            btn.find("i")
                .toggleClass("text-success", res.status === "added")
                .toggleClass("text-secondary", res.status === "removed");
            btn.find("span")
                .toggleClass("text-success", res.status === "added")
                .toggleClass("text-secondary", res.status === "removed");

            $(".compare-count").text(res.count);
            showAlert(res.alertType, res.message);
        },
    });
});




//======================================================
//               CART FUNCTIONS - starting
//======================================================

// ─── Refresh cart dropdown ────────────────────────────
function refreshCartDropdown() {
    const cartDropdownUrl = $('meta[name="cart-dropdown-url"]').attr('content');
    $.get(cartDropdownUrl, function (html) {
        $('#cart-dropdown').replaceWith(html);
    });
}

// ─── Add to cart ──────────────────────────────────────
$(document).on("click", ".btn-add-cart", function () {
    const btn = $(this);
    btn.find("i").removeClass("fa-shopping-cart").addClass("fa-spinner");
    $.post(
        btn.data("url"),
        {
            product_id: btn.data("id"),
            variation_id: btn.data("variation_id"),
            quantity: 1,
            _token: $('meta[name="csrf-token"]').attr("content"),
        },
        function (res) {
            $(".cart-count").text(res.count);
            refreshCartDropdown();
            btn.find("i")
                .removeClass("fa-spinner")
                .addClass("fa-shopping-cart");
            showAlert(res.alertType, res.message);
        },
    );
});

// ─── Remove from cart ────────────────────────────────
$(document).on('click', '.btn-cart-remove', function (e) {
    e.preventDefault();
    const btn = $(this);

    $.get(btn.data('url'), function (res) {
        // Remove item row instantly
        $('#cart-item-' + btn.data('id')).fadeOut(300, function () {
            $(this).remove();
        });

        // Update header count
        $('.cart-count').text(res.count);

        // Update totals
        $('#cart-subtotal').text(res.subtotal);
        $('#cart-total').text(res.total);

        // Show empty message if no items left
        if (res.count === 0) {
            $('#cart-items').html('');
            $('#cart-totals').hide();
            $('#cart-dropdown li').first().html(
                '<p class="text-center p-3">Sorry! Your cart is empty.<br><a href="/" class="text-primary">Start shopping</a></p>'
            );
        }

        showAlert(res.alertType, res.message);
    });
});

//======================================================
//               CART FUNCTIONS - ending
//======================================================




//======================================================
//               PRODUCT LISTING - starting
//======================================================

let isLoading = false;
let currentFilters = {};

// ─── Infinite Scroll ──────────────────────────────
$(window).on('scroll', function () {
    const btn = $('#btn-load-more');

    // Stop if: no more pages, already loading, or button doesn't exist
    if (!btn.length || isLoading || btn.hasClass('d-none')) return;

    const scrollBottom = $(window).scrollTop() + $(window).height();
    const gridBottom   = $('#product-grid').offset().top + $('#product-grid').outerHeight();

    // Trigger 300px before reaching bottom of grid
    if (scrollBottom >= gridBottom - 300) {
        loadMore(btn.data('page'));
    }
});

// ─── Load More function ───────────────────────────
function loadMore(page) {
    if (isLoading) return;
    isLoading = true;

    const btn = $('#btn-load-more');

    btn.addClass('d-none');
    $('#load-more-spinner').removeClass('d-none');

    const params = $.extend({}, currentFilters, { page: page });

    $.ajax({
        url:     window.location.pathname,
        type:    'GET',
        data:    params,
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success: function (res) {
            $('#product-grid').append(res.html);

            const newLoaded = Math.min(page * 12, res.total);
            $('#loaded-count').text(newLoaded);
            $('#remaining-count').text((res.total - newLoaded) + ' remaining');

            if (res.hasMore) {
                btn.data('page', res.nextPage)
                   .data('loaded', newLoaded)
                   .removeClass('d-none');
            } else {
                $('#all-loaded-count').text(res.total);
                $('#all-loaded').removeClass('d-none');
                btn.addClass('d-none');
            }
        },
        complete: function () {
            $('#load-more-spinner').addClass('d-none');
            isLoading = false;
        }
    });
}

// ─── Sort filter ──────────────────────────────────
$(document).on('change', '#filter-sort', function () {
    currentFilters.sort = $(this).val();
    resetAndReload();
});

// ─── Search (debounced) ───────────────────────────
let searchTimer;
$(document).on('keyup', '#filter-search', function () {
    clearTimeout(searchTimer);
    const val = $(this).val();
    searchTimer = setTimeout(function () {
        currentFilters.search = val;
        resetAndReload();
    }, 500);
});

// ─── Reset and reload from page 1 ────────────────
function resetAndReload() {
    $('#product-grid').html(`
        <div class="col-12 text-center py-5">
            <div class="spinner-border text-primary"></div>
        </div>
    `);

    $('#btn-load-more').data('page', 2).data('loaded', 12).removeClass('d-none');
    $('#all-loaded').addClass('d-none');

    const params = $.extend({}, currentFilters, { page: 1 });

    $.ajax({
        url:     window.location.pathname,
        type:    'GET',
        data:    params,
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success: function (res) {
            $('#product-grid').html(res.html);
            $('#loaded-count').text(Math.min(12, res.total));
            $('#total-count').text(res.total);
            $('#remaining-count').text((res.total - 12) + ' remaining');

            if (!res.hasMore) {
                $('#btn-load-more').addClass('d-none');
                $('#all-loaded-count').text(res.total);
                $('#all-loaded').removeClass('d-none');
            }
        }
    });
}
//======================================================
//               PRODUCT LISTING - ending
//======================================================