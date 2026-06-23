(function ($) {
  "use strict";

	$('.ignavo-attribute-filter').on('change', function() {
		
		var $form = $(this).closest('form');
		var $currentGroup = $(this).closest('.form-group');

		$currentGroup.nextAll(".form-group").find('select')
			.val('')
			.prop('disabled', true)
			.empty();

		if ($(this).val() !== '') {
			$currentGroup.nextAll(".form-group:first").find('select')
				.prop('disabled', false)
				.empty();
		}

		const selected = {};
		$form.find('.ignavo-attribute-filter').each(function() {
			const taxonomy = $(this).data('taxonomy');
			const value = $(this).val();
			if (value) {
				selected[taxonomy] = value;
			}
		});

		const data = {
			action: 'ignavo_get_filter_options',
			selected: selected
		};

		$form.append('<div class="attribute-filter-loader"></div>');

		$.post(MyAjax.ajaxurl, data, function(response) {
			if (response.success) {
				for (const tax in response.data) {
					const select = $form.find('[data-taxonomy="' + tax + '"]');
					const currentVal = select.val();

					select.empty().append(`<option value="">All</option>`);
					$.each(response.data[tax], function(slug, name) {
						select.append(`<option value="${slug}">${name}</option>`);
					});

					if (currentVal && response.data[tax][currentVal]) {
						select.val(currentVal);
					}
				}
			} else {
				console.error("Error:", response.data);
			}

			$form.find('.attribute-filter-loader').remove();
		});
	});


	$(document).on('change', 'form#klb-attribute-filter select', function(){
		var selectedTaxonomy = $(this).data('taxonomy');
		var taxonomyElements = $(this).closest('form').find('select[data-taxonomy="' + selectedTaxonomy + '"]');
		if (taxonomyElements.length <= 1) {
			return;
		}
		var currentIndex = taxonomyElements.index(this);
		if (currentIndex > 0) {
			return;
		}
		
		var mythis = $(this);
		var attrname = $(this).attr('name');
		
		if ($(this).hasClass("child-attr")) {
			return;
		}
		
		if (!$(this).closest('form').find('[data-id="child_'+ attrname +'"]').length){
			return;
		}

        var data = {
			cache: false,
            action: 'klb_models_output',
			beforeSend: function () {
				$(mythis).closest('form').append('<div class="attribute-filter-loader"></div>');
			},
			selected_id : $(this).find('option:selected').attr("data-id"),
			attribute_name : $(this).find('option:selected').val(),
			parent_id : $(this).attr("data-id"),
			tax : $(this).data("taxonomy"),
			
        };

		$.post(MyAjax.ajaxurl, data, function(response) {

	      $(mythis).closest('form').find('[data-id="child_'+ data.parent_id +'"]').html(response);


		  $('.attribute-filter-loader').remove();
        });

    });


	$(document).on('change', 'form#klb-attribute-filter select', function(){

		var sameselect = $(this).attr('name');
		
		if($(this).closest('form').find('select[name="'+ sameselect +'"]').length > 1){
			var total = '';
			var selectfield = $(this).closest('form').find('select[name="'+ sameselect +'"]').length;
		
			$(this).closest('form').find('select[name="'+ sameselect +'"]').each(function(index){
				if($(this).val() && $(this).val() != '0'){
					total += $(this).val();
				}
				var last_item = index === selectfield - 1;
								
				if (!last_item) {
					total += ',';
				}
			});
			
			var str = total.replace(/,\s*$/, "");

			var textValue = $(this).closest('form').find('#klb_'+ sameselect +'').val(str);
		}
	});
		
	$(document).on('submit', 'form#klb-attribute-filter:not(.add-vehicle)', function(){
		$(this).find(':input').filter(function() { return !this.value; }).attr('disabled', 'disabled');
		
		$(this).find('select:not([disabled]').each(function(){
			
			var selectname = $(this).attr('name');
			
			if($(this).closest('form').find('select[name="'+ selectname +'"]').length > 1){
				$(this).closest('form').find('select[name="'+ selectname +'"]').attr('disabled', 'disabled');
			}
		});
		
		return true; // make sure that the form is still submitted
	});
	
}(jQuery));