$( document ).ready( function() {

	$('.showcase-carousel').slick({
		arrows: true,
		dots: true,
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 4,
		prevArrow: '<a role="button" class="slick-left"><span class="i-arrow-left"></span><span class="sr-only">Anterior</span></a>',
		nextArrow: '<a role="button" class="slick-right"><span class="i-arrow-right"></span><span class="sr-only">Próximo</span></a>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 432,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});

	$('.showcase-carousel-col3').slick({
		arrows: false,
		dots: true,
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 432,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});

	$('.showcase-carousel-col4').slick({
		arrows: false,
		// centerMode: true,
		dots: true,
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
		breakpoint: 576,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 432,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});

	$('.showcase-carousel .item').on("click", function(e) {
		e.preventDefault();
		var target = $(this).attr('href');
		var wdContainer = $(".webdoor-showcase-carousel");

		$(this).closest('.showcase-carousel').find('.item').removeClass('active');
		$(this).addClass('active');

		wdContainer.fadeIn('fast');
		wdContainer.children('.webdoor').not(target).fadeOut('fast');
		$(target).fadeIn('fast');
	});

	$('.webdoor-showcase-carousel .close').on("click", function(e) {
		e.preventDefault();
		var wdContainer = $(this).parent();

		$(this).parent().parent().find('.showcase-carousel .item').removeClass('active');
		wdContainer.children('.webdoor').fadeOut('fast');
		wdContainer.fadeOut('fast');
	});

	function updateText(event) {
		var input = $(this);

		setTimeout(function() {
			var val = input.val();
			if(val != '') {
				input.parent().addClass('filled');
			}
			else {
				input.parent().removeClass('filled');
			}
		},1)
	}

	$(".label-floated .form-control").keydown(updateText);
	$(".label-floated .form-control").change(updateText);

});