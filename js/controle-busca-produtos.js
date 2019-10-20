angular.module("shop", []).controller("shop-controller", function($scope, $http){

	$scope.produtos_buscados = [];
	
	var initEstrelas = function(){

		$('.estrelas').each(function(){

     $(this).raty({
        starHalf:'lib/raty/lib/images/star-half.png',
        starOff :'lib/raty/lib/images/star-off.png',
        starOn  :'lib/raty/lib/images/star-on.png',
        score   : parseFloat($(this).data("score"))
         });

	  	});

	};
		
	$http({
	  method: 'GET',
	  url: 'produtos_buscados'
	}).then(function successCallback(response) {

	    $scope.produtos_buscados = response.data;
		setTimeout(initEstrelas, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

}); /*Fim do controle angular carousel owl */



