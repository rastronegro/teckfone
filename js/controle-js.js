$(document).ready(function(){	
	
$(".imagem-produto-p img").on("click",function(){
    $('li').click(function() {
        $(this).closest('ul').find('li').removeClass('efeito');
        $(this).addClass('efeito');
    });

    $(".img-produto").attr({
        "src":"_img/produto/"+$(this).data('produto')
    });
});
/*
	//------ inclusao de class drop em busca -------
$("#bnt-busca").on("click",function(){
			
	$("#pesquisa").toggleClass("drop");

	$('div #pesquisa').toggleClass('drop');
		
});

*/

//controle de decida aos contato
    $('nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 200
	}, 500);
});

//controle de subida ao topo
$('footer a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 500
	}, 500);
}); 

$(".menu-barras").on("click", function(){
			
			$("header").toggleClass("open-menu");
		});
		
$("#menu-mobile-mask, .btn-close").on("click", function(){
			
			$("header").removeClass("open-menu");
		});
		
$("#contato").on("click", function(){
			
			$("header").removeClass("open-menu");
		});
   
$('.estrelas').each(function(){
        
     $(this).raty({
        starHalf:'lib/raty/lib/images/star-half.png',
        starOff :'lib/raty/lib/images/star-off.png',
        starOn  :'lib/raty/lib/images/star-on.png',
        score   : parseFloat($(this).data("score"))
         });
    });
		
});