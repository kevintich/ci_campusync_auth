<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Campusync</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all">
</head>
<body>

<!--check if user is logged in currently-->
	
<?php if(Current_User::user()): ?>

<!--If user is logged in display account page (Begin Header Code)-->
<div id="header">
	<div id="logo">
		<h1>Campusync</h1>
		<p>TM</p>
	</div>
        <ul id ="logout">
		   <li><h2><?php echo anchor('logout','Logout'); ?></h2></li>
		   <li><h2>Hello <?php echo Current_User::user()->username; ?>.</h2></li>

        </ul>
</div>
<!--End header Code-->

<!--Begin Menu Code-->
<div id="menu">
	<ul>
		<!--<li class="current_page_item"><a href="#">Your Schedule</a></li>-->
        	<li><?php echo anchor('home','Your Schedule'); ?></li>
		<li><?php echo anchor('schedule','Set-up schedule'); ?></li>
		<li><?php echo anchor('accounts','Account settings'); ?></li>
	</ul>
</div>
<!--End Menu code-->

<!--Begin page code-->
<div id = "page">
          <!-- start ads -->
	  <div id="ads">
            <table border="1" height = "600"  width = "160"><td>ad's space</td></table>
          </div>
          <!-- end ads -->


          <!-- start content-->
          <div id = "content">
			<div class="title">
				<h2>Your Schedule</h2>
			</div>
			
          </div>
          <!-- End content -->
</div>
<!--end page code-->

<!--start footer code-->
<div id ="footer">
               <p class="legal">
		&copy;2011 Campusync. All Rights Reserved.
		</p>
</div>

</div>
<!--end footer code-->

<?php else: ?>
                <ul id = "navigation">
		  <li><h2>New Users: <?php echo anchor('signup','Create an Account'); ?>.</h2></li>
		  <li><h2>Members: <?php echo anchor('login','Login'); ?>.</h2></li>
                 </ul>
<?php endif; ?>
	


</body>
</html>
