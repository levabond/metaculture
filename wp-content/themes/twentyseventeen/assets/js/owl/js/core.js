	$(document).ready(function () {
		$('#carousel').slick({
			infinite: true,
			slidesToShow: 1,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
			slidesToScroll: 1,
			mobileFirst: true,
			// centerMode: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
	});
