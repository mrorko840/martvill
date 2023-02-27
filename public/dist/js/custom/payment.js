"use strict";
if ($('.main-body .page-wrapper').find('#payment-container').length) {

    $('.error-alert').css('display', 'none');


	// Create a Stripe client
	var stripe = Stripe(publishableKey);

	// Create an instance of Elements
	var elements = stripe.elements();

	// Custom styling can be passed to options when creating an Element.
	var elementStyles = {
		base: {
			color: '#32325D',
			fontWeight: 500,
			fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
			fontSize: '16px',
			fontSmoothing: 'antialiased',
			'::placeholder': {
				color: '#cfd7df',
			},
			':-webkit-autofill': {
				color: '#e39f48',
			},
		},
		invalid: {
			color: '#721c24',
			'::placeholder': {
				color: '#cfd7df',
			},
		},
	};

	var elementClasses = {
		focus: 'focused',
		empty: 'empty',
		invalid: 'invalid',
	};

	// Create an instance of the card Element
	var cardNumber = elements.create('cardNumber', {
		style: elementStyles,
		classes: elementClasses,
	});
	cardNumber.mount('#card-number');

	var cardExpiry = elements.create('cardExpiry', {
		style: elementStyles,
		classes: elementClasses,
	});
	cardExpiry.mount('#card-expiry');

	var cardCvc = elements.create('cardCvc', {
		style: elementStyles,
		classes: elementClasses,
	});
	cardCvc.mount('#card-cvc');

	function stripeTokenHandler(token) {
		// Insert the token ID into the form so it gets submitted to the server
		var form = document.getElementById('payment-form');
		var hiddenInput = document.createElement('input');
		hiddenInput.setAttribute('type', 'hidden');
		hiddenInput.setAttribute('name', 'stripeToken');
		hiddenInput.setAttribute('value', token.id);
		form.appendChild(hiddenInput);
		// Submit the form
		$('#payment-form').trigger('submit');
	}

	// Create a token
	function createToken() {
		stripe.createToken(cardNumber).then(function(result) {
			if (result.error) {
				// Inform the user if there was an error
				$('#card-errors').css('display', 'block');
				var errorElement = document.getElementById('card-errors');
				errorElement.textContent = result.error.message;
			} else {
				$("#stripe-submit-btn").attr("disabled", true);
				$('.fa-spin').addClass('show-spin');
				// Send the token to your server
				stripeTokenHandler(result.token);
			}
		});
	};

	// Create a token when the form is submitted.
	var form = document.getElementById('payment-form');
	form.addEventListener('submit', function(e) {
		e.preventDefault();
		createToken();
	});

	cardNumber.on('change', function(event) {
		var displayError = document.getElementById('card-errors');
		if (event.error) {
			$(".fa-spin").hide();
			$('#card-errors').css('display', 'block');
			displayError.textContent = event.error.message;
		} else {
			$('#card-errors').css('display', 'none');
			displayError.textContent = '';
		}
	});
	/*Stripe End*/
}
