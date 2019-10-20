angular.module("shop", []).controller("mercadoria-controller", function($scope, $http){

	$scope.celulares = [];
	$scope.acessorios = [];
	
	var initCarousel = function(){

		$("#shop-cat-fone").owlCarousel({
	 
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
	

	
var owl = $('#shop-cat-fone');
owl.owlCarousel();
// Go to the next item
$('#btn-destaque-next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#btn-destaque-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
	};
	

var initCarousel2 = function(){

		$("#shop-cat-smartphones").owlCarousel({
	 
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
	

	
var owl = $('#shop-cat-smartphones');
owl.owlCarousel();
// Go to the next item
$('#btn-acessorio-next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#btn-acessorio-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
	};

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
	  url: 'acessorios'
	}).then(function successCallback(response) {

	    $scope.acessorios = response.data;
		
	    setTimeout(initCarousel2, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

}); /*Fim do controle angular carousel owl */


