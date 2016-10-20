partypack.config(function ($stateProvider, $urlRouterProvider, $httpProvider) {

	$urlRouterProvider.otherwise("/");

	$stateProvider

	.state("home", {
		url: "/",
		templateUrl: "app/pages/home.html",
		controller: "homeController as home"
	})

});