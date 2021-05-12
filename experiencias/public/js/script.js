$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);
		var municipio = document.getElementById("Cozumel"); 
		console.log(municipio);
		
			municipio.style.fill = '#e8c300';
	    

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			$('.product-item[category="'+catProduct+'"]').show();
			$('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	
	$('.destino_item').click(function(){
		var destProduct = $(this).attr('destino');
		console.log(destProduct);
		// var municipio = document.getElementById("Cozumel"); 
		// console.log(municipio);
		
		// 	municipio.style.fill = '#e8c300';
	    

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.destino_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
		
			
			$('.product-item').attr("destinos",''+destProduct+'');
			console.log($('.product-item[destinos="'+destProduct+'"]'));
			$('.product-item[destinos="'+destProduct+'"]').show();
			$('.product-item[destinos="'+destProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});
	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});