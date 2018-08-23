//alert("cargando");

$('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
});


//Mapa Google
var API_key = 'AIzaSyCZtP9MFlLZB-zhCsVI_uuvb5bytOk1lyE';


// Aquí agregar el codigo de Google Maps



(function($){

	var backToTop = function() {
		var scrollTop = $(window).scrollTop();

		if(scrollTop > scrollTrigger){
			$("#back-to-top").addClass("show");
		} else {
			$("#back-to-top").removeClass("show");
		}
	}

	$("#back-to-top").on("click", function(e){
		e.preventDefault();

		$("html, body").animate({
			scrollTop:0
		},700);
	})

	if( $("#back-to-top").length ) {
		var scrollTrigger = 100;

		backToTop();

		$(window).on("scroll", function(){
			backToTop();
		});
	}

})(jQuery)