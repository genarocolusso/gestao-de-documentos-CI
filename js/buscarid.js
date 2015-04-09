function buscarId(){
	

	var buscada = "";


  
$("#busca2").click(function(){
  buscada = $("#buscaaqui").val();
 
   		 $('#arquivados li:not(li .arquivado'+buscada+')').hide(); 
 			

 			$('.arquivado'+buscada+'').fadeIn(); 
  });

   		


}