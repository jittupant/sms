;(function($) {

	$.noty.layouts.top = {
		name: 'top',
		options: {},
		container: {
			object: '<ul id="noty_top_layout_container" />',
			selector: 'ul#noty_top_layout_container',
			style: function() {
				$(this).css({
					top: '7.4%',
                                        right: 0,
                                        position: 'fixed',
                                        width: '30%',
					height: 'auto',
					margin: 0,
					padding: 0,
					listStyleType: 'none',
					zIndex: 9999999
				});
			}
		},
		parent: {
			object: '<li />',
			selector: 'li',
			css: {}
		},
		css: {
			display: 'none'
		},
		addClass: ''
	};

})(jQuery);