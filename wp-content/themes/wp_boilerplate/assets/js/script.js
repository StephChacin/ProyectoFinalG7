function getUrlVars() {
	let url = window.location.pathname.split('/')
	url.shift()
	return url
}

function isPage(arr) {
	const urlVars = getUrlVars()

	if ( Array.isArray(arr) ) {
		for( var i in arr ) {
			if( urlVars.indexOf(arr[i]) > -1 ) {
				return true
			}
		}
		return false

	} else {
		console.log(`la variable arr debe ser un array: ${arr}`)
	}
}



(function($) {

	$('.main-carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  autoPlay: true,
	});



	if (isPage(['clases'])) {
		$("#getting-started").countdown("2018/12/02", function(event) {
			$(this).text( event.strftime('%D days %H:%M:%S') );
		});
	}


	$('#get-another-quote-button').on('click', function(e) {
	    e.preventDefault();

	    $.ajax( {
	      url: "https://cors-anywhere.herokuapp.com/https://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=",
	      success: function(data) {
	      	console.log(data)
	        var post = data.shift(); // The data is an array of posts. Grab the first one.
	        $('#quote-title').text(post.title);
	        $('#quote-content').html(post.content);
	      	console.log(post)

	        // If the Source is available, use it. Otherwise hide it.
	        if (typeof post.custom_meta !== 'undefined' && typeof post.custom_meta.Source !== 'undefined') {
	          $('#quote-source').html('Source:' + post.custom_meta.Source);
	        } else {
	          $('#quote-source').text('');
	        }
	      },
	      cache: false
	    });
	  });



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