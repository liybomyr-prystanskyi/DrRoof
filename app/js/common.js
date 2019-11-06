
jQuery(function () {
	jQuery(window).on('load', function () {
		jQuery('#loading').fadeOut();
		jQuery('#Load').delay(1000).fadeOut('slow');
		jQuery('body').delay(1000).css({
			'overflow': 'visible'
		});
		setTimeout(function () {
			new WOW().init();
		}, 750);

		jQuery('a[href="' + this.location.href + '"]').addClass('active');

		jQuery(".lazy-img").recliner({
			attrib: "data-src",
			throttle: 100,
			threshold: 300,
		});
		jQuery('.lazy').Lazy({
			visibleOnly: true,
			effect: 'fadeIn',
			threshold: 400,
		});
	});

	jQuery('img.svg').each(function () {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		jQuery.get(imgURL, function (data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');
			// Add replaced image's ID to the new SVG
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');
			// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}
			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});

    var galleryThumbs = new Swiper('.gallery-thumbs', {
		slidesPerView: 5,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	  });
	  var galleryTop = new Swiper('.gallery-top', {
		  
		navigation: {
			
			nextEl: '.feedback__main__next',
			prevEl: '.feedback__main__prev'
		},
		thumbs: {
		  swiper: galleryThumbs
		}
	  });



	var serviceSlider = new Swiper('.swiper-container', {
		navigation: {
			nextEl: '.our-services__main__image__next',
			prevEl: '.our-services__main__image__prev',
			slidesPerView: 1,
			slidesPerColumn: 1,
			
		}
	});


	var serviceSlider = new Swiper('.our-work__main__swiper', {
		slidesPerView: 3,
		navigation: {
			nextEl: '.our-work__main__next',
			prevEl: '.our-work__main__prev',		
		},

		breakpoints: {
			// when window width is <= 320px
			320: {
				slidesPerView: 1,
				slidesPerColumn: 1,
			},
			// when window width is <= 480px
			768: {
				slidesPerView: 2,
				slidesPerColumn: 1,
			},
			1200: {
				slidesPerView: 3,
				slidesPerColumn: 1,
			}

		}
	});



	


	document.querySelector('#request-form1 #page').value = window.location.href;

	if (document.querySelector('#request-form #pageM')) {
		document.querySelector('#request-form #pageM').value = window.location.href;
	}

	if (document.querySelector('.customer-info')) {
		let targ = document.querySelector('.customer-info'),
			page = document.querySelector('#request-form1 #page'),
			item = document.querySelector('#request-form1 #item');

		targ.addEventListener('click', function (e) {
			if (e.target.tagName == 'A') {
				item.value = e.target.dataset.val;
				page.value = window.location.href;
			}
		});
	}
});