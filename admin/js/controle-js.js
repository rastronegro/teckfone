    $(document).ready(function(){
                      
$(".thumbnails").owlCarousel({
    stagePadding: 50,
    loop:true,
    //nav:true,
    //pontos:true,
    dotsEach:true,
    //dotsContainer:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});
$(".acessorios").owlCarousel({
    stagePadding: 50,
    loop:true,
    //margin:10,
    //nav:true,
    dotsEach:true,
    //navContainer:true,
    //dotsContainer:true,
    responsive:{
    0:{
    items:1
    },
    600:{
    items:2
    },
    1000:{
    items:4
    }
    }
});
$(".imagem-produto-p img").on("click",function(){
    $('li').click(function() {
        $(this).closest('ul').find('li').removeClass('efeito');
        $(this).addClass('efeito');
    });

    $(".img-produto").attr({
        "src":"_img/"+$(this).data("produto")+".jpg"
    });
});
        
    $('nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 200
	}, 500);
});
    });