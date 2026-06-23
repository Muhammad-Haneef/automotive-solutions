'use strict';

(function($) {
  var $storage = true;
  var added_ids = [];
  var key = Cookies.get('klbgr_key');

  try {
    $storage = ('sessionStorage' in window && window.sessionStorage !== null);
    window.sessionStorage.setItem('klbgr', 'test');
    window.sessionStorage.removeItem('klbgr');
  } catch (err) {
    $storage = false;
  }

  $(function() {
    if (key === null || key === undefined || key === '') {
      key = klbgr_get_key();
      Cookies.set('klbgr_key', key, {expires: 7});
    }

    // Load data for the first time
    klbgr_load_data();

  });
  
	// Selected vehicles
	$(document).on('click', '.klbgr-item--selected-data a', function(event){
		event.preventDefault();

		var url = $(this).attr('href');
		var params = new URLSearchParams(url.split('?')[1]);

		var selected = {};

		params.forEach(function(value, key) {
			if (key.startsWith('filter_')) {
				var newKey = key.replace('filter_', 'pa_');
				selected[newKey] = value;
			} else {
				selected[key] = value;
			}
		});
		
		Cookies.set('selected_attributes', JSON.stringify(selected), { expires: 1, path: '/' });

		if ($('body').hasClass('single-product')) {
			setTimeout(function() {
				location.reload(true);
			}, 50);
		} else {
			setTimeout(function() {
				window.location.href = url;
			}, 50);
		}
		
	});

	// Trigger Popup in product detail
	$(document).ready(function() {
		$('.vehicle-test').on('click', function(e) {
			var button = document.querySelector(".popup-garage");
			if (button) {
				button.click();
			}
		});
	});

  // add to vehicle
  $(document).on('submit', 'form.add-vehicle ', function(e) {
	e.preventDefault();
	
	const selected = {};
	$(this).find('select').each(function() {
		const name = $(this).attr('name');
		const value = $(this).val();

		if (value) {
			if (selected[name]) {
				selected[name] += ',' + value;
			} else {
				selected[name] = value;
			}
		}
	});
  
	var combinedIds =  $(this).find('select').map(function() {
		const value = $(this).val();
		if (value) {
			return value;
		}
	  
	}).get().join('');
	  
    var $this = $(this);
    var id = combinedIds;
    var product_id = combinedIds;

    if (typeof product_id !== typeof undefined && product_id !== false) {
      id = product_id;
    }

    var data = {
	  cache: false,
      action: 'garage_add', 
	  product_id: id,
	  selected: selected,
    };
		
	$this.addClass('klbgr-adding');

	$.post(klbgr_vars.ajax_url, data, function(response) {
		klbgr_shortcode_list();
		$this.removeClass('klbgr-adding');
	});
  });

  /*shortcode list ajax*/
  function klbgr_shortcode_list() {
    var data = {
      action: 'shortcode_list_ajax',
    };
	
	$('.klbgr-list').addClass('klbgr-updating');
    $.post(klbgr_vars.ajax_url, data, function(response) {
      $('.klbgr-list').replaceWith(response);
    });
  }

  // remove from garage
  $(document).on('click touch', '.klbgr-item--remove span', function(e) {
    var $this = $(this);
    var $this_item = $this.closest('.klbgr-item');
    var product_id = $this_item.attr('data-product_id');
    var data = {
      action: 'garage_remove', product_id: product_id,
    };

    $this.addClass('klbgr-removing');

    $.post(klbgr_vars.ajax_url, data, function(response) {
      $this.removeClass('klbgr-removing');
      $this_item.remove();

      if (response.content != null) {
        $('#klbgr_garage').html(response.content).addClass('klbgr-loaded');
      }

    });

    e.preventDefault();
  });


  function klbgr_html_entities(str) {
    return String(str).
        replace(/&/g, '&amp;').
        replace(/</g, '&lt;').
        replace(/>/g, '&gt;').
        replace(/"/g, '&quot;');
  }

  function klbgr_get_key() {
    var result = [];
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var charactersLength = characters.length;

    for (var i = 0; i < 6; i++) {
      result.push(
          characters.charAt(Math.floor(Math.random() * charactersLength)));
    }

    return result.join('');
  }

  function klbgr_load_data() {
    if ($storage) {
      try {
        var data = JSON.parse(sessionStorage.getItem('klbgr_data_' + key));

        if (data.key && (key === null || key === undefined || key === '')) {
          Cookies.set('klbgr_key', data.key, {expires: 7});
        }
      } catch (err) {
        klbgr_get_data();
      }
    } else {
      klbgr_get_data();
    }
  }

  function klbgr_get_data() {
    var data = {
      action: 'klbgr_get_data',
    };

    $.post(klbgr_vars.ajax_url, data, function(response) {
      if (response) {
        if ($storage) {
          sessionStorage.setItem('klbgr_data_' + response.key,
              JSON.stringify(response));
        }

        if (response.key && (key === null || key === undefined || key === '' || key !==response.key)) {
			Cookies.set('klbgr_key', response.key, {expires: 7});
		}
			
		$(document.body).trigger('klbgr_data_refreshed', [response]);
      }
    });
  }



})(jQuery);