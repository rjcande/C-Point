$('button#checkout').on("click", function() {
	let name= $('input#name').val();
	let address= $('input#address2').val();
	let number = $('input#number').val();
 	let user_id = $('#user_id').data('id');
 	let payment_id= $('input[name="paymentmethod"]:checked').data('id');

	$.ajax({
			url:'connections/checkout_endpoint.php',
			method: 'post',
			data: {name:name, 
				address:address,
				number:number,
				payment_id:payment_id,
				user_id:user_id,
				payment_id:payment_id
			},
		}).done(data => {
			console.log(data);
	})
})

$('.check-pay').click(function n(e) {
	$('.check-pay').not(this).prop('checked', false);
});

// $('button.btn.btn-primary.btn-lg.checkout').on("click", function() {
// 	let name = $('input#order_name').val();
// 	// let email = $('input#order_email').val()
// 	let address = $('input#address').val();
// 	let contact_number = $('input#number').val();
// 	let payment_id = $('input[name="paymentMethod"]:checked').attr('id');
// 	let user_id = $('button.btn.btn-primary.btn-lg.checkout').data('id')
// 	let total_price = $('span#summary_total').text();


// 	$.ajax({
// 			url:'controllers/checkout_endpoint.php',
// 			method: 'post',
// 			data: {name:name, 
// 				address:address,
// 				contact_number:contact_number,
// 				payment_id:payment_id,
// 				user_id:user_id,
// 				total_price:total_price
// 			},
// 		}).done(data => {
// 			console.log(data);
// 	})
	


// })