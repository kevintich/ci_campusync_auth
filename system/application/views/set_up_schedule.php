<!--Coresponding controller is schedule.php-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Campusync</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all">
      <!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/tutorial.css" type="text/css" media="all">-->

<style type="text/css">
			#stepsform {
				padding : 1em;
				width : 500px;

			}

			#fieldWrapper {
			        
                        }

			#demoNavigation {
				margin-top : 0.5em;
				margin-right : 1em;
				text-align: right;
			}
			
			#data {
				font-size : 0.7em;
			}

			input {
				margin-right: 0.1em;
				margin-bottom: 0.5em;
			}

			.input_field_25em {
				width: 2.5em;
			}

			.input_field_3em {
				width: 3em;
			}

			.input_field_35em {
				width: 3.5em;
			}

			.input_field_12em {
				width: 12em;
			}

			label {
				margin-bottom: 0.2em;
				font-weight: bold;
				font-size: 0.8em;
			}

			label.error {
				color: red;
				font-size: 0.8em;
				margin-left : 0.5em;
			}

			.step span {
				float: right;
				font-weight: bold;
				color: #AAFF00;;
				padding-right: 0.8em;
			}

			.navigation_button {
				width : 70px;
			}
			
			#data {
					overflow : auto;
			}
		</style>
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
		<li><?php echo anchor('account','Account settings'); ?></li>
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
				<h2>Set Schedule</h2>
			</div>
                        <div id="stepsform">
						<hr />
			<h5 id="status"></h5>
			<form id="demoForm" method="post" action="json.html" class="bbq">
				<div id="fieldWrapper">
				<span class="step" id="first">
					<span class="font_normal_07em_black">First step - Name</span><br />
					<label for="firstname">First name</label><br />
					<input class="input_field_12em" name="firstname" id="firstname" /><br />
					<label for="surname">Surname</label><br />
					<input class="input_field_12em" name="surname" id="surname" /><br />
                              	</span>
				<span id="finland" class="step">
					<span class="font_normal_07em_black">Step 2 - Personal information</span><br />
					<label for="day_fi">Social Security Number</label><br />
					<input class="input_field_25em" name="day" id="day_fi" value="DD" />
					<input class="input_field_25em" name="month" id="month_fi" value="MM" />
					<input class="input_field_3em" name="year" id="year_fi" value="YYYY" /> - 
					<input class="input_field_3em" name="lastFour" id="lastFour_fi" value="XXXX" /><br />
					<label for="countryPrefix_fi">Phone number</label><br />
					<input class="input_field_35em" name="countryPrefix" id="countryPrefix_fi" value="+358" /> - 
					<input class="input_field_3em" name="areaCode" id="areaCode_fi" /> - 
					<input class="input_field_12em" name="phoneNumber" id="phoneNumber_fi" /><br />
					<label for="email">*Email</label><br />
					<input class="input_field_12em email required" name="myemail" id="myemail" /><br />	 						
				</span>
				<span id="confirmation" class="step">
					<span class="font_normal_07em_black">Last step - Username</span><br />
					<label for="username">User name</label><br />
					<input class="input_field_12em" name="username" id="username" /><br />
					<label for="password">Password</label><br />
					<input class="input_field_12em" name="password" id="password" type="password" /><br />
					<label for="retypePassword">Retype password</label><br />
					<input class="input_field_12em" name="retypePassword" id="retypePassword" type="password" /><br />
				</span>
				<span id = "mydropdown" class = "step">
					<span class="font_normal_07em_black">First Line of code</span><br />
					<select id= "selectvals">
						<option value = "1"> kevin </option>
						<option value = "1"> Ng'eno </option>
					<select/>
				<br />				
				</span>
				</div>
				<div id="demoNavigation"> 							
					<input class="navigation_button" id="back" value="Back" type="reset" />
					<input class="navigation_button" id="next" value="Next" type="submit" />
				</div>
			</form>


			<hr />
                      
 
                          <!--<label for="country">Institute: </label>
                          <?php echo form_dropdown('inst_id', $institutes, 'zzz', 'id="institute"');?><br />-->
 
	
			<p id="data"></p>
		</div>
			<!--<div id = "allsteps">
                              <h3>Step 1 - Select Your institute</h3>
                              
                               <form method ="post" action ="me.php">
                               <d><?$options = array('small'  => 'Nairobi University','med'    => 'Kenyatta University','large'   => 'Digital Age Institute','xlarge' => 'Mount kenya Univesity, Nairobi');

$shirts_on_sale = array('small', 'large');

$js = 'id="shirts" onChange="this.form.submit()"';
echo form_dropdown('shirts', $options, 'large', $js);
?></d>
                              </form>
			</div>-->
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

    <!--<script type="text/javascript" src="<?= base_url();?>js/jquery-1.4.2.min.js"></script>		
    <script type="text/javascript" src="<?= base_url();?>js/jquery.form.js"></script>
    <script type="text/javascript" src="<?= base_url();?>js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?= base_url();?>js/bbq.js"></script>
    <script type="text/javascript" src="<?= base_url();?>js/jquery-ui-1.8.5.custom.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>js/jquery.form.wizard.js"></script>
    
    <script type="text/javascript">
			$(function(){
				$("#demoForm").formwizard({ 
				 	formPluginEnabled: true,
				 	validationEnabled: true,
				 	focusFirstInput : true,
				 	formOptions :{
						success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},
						beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},
						dataType: 'json',
						resetForm: true
				 	}	
				 }
				);
  		});
    </script>-->
	
</body>
</html>
