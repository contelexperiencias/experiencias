$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================
  

	$('.category_item').click(function(){
		
		// $(this).attr('value','1');
		// var checksactivos = $('.category_item');
		// console.log(checksactivos);
		var categoriasSeleccionadas =new Array();
		var catProduct = $(this).attr('category');
		$('input[type=checkbox]:checked').each(function() {
			categoriasSeleccionadas.push($(this).val());
		  });
		  console.log(categoriasSeleccionadas.length);
		

		// if(catProduct == "all"){
		// 	function showAll(){
		// 		$('.product-item').show();
		// 		$('.product-item').css('transform', 'scale(1)');
		// 	} setTimeout(showAll,400);

		// }
		
		// var che = document.getElementById(catProduct);
		// console.log(che);
		// if(catProduct != "all" && che.checked){
		
		// console.log(catProduct);
		//var municipio = document.getElementById("Cozumel"); 
		// console.log(municipio);
		
			// municipio.style.fill = '#e8c300';
	    

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		if(categoriasSeleccionadas.length > 0){
			function showProduct(){
				$.each(categoriasSeleccionadas,function(index,value){
					$('.product-item[category="'+value+'"]').show();
					$('.product-item[category="'+value+'"]').css('transform', 'scale(1)');
	
				});
				// $('.product-item[category="'+catProduct+'"]').show();
				// $('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
			} setTimeout(showProduct,400);

		}
		else{
			function showAll(){
						$('.product-item').show();
						$('.product-item').css('transform', 'scale(1)');
					} setTimeout(showAll,400);
		setTimeout(showProduct,400);
				

		}
		
	// else{
	// 	function showProduct(){
	// 		$('.product-item[category="'+catProduct+'"]').hide();
	// 		// $('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
	// 	} setTimeout(showProduct,400);
	// }

});

	
	$('.destino_item').click(function(){
		var checksSeleccionadas =new Array();
	
		$('input[type=checkbox]:checked').each(function() {
			checksSeleccionadas.push($(this).val());
		  });

		  console.log(checksSeleccionadas.length);
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
		//  if($('.btn-warning[destinos="'+destProduct+'"]') == destProduct ){
		// 	console.log($('.product-item[destinos="'+destProduct+'"]'));
			
		// 	$('.product-item').attr("destinos",''+destProduct+'');
		// 	$('.product-item[destinos="'+destProduct+'"]').show();
		// 	$('.product-item[destinos="'+destProduct+'"]').css('transform', 'scale(1)');

		//  }
			 
			$('.product-item').attr("destinos",''+destProduct+'');
			$('.product-item').attr("destinos",''+destProduct+'');
			//console.log($('.product-item[destinos="'+destProduct+'"]'));
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