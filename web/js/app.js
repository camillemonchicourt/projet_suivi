var app = angular.module('appSuiviProtocoles', ['baseSites', 'baseObservations', 'suiviProtocoleServices']);

// module de gestion des sites
angular.module('baseSites', ['suiviProtocoleServices', 'ngRoute', 'ngTable']);

// module de gestion des observations
angular.module('baseObservations', ['suiviProtocoleServices', 'ngRoute', 'ngTable']);

// services de l'application
angular.module('suiviProtocoleServices', ['angularFileUpload']);

/*
 * Configuration des routes
 */
app.config(function($routeProvider){
    $routeProvider
        .when('/', {
            controller: 'baseController',
            templateUrl: 'js/templates/index.htm'
        })
        .otherwise({redirectTo: '/'});
});


/*
 * Controleur de base
 * TODO authentification
 */
app.controller('baseController', function($scope, dataServ, mapService){
    $scope._appName = 'chiro';
    $scope.success = function(resp){
        $scope.data = resp;
    };
    dataServ.get('config/apps', $scope.success);
});

