// Generated by CoffeeScript 1.6.3
gitWalrusApp.controller('HomepageController', function($scope, $http) {
  return $http.get('/api/branches').success(function(data) {
    return $scope.branches = data.items;
  });
});
