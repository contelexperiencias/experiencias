$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================
  
	var categoriasSeleccionadas =new Array();
	$('.category_item').click(function(){
		
		// $(this).attr('value','1');
		// var checksactivos = $('.category_item');
		// console.log(checksactivos);
		categoriasSeleccionadas =new Array();
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
		var destProduct = $(this).attr('destino');
		//console.log("destino selecionado:  "+destProduct );

		var destinosSeleccionadas =new Array();
		var catProduct = $(this).attr('category');
		if($('input[type=checkbox]')){
			switch($(this).val()){
				case "1":
					document.getElementById("path5149").style.fill = '#71d7e4';
				break;
				case "2":
					document.getElementById("Solidaridad").style.fill = '#71d7e4';
				break;
				case "3":
					document.getElementById("Tulum").style.fill = '#71d7e4';
				break;
				case "4":
					document.getElementById("Othon_P_Blanco").style.fill = '#71d7e4';
				break;
				case "5":
					document.getElementById("path5143").style.fill = '#71d7e4';
				break;
				case "6":
					document.getElementById("Isla_Mujeres").style.fill = '#71d7e4';
				break;
				case "7":
					document.getElementById("Cozumel").style.fill = '#71d7e4';
				break;
				case "8":
					document.getElementById("Solidaridad").style.fill = '#71d7e4';
				break;
				case "9":
					document.getElementById("Bacalar").style.fill = '#71d7e4';
				break;
				case "10":
					document.getElementById("path3197").style.fill = '#71d7e4';
				break;
				case "11":
					document.getElementById("path5149").style.fill = '#71d7e4';
				break;
				
				
			}

		}
		$('input[type=checkbox]:checked').each(function() {
			if($(this).attr('destino')){
				destinosSeleccionadas.push($(this).val());
				switch($(this).val()){
					case "1":
						document.getElementById("path5149").style.fill = '#e8c300';
					break;
					case "2":
						document.getElementById("Solidaridad").style.fill = '#e8c300';
					break;
					case "3":
						document.getElementById("Tulum").style.fill = '#e8c300';
					break;
					case "4":
						document.getElementById("Othon_P_Blanco").style.fill = '#e8c300';
					break;
					case "5":
						document.getElementById("path5143").style.fill = '#e8c300';
					break;
					case "6":
						document.getElementById("Isla_Mujeres").style.fill = '#e8c300';
					break;
					case "7":
						document.getElementById("Cozumel").style.fill = '#e8c300';
					break;
					case "8":
						document.getElementById("Solidaridad").style.fill = '#e8c300';
					break;
					case "9":
						document.getElementById("Bacalar").style.fill = '#e8c300';
					break;
					case "10":
						document.getElementById("path3197").style.fill = '#e8c300';
					break;
					case "11":
						document.getElementById("path5149").style.fill = '#e8c300';
					break;
					
					
				}


				// var municipio = document.getElementById("Cozumel"); 
				// console.log(municipio);				
				// 	municipio.style.fill = '#e8c300';
			}			
		  });
		 // console.log(destinosSeleccionadas);

		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);


		if(categoriasSeleccionadas.length > 0){
			function showProduct(){
			$.each(categoriasSeleccionadas,function(index,cate){
			  var div =	$('.product-item[category="'+cate+'"]');
			  $.each(div,function(index,prod){
				$.each(destinosSeleccionadas,function(index,dest){
					$("#"+prod.id).find('p,a').each(function()
					{
						if($(this).attr("destinos") == dest)
						{
							$("#"+prod.id).show();
							$("#"+prod.id).css('transform', 'scale(1)');
						}
					});
				});

			  });




			//   var productoid = $(this).attr("id").split("_");
			//   console.log(productoid);
			// 	$.each(destinosSeleccionadas,function(index,dest){	
					
								
			// 		$(this).find('p,a').each(function()
			// 		{
			// 			if($(this).attr("destinos") == dest)
			// 			{
			// 				$('.product-item[category="'+cate+'"]').show();
			// 				$('.product-item[category="'+cate+'"]').css('transform', 'scale(1)');
			// 			}
			// 		});

	
			// 	});
			});
				// $('.product-item[category="'+catProduct+'"]').show();
				// $('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
			} setTimeout(showProduct,400);

		}





        if(destinosSeleccionadas.length > 0 && categoriasSeleccionadas.length == 0){
		$.each(destinosSeleccionadas,function(index,value){
		$(".product-item").find('p,a').each(function(){
			//console.log("array de categorias: "+ categoriasSeleccionadas);
			// if(categoriasSeleccionadas > 0 ){
			// 	$.each(categoriasSeleccionadas,function(index,categoria){
			// 		$('.product-item[category="'+categoria+'"]').show();
			// 		$('.product-item[category="'+categoria+'"]').css('transform', 'scale(1)');
	
			// 	});



			// }

			if($(this).attr("destinos") == value){
				var productoid = $(this).attr("id").split("_");
				//console.log($(this).attr("destinos"));
				function showProduct(){
				$("#"+productoid[0]).show();
			    $("#"+productoid[0]).css('transform', 'scale(1)');
			} setTimeout(showProduct,400);


			}
			

		});
	});
	}
	
		$('input[type=checkbox]:checked').each(function() {
			checksSeleccionadas.push($(this).val());
		  });

		//   console.log(checksSeleccionadas.length);
		
		// console.log(destProduct);
		// var municipio = document.getElementById("Cozumel"); 
		// console.log(municipio);
		
		// 	municipio.style.fill = '#e8c300';
	    

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		// $('.destino_item').removeClass('ct_item-active');
		// $(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		// $('.product-item').css('transform', 'scale(0)');
		// function hideProduct(){
		// 	$('.product-item').hide();
		// } setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		// function showProduct(){
		//  if($('.btn-warning[destinos="'+destProduct+'"]') == destProduct ){
		// 	console.log($('.product-item[destinos="'+destProduct+'"]'));
			
		// 	$('.product-item').attr("destinos",''+destProduct+'');
		// 	$('.product-item[destinos="'+destProduct+'"]').show();
		// 	$('.product-item[destinos="'+destProduct+'"]').css('transform', 'scale(1)');

		//  }
			 
			// $('.product-item').attr("destinos",''+destProduct+'');
			// $('.product-item').attr("destinos",''+destProduct+'');
			//console.log($('.product-item[destinos="'+destProduct+'"]'));
			// $('.product-item[destinos="'+destProduct+'"]').show();
			// $('.product-item[destinos="'+destProduct+'"]').css('transform', 'scale(1)');
		// } setTimeout(showProduct,400);
	});
	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});