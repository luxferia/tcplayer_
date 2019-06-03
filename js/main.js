$( document ).ready( function() {

	// CARROSSEL WEBDOOR

	$('.webdoor-carousel').slick({
		autoplay: true,
		speed: 2500,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.showcase-carousel'
	});

	$('.showcase-carousel').slick({
		autoplay: true,
		arrows: false,
		dots: true,
		infinite: true,
		slidesToShow: 7,
		slidesToScroll: 7,
		centerMode: true,
		focusOnSelect: true,
		asNavFor: '.webdoor-carousel',
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 5
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
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

	// FLOAT LABELS

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

	// MASCARA

	$('.mask-date').mask('00/00/0000');
	$('.mask-cpf').mask('000.000.000-00', {reverse: true});

	// CADASTRO FORM

	var contactForm = $('#signup-form');
	var formMsgWrapper = $('.message-wrapper');

	contactForm.validate({
		rules: {
			'signup-name': {
				required: true,
				minlength: 3
			},
			'signup-email': {
				required: true,
				email: true
			},
			'signup-cpf': {
				required: true,
				minlength: 14
			},
			'signup-birthday': {
				required: true,
				minlength: 10
			},
			'signup-uf': {
				required: true
			},
			'signup-city': {
				required: true
			}
		},
		messages: {
			'signup-name': {
				required: 'Este campo é obrigatório.',
				minlength: 'Digite ao menos 3 caracteres.'
			},
			'signup-email': {
				required: 'Este campo é obrigatório',
				email: 'Digite um email válido.'
			},
			'signup-cpf': {
				required: 'Este campo é obrigatório.',
				minlength: 'Digite um CPF válido.'
			},
			'signup-birthday': {
				required: 'Este campo é obrigatório.',
				minlength: 'Digite uma data válida.'
			},
			'signup-uf': {
				required: 'Este campo é obrigatório.'
			},
			'signup-city': {
				required: 'Este campo é obrigatório.'
			}
		},
		errorElement: 'div',
		errorClass: 'is-invalid',
		errorPlacement: function(error, input) {
			error.addClass('form-text invalid-feedback');

			if(input.parent('.label-floated').length) {
				error.insertAfter(input.parent());
			} else {
				error.insertAfter(input);
			}
		},
		submitHandler: function(form) {
			$(this).children('fieldset').prop('disabled', true);

			$(this).find('button[type="submit"]').before('<i class="fas fa-circle-notch fa-spin mr-2" aria-label="Aguarde"></i>');

			contactForm.ajaxSubmit({
				type: 'POST',
				timeout: 10000,
            	clearForm: true,
            	resetForm: true,
	            error: function(xhr, message) {
	            	if (message==="timeout") {
	            		contactForm.children('fieldset').before('<div class="message-wrapper d-flex mb-2" role="alert"><i class="fas fa-exclamation-circle fa-2x mr-2" title="Atenção"></i><div>Tempo de espera excedido. Por favor, tente novamente.</div></div>');
	            	}
	            },
	            success: function() {
	            	contactForm.parent().find('#signup-modalLabel').html('Falta pouco!');
	            	contactForm.before('<div class="lead  text-light mt-4 text-center" role="alert">Em instantes, você receberá seu login e senha através do email cadastrado para aproveitar seus <span class="text-white font-weight-normal">7 dias grátis</span>.</div><button type="button" class="sr-only" data-dismiss="modal">Fechar modal</button>');
	            	contactForm.remove();
	            }
	        });
		},

		invalidHandler: function(form, validator) {
			$(this).children('fieldset').before('<div class="message-wrapper d-flex mb-2" role="alert"><i class="fas fa-exclamation-circle fa-2x mr-2" title="Atenção"></i><div>Os campos com asterisco são obrigatórios. Verifique seus dados ou tente preencher novamente.</div></div>');
		}
	});
	
});