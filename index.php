<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>MatchBOX - Coworking Studio - A shared place to work and create in Lafayette, Indiana</title>
<meta name="description" content="Coworking Studio - A shared place to work and create in Lafayette, Indiana" />
<meta name="keywords" content="coworking, co-working, cowork, co-work, office, shared, community, Lafayette, Indiana" />

<link rel="shortcut icon" href="favicon.ico" />

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800|Oswald:400,300,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/supersized.shutter.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/skeleton.css">
<link rel="stylesheet" href="assets/css/layout.css">
<link rel="stylesheet" href="assets/css/prettyPhoto.css">

<!-- COLOR CSS -->
<link id="default" rel="stylesheet" href="assets/css/mbx.css">


<!-- REVOLUTION BANNER CSS SETTINGS -->
<!--<link rel="stylesheet" type="text/css" href="assets/css/fullwidth.css" media="screen" />-->
<link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />

<!-- expanding membership application section -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>

<script>
function manageSection(sectionID) {

	var section = document.getElementById(sectionID);

	if(sectionID==='virtualTour') {
		var html = '<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1424526264707!6m8!1m7!1sVIUz6TEPGp8AAAQWtNuo5A!2m2!1d40.416799!2d-86.890355!3f128!4f0!5f1.4214797185029173" width="100%" height="700" frameborder="0" style="border:0"></iframe>';
		section.innerHTML = html;
	}	

	if (section.className == "collapsed"){
		section.className = "expanded";
	}
	else{
		section.className = "collapsed";				
		return true;
	}
}
</script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.css">
<style type="text/css">

.page-wrapper,.footer{
width: 100%;
position: relative;
}
#break3{
overflow: hidden;
}

</style>
<![endif]-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41745008-1', 'matchboxstudio.org');
ga('send', 'pageview');

</script>

<script>
function validateMembershipApp() {

	var errors = false;


	if (checkSingleItem(document.getElementById('appFullName'), document.getElementById('appFullNameError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appStreet'), document.getElementById('appStreetError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appEmail'), document.getElementById('appEmailError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appJob'), document.getElementById('appJobError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appWork'), document.getElementById('appWorkError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appOffer'), document.getElementById('appOfferError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appHear'), document.getElementById('appHearError')) == false)
	{
		errors = true;
	}

	if (checkSingleItem(document.getElementById('appRelationship'), document.getElementById('appRelationshipError')) == false)
	{
		errors = true;
	}

	if (document.getElementById('appPromise').checked == false)
	{
		var errorMessage_element = document.getElementById('appPromiseError');
		errorMessage_element.style.display = 'block';
		errorMessage_element.style.color = '#F05241';
		errors = true;
	}
	else
	{
		var errorMessage_element = document.getElementById('appPromiseError');
		errorMessage_element.style.display = 'none';
	}

	if (errors == true)
	{
		var errorMessage_element = document.getElementById('appErrorMessage');
		errorMessage_element.style.display = 'block';
		errorMessage_element.style.color = '#F05241';
		return false;
	}
	else
	{	
		document.forms['membershipForm'].submit();
	}
}

function checkSingleItem(item, errorMessage)
{
	if (item.value == "")
	{
		errorMessage.style.display = 'block';
		errorMessage.style.color = '#F05241';
		return false;
	}
	else
	{
		errorMessage.style.display = 'none';
		return true;
	}
}
</script>

</head>
<body>
<!-- Primary Page Layout
================================================== -->
<script type="text/javascript">
function moveTo(contentArea){
	var goPosition = $(contentArea).offset().top - 73;
	$('html,body').animate({ scrollTop: goPosition}, 'slow');
}


</script>




<div id="up"></div>



<section class="home">
<div class="overlay">
<div class="super">
<div style="width:100%;height:100%;min-height:100%;background-color:#000;text-align:center;margin:auto;">
<iframe src="//player.vimeo.com/video/76968901" width="1024" height="500" id="topVideo" style="width:100%; height:92%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
</div><!-- ./super -->
</div> <!-- ./overlay -->
</section> <!-- ./home -->




<section class="menu">
<div class="container">

<div class="sixteen columns clearfix">

<h1 class="logo"><a href="#up"><img src="assets/img/theme/logo.png" alt="MatchBOX logo"></a></h1>



<nav class="menu-holder">
<ul id="main-menu" class="menu-list">
<li class="active"><a href="#up">Home<span class="arrow"></span></a></li>
<li><a href="#about">About<span class="arrow"></span></a></li>
<li><a href="#services">Join<span class="arrow"></span></a></li>
<li><a href="#contact">Contact<span class="arrow"></span></a></li>
<li class="toggle-panel"><a href="#" class="closed"><i class="icon-plus"></i><span class="arrow"></span></a></li>
</ul>

<!-- SubMenu -->

<select size="1" id="subMenu" class="sub-menu" name="subMenu" onchange="moveTo(this.value)">
<option selected="selected" value="">Menu</option>
<option value="#up">- Top</option>
<option value="#about">- About</option> 
<option value="#services">- Join</option>
<option value="#contact">- Contact</option> 
</select>
</nav>



</div> <!-- ./sixteen columns -->


</div> <!-- ./container -->
</section> <!-- ./menu -->



<div class="page-wrapper" id="container">

<section id="about" class="about">

<div class="container">


<!-- SECTION TITLE -->




<div class="sixteen columns">

<!-- MESSAGE -->

<h2 class="message-block">
A shared place to <span>work and create</span>
</h2>
<!-- END MESSAGE -->


</div> <!-- ./sixteen columns -->
</div> <!-- ./container -->


<!-- SLIDER SECTION -->

<div class="slider-area">
<div class="fullwidthbanner-container" style="background:transparent !important;">
<div class="fullwidthbanner" style="background:transparent !important;">
<ul>
<!-- THE FIRST SLIDE -->
<li data-transition="3dcurtain-vertical" data-slotamount="5" data-masterspeed="300" data-thumb="assets/img/transparent.png">
<img src="assets/img/bg-back.png" alt="image title" >

<div class="caption lfr"  
data-x="523" 
data-y="5" 
data-speed="900" 
data-start="900" 
data-easing="easeInOutElastic"  ><img src="assets/img/247d.png" alt="24/7"></div>
<!--<div class="caption lfr"  
data-x="523" 
data-y="64" 
data-speed="900" 
data-start="900" 
data-easing="easeInOutElastic"  ><img src="assets/img/big-screen.png" alt="Image 4"></div>

<div class="caption lfr"  
data-x="360" 
data-y="190" 
data-speed="900" 
data-start="500" 
data-easing="easeInOutElastic" ><img src="assets/img/pad.png" alt="Image 4"></div>

<div class="caption lfr"  
data-x="510" 
data-y="280" 
data-speed="900" 
data-start="1300" 
data-easing="easeInOutElastic" ><img src="assets/img/phone.png" alt="Image 4"></div>
-->
<div class="caption color_big randomrotate"  
data-x="18" 
data-y="80" 
data-speed="300" 
data-start="1100" 
data-easing="easeOutExpo"  >24/7</div>

<!--<div class="caption small_text noshadow sft"  
data-x="95" 
data-y="150" 
data-speed="900" 
data-start="1300" 
data-easing="easeOutExpo">Coworking Studio</div>-->

<div class="caption black sfl"  
data-x="20" 
data-y="180" 
data-speed="900" 
data-start="1300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>24-hour secure access</div>

<div class="caption black sfl"  
data-x="20" 
data-y="205" 
data-speed="900" 
data-start="1700" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Conference rooms</div>

<div class="caption black sfl"  
data-x="20" 
data-y="230" 
data-speed="800" 
data-start="2000" 
data-easing="easeOutExpo"><i class="icon-ok"></i>The fastest internet in town</div>

<div class="caption black sfl"  
data-x="20" 
data-y="255" 
data-speed="800" 
data-start="2300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>An unlimited supply of coffee and snacks</div>
<!--
<div class="caption black sfl"  
data-x="20" 
data-y="280" 
data-speed="800" 
data-start="2600" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Whiteboards</div>

<div class="caption black sfl"  
data-x="20" 
data-y="305" 
data-speed="800" 
data-start="2900" 
data-easing="easeOutExpo"><i class="icon-plus"></i>Mentors</div>

<div class="caption sfb"  
data-x="20" 
data-y="350" 
data-speed="800" 
data-start="3200" 
data-easing="easeOutExpo"><a href="#" class="button grey">Apply Starting August 2013</a></div>-->
</li>

<!-- THE Second SLIDE -->
<li data-transition="3dcurtain-vertical" data-slotamount="5" data-masterspeed="300" data-thumb="assets/img/transparent.png">
<img src="assets/img/bg-back.png" alt="image title">


<div class="caption lfr"  
data-x="423" 
data-y="200" 
data-speed="900" 
data-start="900" 
data-easing="easeInOutElastic"  ><img src="assets/img/amateurtopro.png" alt="Hobbiest to Pro"></div>

<!-- <div class="caption lfr"  
data-x="360" 
data-y="190" 
data-speed="900" 
data-start="500" 
data-easing="easeInOutElastic" ><img src="assets/img/pad.png" alt="Image 4"></div>

<div class="caption lfr"  
data-x="510" 
data-y="280" 
data-speed="900" 
data-start="1300" 
data-easing="easeInOutElastic" ><img src="assets/img/phone.png" alt="Image 4"></div>
-->	
<div class="caption color_big randomrotate"  
data-x="20" 
data-y="95" 
data-speed="300" 
data-start="1100" 
data-easing="easeOutExpo"  >HOBBYIST + PROFESSIONAL</div>

<div class="caption black sfl"  
data-x="20" 
data-y="200" 
data-speed="900" 
data-start="1300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Start a new business  
</div>

<div class="caption black sfl"  
data-x="20" 
data-y="225" 
data-speed="900" 
data-start="1700" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Grow an existing business</div>

<div class="caption black sfl"  
data-x="20" 
data-y="250" 
data-speed="800" 
data-start="2000" 
data-easing="easeOutExpo"><i class="icon-ok"></i>The hobbyist with a crazy new idea</div>

<div class="caption black sfl"  
data-x="20" 
data-y="275" 
data-speed="800" 
data-start="2300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>The moonlighting entrepreneur</div>


<div class="caption black sfl"  
data-x="20" 
data-y="300" 
data-speed="700" 
data-start="2600" 
data-easing="easeOutExpo"><i class="icon-ok"></i>The professional office nomad</div>
<!--
<div class="caption sfb"  
data-x="20" 
data-y="350" 
data-speed="800" 
data-start="3200" 
data-easing="easeOutExpo"><a href="#" class="button grey">Apply Starting August 2013</a></div>-->
</li>

<!-- THE Third SLIDE -->
<li data-transition="3dcurtain-vertical" data-slotamount="5" data-masterspeed="300" data-thumb="assets/img/transparent.png">
<img src="assets/img/bg-back.png" alt="image title" >

<div class="caption lfr"  
data-x="623" 
data-y="100" 
data-speed="900" 
data-start="900" 
data-easing="easeInOutElastic"  ><img src="assets/img/Changemakers.png" alt="Changemakers"></div>
<!--<div class="caption lfr"  
data-x="523" 
data-y="64" 
data-speed="900" 
data-start="900" 
data-easing="easeInOutElastic"  ><img src="assets/img/big-screen.png" alt="Image 4"></div>

<div class="caption lfr"  
data-x="360" 
data-y="190" 
data-speed="900" 
data-start="500" 
data-easing="easeInOutElastic" ><img src="assets/img/pad.png" alt="Image 4"></div>

<div class="caption lfr"  
data-x="510" 
data-y="280" 
data-speed="900" 
data-start="1300" 
data-easing="easeInOutElastic" ><img src="assets/img/phone.png" alt="Image 4"></div>
-->
<div class="caption color_big randomrotate"  
data-x="18" 
data-y="80" 
data-speed="300" 
data-start="1100" 
data-easing="easeOutExpo"  >CREATIVE CLASS</div>

<!--<div class="caption small_text noshadow sft"  
data-x="95" 
data-y="150" 
data-speed="900" 
data-start="1300" 
data-easing="easeOutExpo">Coworking Studio</div>-->

<div class="caption black sfl"  
data-x="20" 
data-y="180" 
data-speed="900" 
data-start="1300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Developers, designers, strategists, artisans, writers, & makers</div>

<div class="caption black sfl"  
data-x="20" 
data-y="205" 
data-speed="900" 
data-start="1700" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Change-makers of all types</div>

<div class="caption black sfl"  
data-x="20" 
data-y="230" 
data-speed="800" 
data-start="2000" 
data-easing="easeOutExpo"><i class="icon-ok"></i>A home for the creative class</div>

<div class="caption black sfl"  
data-x="20" 
data-y="255" 
data-speed="800" 
data-start="2300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Lafayette, West Lafayette, and throughout the midwest</div>

<!--  <div class="caption black sfl"  
data-x="20" 
data-y="280" 
data-speed="800" 
data-start="2600" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Whiteboards</div>

<div class="caption black sfl"  
data-x="20" 
data-y="305" 
data-speed="800" 
data-start="2900" 
data-easing="easeOutExpo"><i class="icon-plus"></i>Mentors</div>

<div class="caption sfb"  
data-x="20" 
data-y="350" 
data-speed="800" 
data-start="3200" 
data-easing="easeOutExpo"><a href="#" class="button grey">Apply Starting August 2013</a></div>-->
</li>

<!-- THE Fourth SLIDE -->
<li data-transition="3dcurtain-vertical" data-slotamount="5" data-masterspeed="300" data-thumb="assets/img/transparent.png">
<img src="assets/img/bg-back.png" alt="image title">


<div class="caption lfr"  
data-x="723" 
data-y="100" 
data-speed="900" 
data-start="900" 
data-easing="easeInOutElastic"  ><img src="assets/img/LeaveTie.png" alt="Leave your tie"></div>

<!-- <div class="caption lfr"  
data-x="360" 
data-y="190" 
data-speed="900" 
data-start="500" 
data-easing="easeInOutElastic" ><img src="assets/img/pad.png" alt="Image 4"></div>

<div class="caption lfr"  
data-x="510" 
data-y="280" 
data-speed="900" 
data-start="1300" 
data-easing="easeInOutElastic" ><img src="assets/img/phone.png" alt="Image 4"></div>
-->	
<div class="caption color_big randomrotate"  
data-x="20" 
data-y="95" 
data-speed="300" 
data-start="1100" 
data-easing="easeOutExpo"  >LEAVE YOUR TIE</div>

<div class="caption black sfl"  
data-x="20" 
data-y="175" 
data-speed="900" 
data-start="1300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Bring a laptop or a backpack</div>

<div class="caption black sfl"  
data-x="20" 
data-y="200" 
data-speed="900" 
data-start="1700" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Find a place to work for a few hours, or reserve your own desk and chair</div>

<div class="caption black sfl"  
data-x="20" 
data-y="225" 
data-speed="800" 
data-start="2000" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Put on your headphones and work undisturbed all night long</div>

<div class="caption black sfl"  
data-x="20" 
data-y="250" 
data-speed="800" 
data-start="2300" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Ask a desk neighbor for some advice</div>

<div class="caption black sfl"  
data-x="20" 
data-y="275" 
data-speed="700" 
data-start="2400" 
data-easing="easeOutExpo"><i class="icon-ok"></i>Grab some coffee at the bar with an advisor</div>


<!--<div class="caption sfb"  
data-x="20" 
data-y="350" 
data-speed="800" 
data-start="3200" 
data-easing="easeOutExpo"><a href="#" class="button grey">Apply Starting August 2013</a></div>-->
</li>
</ul>

</div>
</div>
</div>

<!-- END SLIDER SECTION -->


<div class="container">

<div class="eight columns">
<h3>coffee shop + office park + garage</h3>
<p>
MatchBOX is a place to work for those who don't have places to work. Think of a coffee shop mashed up with an office park in an old garage. It's a room full of desks with all the amenities you need to get work done: 24-hour secure access, conference rooms, the fastest internet in town, and an unlimited supply of coffee and snacks. 
</p><p>
It's a great place to start a new business, or to grow an existing small business. It's for the hobbyist with a crazy new idea, the moonlighting entrepreneur, or the professional office nomad. It's for developers, designers, strategists, artisans, writers, makers, and change-makers of all types. It's a home for the creative class in Lafayette, West Lafayette, and throughout the midwest.
</p>
</div>

<div class="eight columns">
<h3>&nbsp;</h3>
<p>
Bring a laptop or a backpack, but leave your tie at home. Find a place to work for a few hours, or reserve your own desk and chair. Put on your headphones and work undisturbed all night long, or ask a desk neighbor for some advice or grab some coffee at the bar with an advisor. The space is about the people there, and we only ask that you be willing to contribute to the success of the others around you.
</p><p>
We have a box. We're looking for matches...people with a dream about to catch on fire. We want to make it easy for you to work, help you collaborate, and stoke the flames.
</p>
</div>

<div class="sixteen columns">
<h3>Keep me in the loop</h3>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://matchboxstudio.us3.list-manage1.com/subscribe/post?u=c67a5fc059dc82356ce82a801&amp;id=ff9857df65" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="mc-field-group">
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email address">
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>
<a href="#" class="button mbxred" onclick="document.forms['mc-embedded-subscribe-form'].submit();">Subscribe</a>

</form>
</div>

<!--End mc_embed_signup-->

</div>

<div class="sixteen columns">
<img class="fullimage" src="assets/img/Rendering.png" alt="3D Rendering of MatchBOX" />
</div>

<a href="#virtualTour" class="button mbxred" onclick="return manageSection('virtualTour')">See the Virtual Tour</a>

<!-- Team member stuff could go here at some point-->

</section> <!-- ./about -->
<div id="virtualTour" class="collapsed">


</div>
<!-- PARALLAX -->

<section class="para" id="break1">
<div class="overlay">
<div class="container message">
<p class="quote-block">
<img class="fullimage" src="assets/img/Equation-3.png" alt="Group work function" /><br />
The group generated by work is greater than the sum of elements in the group.<span><br />-Tennenhouse</span>
</p>
</div>
</div>
</section>


<!-- END PARALLAX -->


<!-- SERVICES -->

<section id="services" class="services">
<div class="container">



<!-- MESSAGE -->

<h2 class="sixteen columns message-block">
<a href="#app" class="button mbxred" onclick="return manageSection('membershipApplication');return false">Apply to become a member</a> Limited spots by application only.
</h2>

<!-- END MESSAGE -->
<br class="clear">


<div class="sixteen columns">
<style>
.pricing {
  font-family: "Montserrat", Gotham, sans-serif;
  text-align: center;
}
.pricing .teir {
  display: inline-block;
  vertical-align: top;
  margin: 2%;
  min-width: 200px;
}
.pricing .teir.main {
  min-width: 300px;
  margin-top: 0;
}
.pricing .teir.main header {
  font-size: 25px;
line-height:30px;
height:60px;
}
.pricing .teir.main .content li {
  font-size: 20px;
}
.pricing .teir.main .cost {
  font-size: 18px;
}
.pricing .teir.main .cost strong {
  font-weight: 700;
  font-size: 30px;
}
.pricing .teir.main .cost .dollar {
  font-size: 18px;
  padding: 2px;
  vertical-align: top;
}
.pricing .teir.main .cost small {
  font-size: 15px;
}
.pricing .cost {
  font-family: "Source Sans Pro", sans-serif;
  margin: 15%;
  white-space: nowrap;
  font-size: 15px;
}
.pricing .cost strong {
  font-family: "Montserrat", Gotham, sans-serif;
  font-weight: 400;
  font-size: 20px;
  vertical-align: middle;
}
.pricing .cost .text {
  vertical-align: middle;
}
.pricing .cost .dollar {
  font-size: 14px;
  padding: 2px;
  vertical-align: top;
}
.pricing .cost small {
  font-size: 11px;
}
.pricing .box {
  text-align: center;
  min-width: 150px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3);
  margin-top: 25px;
}
.pricing .box header {
  font-weight: 400;
  font-size: 20px;
  color: #fff;
  background: #000;
  height: 40px;
  line-height: 20px;
  padding: 5%;
}
.pricing .box .content {
  font-family: "Source Sans Pro", sans-serif;
  list-style: none;
  margin: 0;
  padding: 2% 20%;
  font-weight: 300;
  min-height: 120px;
}
.pricing .box .content li {
  line-height: 1.5em;
  font-size: 15px;
}

</style>
<div class="pricing">
  <div class="main teir">
    <div class="box" id="basic">
      <header>BASIC</header>
      <ul class="content">
        <li>New Desk Each Visit</li>
        <li>Gigabit Fiber</li>
        <li>Wireless</li>
        <li>24/7 Access</li>
        <li>Coffee Bar & Snacks</li>
        <li>Event Access</li>
        <li>Conference Rooms</li>
        <li>Lockers</li>
      </ul>
    </div>
    <div class="cost">
      <span class="dollar">$</span><strong>360</strong> <span class="text">/member/year</span><br /><br /><small>[+ $99 setup fee]</small>
    </div>
  </div>
  <div class="teir">
    <div class="box" id="basic">
      <header>RESERVED*</header>
      <ul class="content">
        <li>BASIC+</li>
        <li>Reserved Desk</li>
        <li>Reserved Chair</li>
        <li>Personal Cabinet</li>
        <li>1Gb Port</li>
      </ul>
    </div>
    <div class="cost">
      <span class="dollar">$</span><strong>150</strong> <span class="text">/member/month</span><br /><small>[billed monthly, requires BASIC]</small><br /><br /><small>*limited spots available.</small>
    </div>
  </div>
  <div class="teir">
    <div class="box" id="basic">
      <header>LAB</header>
      <ul class="content">
        <li>BASIC+</li>
        <li>Shop Access</li>
        <li>3D Printing</li>
        <li>Laser Cutting</li>
        <li>Tools</li>
      </ul>
    </div>
    <div class="cost">
      <span class="dollar">$</span><strong>25</strong> <span class="text">/member/month</span><br /><small>[billed monthly, requires BASIC]</small>
    </div>
  </div>
</div>
</div>

<br class="clear">

<div class="sixteen columns">
<hr/>
</div>

<section id="app">
<div class="sixteen columns">
<div id="membershipApplication" class="collapsed">
<h3>How does this work?</h3>
<ol>
<li>Fill out the app below carefully and completely </li>
<li>We will review to make sure MatchBOX is a good fit for your needs. Either way, we'll email you within a couple weeks.</li>
<li>If accepted, we will email you a membership agreement and set up an orientation</li>
</ol>
<h3>Application:</h3>

<form action="thanks.php" method="post" id="membershipForm">
<label for="appFullName">Name</label>
<label for="appFullName" id="appFullNameError" style="display: none;">You've got a name, right? Put it here.</label>				
<input type="text" id="appFullName" name="appFullName" placeholder="" maxlength=255 required/>

<label for="appStreet">Mailing Address</label>
<label for="appStreet" id="appStreetError" style="display: none;">We might want to send you a postcard from our vacation.</label>				
<input type="text" id="appStreet" name="appStreet" placeholder="" maxlength=255 required/>

<label for="appEmail">Email</label>				
<label for="appEmail" id="appEmailError" style="display: none;">No SPAM, we promise.</label>
<input type="text" id="appEmail" name="appEmail" placeholder="" maxlength=255 required/>

<style type='text/css'>
#other_email_label, #other_email {
	display: none;
}
</style>

<label id='other_email_label' for='other_email'>Please leave blank:</label>
<input type='text' name='other_email' id='other_email'>

<label for="appMembershipType">What type of membership are you interested in? <a href="#services">See pricing info</a></label>
<select id="appMembershipType" name="appMembershipType">
<option>Basic</option>
<option>Reserved</option>
<option>Workbench</option>
</select>
<hr />

<label for="appJob">What are you <em>currently</em> working on?<br />(company name and current position if you have one)</label>
<label for="appJob" id="appJobError" style="display: none;">An idea, a company, a project, or the great american novel.</label>
<input type="text" id="appJob" name="appJob" placeholder="" maxlength=255 required/>

<label for="appWork">What do you hope to work on while in MatchBOX?</label>	
<label for="appWork" id="appWorkError" style="display: none;">What's next that MatchBOX can help out with.</label>
<textarea id="appWork" name="appWork" maxlength=4000></textarea>

<label for="appOffer">What do you have to offer the MatchBOX community?<br />(What are you good at? What are you experienced in? Have you worked on anything we’d recognize?)</label>				
<label for="appOffer" id="appOfferError" style="display: none;">Everybody brings something to the table. What's yours?</label>
<textarea id="appOffer" name="appOffer" maxlength=4000/></textarea>

<hr />

<label for="appHear">How did you hear about us?<br />(If you were referred by a current member, please tell us who)</label>	
<label for="appHear" id="appHearError" style="display: none;">Twitter, Facebook, or maybe you talked to a real human being?</label>			
<input type="text" id="appHear" name="appHear" placeholder="" maxlength=255 required/>

<label for="appRelationship">Tell us anything else we should know- impress us. Do you have an online presence or examples of your past work?</label>				
<label for="appRelationship" id="appRelationshipError" style="display: none;">Here's your chance to show off a little.</label>
<textarea id="appRelationship" name="appRelationship" maxlength=4000/></textarea>

<label for="appPromise" id="appPromiseError" style="display: none;">We need you to check this little box. Is that too much to ask?</label>
<input type="checkbox" id="appPromise" name="appPromise" required/>
<label>I promise all this info above is true. I also understand that not all applicants will be offered membership, and trust there are good folks making these difficult decisions carefully. I promise to harbor no hard feelings and won’t egg their cars.</label>
<br />

<label id="appErrorMessage" style="display: none;">It looks like there was a problem. Check above.</label>																						
<a href="#" class="button mbxred" onclick="validateMembershipApp();return false">Submit</a>

</form>
</div>
</div>
</section>

</div><!-- ./container -->

</section><!-- ./about -->




<!-- END SERVICES -->


<!-- PARALLAX -->

<section class="para" id="break2">
<div class="overlay">
<div class="container message">
<p class="quote-block">I do not think there is any thrill that can go through the human heart like that felt by the inventor as he sees some creation of the brain unfolding to success.
<span><br />-Tesla</span></p>
</div>
</div>
</section>


<!-- END PARALLAX -->


<!-- CONTACT -->

<section id="contact" class="contact">
<div class="container">
<!-- MESSAGE -->
<div class="sixteen columns">
<h2 class="message-block">
Don't be shy, you can ask us <span>anything</span>.
</h2>

<!-- END MESSAGE -->

<!-- MAP -->
<div class="map-wrap">
<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=17+S+6th+St,+Lafayette,+IN&amp;aq=0&amp;oq=17+S+6th&amp;sll=40.452656,-86.916843&amp;sspn=0.089216,0.147972&amp;ie=UTF8&amp;hq=&amp;hnear=17+S+6th+St,+Lafayette,+Tippecanoe,+Indiana+47901&amp;ll=40.42671,-86.890329&amp;spn=0.011158,0.018497&amp;t=m&amp;z=14&amp;output=embed"></iframe>

<div class="mobile-fix"></div>
</div>


<hr/>
</div>

<div class="eight columns">

<div class="four columns alpha">

<!-- CONTACT INFO -->

<ul class="contact-info">
<li class="name"><i class="icon-user"></i>MatchBOX Coworking Studio, LLC</li>
<li class="address"><i class="icon-home"></i>
<span>17 South 6th St., Suite X<br/>
Stein Building<br />
Lafayette, IN 47901<br />
</span>

</li>
<li class="email"><i class="icon-envelope-alt"></i><a href="mailto:hello@matchboxstudio.org">hello@MatchBOXStudio.org</a></li>
<li class="phone"><i class="icon-phone"></i>765.588.9295</li>

</ul>

<!-- END CONTACTINFO -->


</div>

<div class="four columns omega">

<!-- SOCIAL -->
<div class="social">
<a href="http://twitter.com/matchboxcowork"><i class="icon-twitter"></i></a>
<a href="http://facebook.com/matchboxcowork"><i class="icon-facebook"></i></a>
<span class="arrow"></span>
</div>
</div>
</div>

<br class="clear">


</div><!-- ./container -->

<div class="container">

<div class="sixteen columns">
<div class="heading">
<h3><br /><br />With a little help from our friends</h3>
</div>
<style>
.carousel {
overflow:hidden;
position:relative;	
}
.carousel ul {
    width: 100%;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
}

.carousel li {
display:inline-block;
float:left;
text-align:center;
}
</style>
<script>
$(document).ready(function() {
var width = $(".carousel ul").width();
$(".carousel ul").width(width*$(".carousel li").length);
$(".carousel li").each(function(i, elem) {
	$(elem).width(width);
});
var i = 0;
function slide() {
	setTimeout(function() {
	i++;
	if(i==$(".carousel li").length) {
		i=0;
	}
	$(".carousel ul").animate({left:  -1*width*i}, 500, function() {
		slide();
	});
	}, 2000);
}
slide();
});
</script>
<div class="carousel">
<ul>
<!--<li><a href="http://www.lafayette.in.gov/" target="_blank"><img src="assets/img/Laf-Logo50.png" alt="City of Lafayette"></a></li>
<li><a href="http://www.tippecanoe.in.gov/" target="_blank"><img src="assets/img/county-logo.png" alt="Tippecanoe County"></a></li>
<li><a href="http://www.tcpl.lib.in.us/" target="_blank"><img src="assets/img/TCPL50.png" alt="Tippecanoe County Public Library"></a></li>
<li><a href="http://www.greaterlafayettecommerce.com/" target="_blank"><img src="assets/img/GLC50.png" alt="Greater Lafayette Commerce"></a></li>		
<li><a href="http://www.ivytech.edu/" target="_blank"><img src="assets/img/IvyTechLogo.png" alt="Ivy Tech"></a></li>
<li><a href="http://wintek.com" target="_blank"><img src="assets/img/Wintek.png" alt="Wintek" height=35></a></li>
<li><a href="http://lafayettech.org" target="_blank"><img src="assets/img/LT50.png" alt="Lafayettech" height=35></a></li>
<li><a href="http://blankfilmproduction.com" target="_blank"><img src="assets/img/BlankFilmProduction50.png" alt="Blank Film Production"></a></li>
<li><a href="http://brianpowell.info/" target="_blank"><img src="assets/img/BP_logo_small.png" alt="Brian Powell Photography"></a></li>-->

<li><img src="assets/img/1st-Source.png" alt="Sponsor"></li>
<li><img src="assets/img/Alcoa.png" alt="Sponsor"></li>
<li><img src="assets/img/catpllr.png" alt="Sponsor"></li>
<li><img src="assets/img/Centier_Bank.png" alt="Sponsor"></li>
<li><img src="assets/img/Cook_Medical.png" alt="Sponsor"></li>
<li><img src="assets/img/CopperMoon.png" alt="Sponsor"></li>
<li><img src="assets/img/Duke.png" alt="Sponsor"></li>
<li><img src="assets/img/First-Financial.png" alt="Sponsor"></li>
<li><img src="assets/img/Foundry.png" alt="Sponsor"></li>
<li><img src="assets/img/FreshCity.png" alt="Sponsor"></li>
<li><img src="assets/img/OldNationalBank.png" alt=Sponsor"></li>
<li><img src="assets/img/GLC.png" alt="Sponsor"></li>
<li><img src="assets/img/Gutwein.png" alt="Sponsor"></li>
<li><img src="assets/img/HarborFreight.png" alt="Sponsor"></li>
<li><img src="assets/img/Henriott.png" alt="Sponsor"></li>
<li><img src="assets/img/Huth-Thompson.png" alt="Sponsor"></li>
<li><img src="assets/img/Ivy-Tech.png" alt="Sponsor"></li>
<li><img src="assets/img/Kettlehut.png" alt="Sponsor"></li>
<li><img src="assets/img/Kirby-Risk.png" alt="Sponsor"></li>
<li><img src="assets/img/Laf-Community-Bank.png" alt="Sponsor"></li>
<li><img src="assets/img/LafayetTECH.png" alt="Sponsor"></li>
<li><img src="assets/img/LafayetteLogo.png" alt="Sponsor"></li>
<li><img src="assets/img/lg_wintek.png" alt="Sponsor"></li>
<li><img src="assets/img/LUEA.png" alt="Sponsor"></li>
<li><img src="assets/img/MBAH.png" alt="Sponsor"></li>
<li><img src="assets/img/Nanshan.png" alt="Sponsor"></li>
<li><img src="assets/img/School-Datebooks.png" alt="Sponsor"></li>
<li><img src="assets/img/SIA-logo-black-copy.png" alt="Sponsor"></li>
<li><img src="assets/img/Stormfront_logo.png" alt="Sponsor"></li>
<li><img src="assets/img/Stuart-and-Branigin.png" alt="Sponsor"></li>
<li><img src="assets/img/Tate-and-Lyle.png" alt="Sponsor"></li>
<li><img src="assets/img/TBIRD-Logo.png" alt="Sponsor"></li>
<li><img src="assets/img/TCPL.png" alt="Sponsor"></li>
<li><img src="assets/img/Tippecanoe-County-Logo.png" alt="Sponsor"></li>
<li><img src="assets/img/Wabash.png" alt="Sponsor"></li>

</ul>
</div>
</div>
</div>

</section><!-- ./about -->

</div> <!-- ./page-wrapper -->

<!-- Panel -->

<section class="slide-panel">
<style>
.user, .interact {
  display:none;
}

.panel-wrap {
position: relative;
overflow: hidden;
padding: 36px 0 54px 0;
}

.container .one-third.column {
width: 300px;
}
.tweet {
	height:50px;
}

.container .column, .container .columns {
float: left;
display: inline;
margin-left: 10px;
margin-right: 10px;
}
</style>
<script>
/*********************************************************************
*  #### Twitter Post Fetcher v10.0 ####
*  Coded by Jason Mayes 2013. A present to all the developers out there.
*  www.jasonmayes.com
*  Please keep this disclaimer with my code if you use it. Thanks. :-)
*  Got feedback or questions, ask here: 
*  http://www.jasonmayes.com/projects/twitterApi/
*  Updates will be posted to this site.
*********************************************************************/
var twitterFetcher = function() {
    function x(e) {
        return e.replace(/<b[^>]*>(.*?)<\/b>/gi, function(c, e) {
            return e
        }).replace(/class=".*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi, "")
    }

    function p(e, c) {
        for (var g = [], f = RegExp("(^| )" + c + "( |$)"), a = e.getElementsByTagName("*"), h = 0, d = a.length; h < d; h++) f.test(a[h].className) && g.push(a[h]);
        return g
    }
    var y = "",
        l = 20,
        s = !0,
        k = [],
        t = !1,
        q = !0,
        r = !0,
        u = null,
        v = !0,
        z = !0,
        w = null,
        A = !0;
    return {
        fetch: function(e, c, g, f, a, h, d, b, m, n) {
            void 0 === g && (g = 20);
            void 0 === f && (s = !0);
            void 0 === a && (a = !0);
            void 0 === h && (h = !0);
            void 0 === d && (d = "default");
            void 0 === b && (b = !0);
            void 0 === m && (m = null);
            void 0 === n && (n = !0);
            t ? k.push({
                id: e,
                domId: c,
                maxTweets: g,
                enableLinks: f,
                showUser: a,
                showTime: h,
                dateFunction: d,
                showRt: b,
                customCallback: m,
                showInteraction: n
            }) : (t = !0, y = c, l = g, s = f, r = a, q = h, z = b, u = d, w = m, A = n, c = document.createElement("script"), c.type = "text/javascript", c.src = "//cdn.syndication.twimg.com/widgets/timelines/" + e + "?&lang=en&callback=twitterFetcher.callback&suppress_response_codes=true&rnd=" + Math.random(), document.getElementsByTagName("head")[0].appendChild(c))
        },
        callback: function(e) {
            var c = document.createElement("div");
            c.innerHTML = e.body;
            "undefined" === typeof c.getElementsByClassName && (v = !1);
            e = [];
            var g = [],
                f = [],
                a = [],
                h = [],
                d = 0;
            if (v)
                for (c = c.getElementsByClassName("tweet"); d < c.length;) {
                    0 < c[d].getElementsByClassName("retweet-credit").length ? a.push(!0) : a.push(!1);
                    if (!a[d] || a[d] && z) e.push(c[d].getElementsByClassName("e-entry-title")[0]), h.push(c[d].getAttribute("data-tweet-id")), g.push(c[d].getElementsByClassName("p-author")[0]), f.push(c[d].getElementsByClassName("dt-updated")[0]);
                    d++
                } else
                    for (c = p(c, "tweet"); d < c.length;) e.push(p(c[d], "e-entry-title")[0]), h.push(c[d].getAttribute("data-tweet-id")), g.push(p(c[d], "p-author")[0]), f.push(p(c[d], "dt-updated")[0]), 0 < p(c[d], "retweet-credit").length ? a.push(!0) : a.push(!1), d++;
            e.length > l && (e.splice(l, e.length - l), g.splice(l, g.length - l), f.splice(l, f.length - l), a.splice(l, a.length - l));
            c = [];
            d = e.length;
            for (a = 0; a < d;) {
                if ("string" !== typeof u) {
                    var b = new Date(f[a].getAttribute("datetime").replace(/-/g, "/").replace("T", " ").split("+")[0]),
                        b = u(b);
                    f[a].setAttribute("aria-label", b);
                    if (e[a].innerText)
                        if (v) f[a].innerText = b;
                        else {
                            var m = document.createElement("p"),
                                n = document.createTextNode(b);
                            m.appendChild(n);
                            m.setAttribute("aria-label", b);
                            f[a] = m
                        } else f[a].textContent = b
                }
                b = "";
                s ? (r && (b += '<div class="user">' + x(g[a].innerHTML) + "</div>"), b += '<p class="tweet">' + x(e[a].innerHTML) + "</p>", q && (b += '<p class="timePosted">' + f[a].getAttribute("aria-label") + "</p>")) : e[a].innerText ? (r && (b += '<p class="user">' + g[a].innerText + "</p>"), b += '<p class="tweet">' + e[a].innerText +
                    "</p>", q && (b += '<p class="timePosted">' + f[a].innerText + "</p>")) : (r && (b += '<p class="user">' + g[a].textContent + "</p>"), b += '<p class="tweet">' + e[a].textContent + "</p>", q && (b += '<p class="timePosted">' + f[a].textContent + "</p>"));
                A && (b += '<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to=' + h[a] + '" class="twitter_reply_icon">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id=' + h[a] + '" class="twitter_retweet_icon">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id=' +
                    h[a] + '" class="twitter_fav_icon">Favorite</a></p>');
                c.push(b);
                a++
            }
            if (null == w) {
                e = c.length;
                g = 0;
                f = document.getElementById(y);
                for (h = "<div class='panel-wrap'>"; g < e;) h += "<div class='one-third column'>" + c[g] + "</div>", g++;
                f.innerHTML = h + "<span class='toggle'><i class='icon-minus'></i></span></div>"
            } else w(c);
            t = !1;
            0 < k.length && (twitterFetcher.fetch(k[0].id, k[0].domId, k[0].maxTweets, k[0].enableLinks, k[0].showUser, k[0].showTime, k[0].dateFunction, k[0].showRt, k[0].customCallback, k[0].showInteraction), k.splice(0, 1))
        }
    }
}();

twitterFetcher.fetch('527241252203286530', 'latestTweets', 3, true, true, true);
</script>
<div id="latestTweets" class="container"></div>
<!--<div class="container">
<div class="panel-wrap">

<div class="one-third column">
<h3>About MatchBOX</h3>
<p>MatchBOX is a coworking studio in Lafayette, Indiana.</p>

</div>


<div class="one-third column">
<h3>MatchBOX</h3>
<ul class="list">
<li class="last">The group generated by work is greater than the sum of elements in the group. -Tennenhouse</li>
</ul>
</div>
<div class="one-third column">
<h3>Coworking</h3>
<ul class="list">
<li class="last">I have not failed, I have just found 10,000 ways that will not work. -Edison</li>
</ul>
</div>
<div class="one-third column">
<h3>Studio</h3>
<ul class="list">
<li class="last">Rather than no, because...yes, if. -Buzz</li>
</ul>
</div>


<div class="one-third column">
<h3>Flickr Photos</h3>
<div id="flickrImages" class="flickr"></div>
</div>
-->
<span class="toggle"><i class="icon-minus"></i></span>
</div>
</div>
</section>

<!-- FOOTER -->

<section class="footer">
<div class="container">
<div class="sixteen columns">
MatchBOX Coworking Studio &copy; All Rights Reserved
</div>
</div>
</section>

<!-- End Document
================================================== -->




<!-- JS
================================================== -->

<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.1/jquery.jcarousel.min.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/supersized.3.2.7.js"></script>
<script src="assets/js/supersized.shutter.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/main.js"></script>





</body>
</html>











