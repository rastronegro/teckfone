angular.module("shop", []).controller("mercadoria-controller", function($scope, $http){

	$scope.celulares = [];
	$scope.carregadores = [];
	$scope.acessorios = [];
	
	var initCarousel = function(){

		$("#shop-cat-celular").owlCarousel({
	 
	      autoPlay	: 5000,
	      loop		: true,
		  dotsEach	: true,
		  singleItem: true,
		  responsive: {
        0:{
            items:1
		},
		600:{
            items:2
        },
        900:{
            items:3
        },
        1000:{
            items:4
        }}
	 
	  	});
	

	
var owl = $('#shop-cat-celular');
owl.owlCarousel();
$('#btn-celular-next').click(function() {
    owl.trigger('next.owl.carousel');
})
$('#btn-celular-prev').click(function() {
    owl.trigger('prev.owl.carousel', [300]);
})
	}; /*fim celular*/
	

var initCarousel2 = function(){

		$("#shop-cat-carregadores").owlCarousel({
	 
	      autoPlay	: 5000,
	      loop		: true,
		  dotsEach	: true,
		  singleItem: true,
		  responsive: {
        0:{
            items:1
		},
		600:{
            items:2
        },
        900:{
            items:3
        },
        1000:{
            items:4
        }}
	 
	  	});

var owl = $('#shop-cat-carregadores');
owl.owlCarousel();
// Go to the next item
$('#btn-carregadores-next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#btn-carregadores-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
	}; /*fim carregador*/
	
var initCarousel3 = function(){

		$("#shop-cat-acessorios").owlCarousel({
	 
	      autoPlay	: 5000,
	      loop		: true,
		  dotsEach	: true,
		  singleItem: true,
		  responsive: {
        0:{
            items:1
		},
		600:{
            items:2
        },
        900:{
            items:3
        },
        1000:{
            items:4
        }}
	 
	  	});
	

	
var owl = $('#shop-cat-acessorios');
owl.owlCarousel();
// Go to the next item
$('#btn-acessorios-next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#btn-acessorios-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
	})
}; /*fim acessorios*/
	

	$http({
	  method: 'GET',
	  url: 'celulares'
	}).then(function successCallback(response) {

	    $scope.celulares = response.data;
		
	    setTimeout(initCarousel, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });
	
		$http({
	  method: 'GET',
	  url: 'carregadores'
	}).then(function successCallback(response) {

	    $scope.carregadores = response.data;
		
	    setTimeout(initCarousel2, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });
	
	$http({
	  method: 'GET',
	  url: 'acessorios'
	}).then(function successCallback(response) {

	    $scope.acessorios = response.data;
		
	    setTimeout(initCarousel3, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

}); /*Fim do controle angular carousel owl */


