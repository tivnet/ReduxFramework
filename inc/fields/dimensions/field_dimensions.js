jQuery(document).ready(function() {
	
	jQuery(".redux-dimensions-height, .redux-dimensions-width").numeric();

	jQuery(".redux-dimensions-units").select2({
		width: 'resolve',
		triggerChange: true,
		allowClear: true
	});

});