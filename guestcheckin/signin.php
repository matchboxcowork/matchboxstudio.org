<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'mbx_user';

/*** mysql password ***/
$password = 'redacted';

try {

// other_email must be blank, if it isn't this is probably spam submission
if ($_POST['other_email'] == '')
{

    $dbh = new PDO("mysql:host=$hostname;dbname=mbx", $username, $password);
    /*** echo a message saying we have connected ***/
   
     /*** INSERT data ***/
//    $sql = $dbh->prepare("INSERT INTO applications(FullName, Job, Work, MembershipType, Street, City, State, Zip, Phone, Email, Website, Twitter, SkillSet, Hear, Refer, Offer, Relationship) VALUES (:FullName, :Job, :Work, :MembershipType, :Street, :City, :State, :Zip, :Phone, :Email, :Website, :Twitter, :SkillSet, :Hear, :Refer, :Offer, :Relationship)");
    $sql = $dbh->prepare("INSERT INTO mbxguests(guestname, membername, signindatetime) VALUES (:GuestName, :MemberName, :SignInDateTime)");

	$sql->bindParam(':GuestName', $_POST['appGuestName']);
	$sql->bindParam(':MemberName', $_POST['appMemberName']);
	$sql->bindParam(':SignInDateTime', date("Y-m-d H:i:s"));
	
	$sql->execute();    

    /*** close the database connection ***/
    $dbh = null;
 }   
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>

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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41745008-1', 'matchboxstudio.org');
  ga('send', 'pageview');

</script>
 
   

</head>
<body>



<section class="home">
	<div class="overlay">
		<div class="super">
	
<section class="para" id="break4">
	
		<div class="container message">
			<p class="quote-block">
				Thanks for visiting our MatchBOX today. Ask your host about how to apply for your own membership.
			</p>
			<p><a href="/guests.html">Is there another guest to sign in?</a></p>
		</div>
	
</section>

		</div><!-- ./super -->
	</div> <!-- ./overlay -->
</section> <!-- ./home -->

	

<!-- JS
================================================== -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/supersized.3.2.7.js"></script>
<script src="assets/js/supersized.shutter.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
