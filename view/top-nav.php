
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a href="" id="logo" class="navbar-brand " title="Menooing" rel="home" itemprop="url"><img src="img/men_logo.png" class="custom-logo" alt="Menooing" itemprop="logo"></a>
<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<?php $timeStr = date("m/d/Y"); ?>
<ul class="navbar-nav mr-auto"><div class="pull-left">
                    <img src="https://apps.dashplatform.com/dash/share/images/user-placeholder-image-75x75.png?079e8c28a0a48f0a9c5dc1b7eca71c7d" alt="" class="name-badge profile-picture">
        </div>
<li class="nav-item active"  ><a class="nav-link"  ng-click="selectNav(x)">Test User <?echo $timeStr?></a></li>    
</ul-->

<!--ul class="navbar-nav mr-auto">
<li class="nav-item" ng-class="{active: x.itemSysNo == selNav.itemSysNo } "  ng-repeat="x in navList | filter: { type: 'N' } "  >
<a class="nav-link"  ng-click="selectNav(x)">{{x.name}}</a>
</li>   
</ul-->

<!--div class="collapse navbar-collapse" id="navbarsExampleDefault">
<div class="dropdown show">
<a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span>Account</span>
</a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item"  ng-class="{active: x.itemSysNo == selNav.itemSysNo } " ng-repeat="x in navList | filter: { type: 'P' } " ng-click="selectNav(x)" >VR [{{x.name}}] </a>
</div>
</div>

-->


<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<div class="dropdown show">
<a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span>Otehr Page</span>
</a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item"  ng-click="selectNav(x)" >B2B Login</a>
<a class="dropdown-item"  ng-click="selectNav(x)" >B2C Login</a>
<a class="dropdown-item"  ng-click="selectNav(x)" >B2C Search Menu</a>
<a class="dropdown-item"  ng-click="selectNav(x)" >B2C Cart</a>
<a class="dropdown-item"  ng-click="selectNav(x)" >B2C Check Out</a>
<a class="dropdown-item"  ng-click="selectNav(x)" >B2C Payment</a>
<a class="dropdown-item"  ng-click="selectNav(x)" >B2C Confirmation</a>

</div>
</div>

   
</ul>






<span>
  <form class="form-inline mt-2 mt-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</span>


</div>
</nav>



      
