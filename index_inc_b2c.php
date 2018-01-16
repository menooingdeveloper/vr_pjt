<div ng-controller="cartCtrl">

<header> <div top-nav></div></header>

<link href="css/b2c.css<?php echo $jsTimeStamp ?>" rel="stylesheet">

<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">




<div class="row">
	<div class="col-lg-4" ng-repeat="x in menuList ">
	<img class="rounded-circle" src="http://menooing.com/img/menu/A001.png" alt="Generic placeholder image" width="140" height="140">
	<h2>{{x.sDesc}} </h2>
	<p>{{x.lDesc}} dfdfdfdfdfdllam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
	<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
	</div>
</div>





</main>


</div>


<script src="js/app.js<?php echo $jsTimeStamp ?>"></script>
<script src="js/controllers/CartCtrl.js<?php echo $jsTimeStamp ?>"></script>

<script src="js/services/MenuStorage.js<?php echo $jsTimeStamp ?>"></script>
<script src="js/directives/MenuList.js<?php echo $jsTimeStamp ?>"></script>


