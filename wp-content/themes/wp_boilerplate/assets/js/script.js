//alert("cargando");

$('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
});


//Mapa Google
var API_key = 'AIzaSyCZtP9MFlLZB-zhCsVI_uuvb5bytOk1lyE';

// Aquí agregar el código de Google Maps
// Initialize and add the map
function initMap() {
  // The location
  var plaza = {lat: -33.4529894, lng: -70.57163220000001};
  // The map, centered
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: plaza});
  // The marker, positioned
  var marker = new google.maps.Marker({position: plaza, map: map});
}



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

	    $(".social__like").on("click", function(event){
            event.preventDefault();
            $(this).toggleClass("social__like--clicked");

        });
         
          $(".social__link").on("click", function(event){
          event.preventDefault();
          event.stopPropagation();
          var alerta = $(this).parent().parent().siblings(".meals__img").attr("alt");
          alert("Haz agregado este producto a tu carrito");

        });

})(jQuery)