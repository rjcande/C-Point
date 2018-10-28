
function addToCart(itemid){
	let id = itemid;
	let quantity = $('#ItemQuantity'+id).val();
	

	$.ajax({
		url : "connections/add_to_cart.php",
		data : {"id":id, "quantity":quantity},
		method : "POST",
		success : function(data){
			$('#successMsg').html(data);
		}
	});
}





$('.deleteItemBtn').click( function() {
		const id = $(this).parent().data('id');
		const name = $(this).siblings('.card-title').html();
		const image = $(this).parent().prev().attr('src');
		$('#delete-modal-footer>a')
			.attr('href','controllers/delete_item.php?id='+id+'&name='+name);
		$('#delete-modal-body').html(
			'<img src="'+image+'">'
		);
		$('#delete-modal-title').html('Delete '+name+'?');
});
