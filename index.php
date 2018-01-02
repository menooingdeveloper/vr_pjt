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
<title>Menooing.com   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="css/style.css<?php echo $jsTimeStamp ?>" rel="stylesheet">
</head>

<body ng-app="menuApp"  ng-controller="menuCtrl">
<header> <div top-nav></div></header>

<div left-nav></div>


<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<BR>
<h1>{{selNav.name}}</h1>

<div ng-if="selNav.itemSysNo == 2" store-list></div>
<div ng-if="selNav.itemSysNo == 4" menu-list></div>
<div ng-if="selNav.itemSysNo == 3" type-list></div>

<div ng-if="selNav.itemSysNo == 11" profile-main></div>
<div ng-if="selNav.itemSysNo == 12" doc-main></div>
<div ng-if="selNav.itemSysNo == 91" user-list></div>

</main>



<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="js/app.js<?php echo $jsTimeStamp ?>"></script>
<script src="js/controllers/MenuCtrl.js<?php echo $jsTimeStamp ?>"></script>
<script src="js/services/MenuStorage.js<?php echo $jsTimeStamp ?>"></script>
<script src="js/directives/MenuList.js<?php echo $jsTimeStamp ?>"></script>


<!--


<script src="js/directives/MainItem.js"></script-->

  </body>
</html>
