(function ($){
	
	
	Drupal.behaviors.manouwerbehaviors = {
		attach: function (context , settings){
			$("#views-bootstrap-grid-2 > div > div > div >span.field-content > div > img.img-responsive").attr('height','150');
		    $("#views-bootstrap-grid-2 > div > div > div >span.field-content > div > img.img-responsive").attr('width','135');
			$("img").addClass("img-responsive");
			
		}
	};
})(jQuery)
