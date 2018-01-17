<?php $timeStr = time() + (7 * 24 * 60 * 60) ;
$jsTimeStamp = '?version=v-'.$timeStr;
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">
<title>Korean Developer Community@DFW   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>

<body ng-app="menuApp"  ng-controller="menuCtrl">

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

  </nav>
</header>


  <main role="main">
    <br><br><br>


<div class="container">




  <p>
  <button type="button" class="btn btn-primary" ng-click="copySendMSG()">Job</button>
 
  </p>

  <table class="table table-striped">
  <tbody>
  <tr ng-repeat="x in _users  |   orderBy:'-c9'" >

  <td>{{$index+1}}-{{x.c1}}-{{x.c2}}-{{x.c3}}-{{x.c4}}-{{x.c5}}-{{x.c6}}-{{x.c7}}-{{x.c8}}-{{x.c9}}</td>
 
  </tr>
  </tbody>
  </table>


<input id=myInput type=text ng-model="selObj.val" >


</main>



<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script>
var app = angular.module('menuApp', []);
app.controller('menuCtrl', function($scope, $http) {
  $scope._mode = 'LIST';
  $scope._error_msg = "";
  $scope.selObj = {c_id:0};
  $scope.pinObj = {val:""};





  $scope._users = [

  ];


 
  $scope.copySendMSG = function(typeStr) { 
    //console.log(rec);

    var smsStr = "";
    var i =0;

    angular.forEach($scope._users, function(x, key) {
      var recC1 = x.c2;
      var recC2 = x.c4;
      if ( typeStr == "MMS"){
        recC2 = x.c3;
      }
      if (recC1 == "" || recC2 == "") return;
      if (i != 0) { smsStr += ", "; }
      
      smsStr += recC1 + '<' + recC2 + '>' ; 
      i++;
    });

    $scope.selObj.val  =  smsStr;


    var copyText = document.getElementById("myInput");
    console.log(copyText );
    if ( copyText.value === "") return;
    copyText.select();
    document.execCommand("Copy");
   // alert("Copied the text: " + copyText.value);

/*
var formattedBody = "FirstLine \n Second Line \n Third Line";
var mailToLink = "mailto:" + copyText.value + "?body=dfdfdfd" + encodeURIComponent(formattedBody);
window.location.href = mailToLink;
*/

    
  }


  $scope.getList = function() { 

    var dataObj = {mode_type:"LIST"};

    $http({
        method : "POST",url: '../action/',data: dataObj
    }).then(function mySuccess(response) {
        $scope._users = response.data.list;
    }, function myError(response) {
        
    });



  }


$scope.getList();








});
  

</script>


<!--


<script src="js/directives/MainItem.js"></script-->

  </body>
</html>
