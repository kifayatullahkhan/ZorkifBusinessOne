<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8">
<title>Login Form</title>
<link href="styles/zorkif_fluid_main.css" rel="stylesheet" type="text/css">
<script src="scripts/jquery-1.8.3.min.js" type="text/javascript"></script>

<!--  Nivo Image Slider -->
<link rel="stylesheet" href="scripts/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="scripts/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<!-- End of Image Slider -->

</head>

<body>
    <div id="error_message">
        Error Occured.
    </div><!-- end of error_message -->
    
    <div id="warning_message">
        Warning!. Make sure you perform the correct action.
    </div><!-- End of warning_message -->
    
    <div id="notification_message">
        The Action has been completed Successfully.
    </div><!-- End of notification_message -->

	<div class="main_container">
      <div id="login_form">
        <form name="form1" method="post" action="">
          <div class="form_elements">
          <div class="form_title"> Login Form </div>
  			<div class="form_text_element">
            <label for="Username">Username</label><br>

            <input type="text" name="Username" id="Username">
            </div>
            <div class="form_text_element">
            <label for="Password">Password</label>
            <input type="text" name="Password" id="Password">
            </div>
          </div>
          <div class="form_go_button">
          &gt;
           <input type="submit" name="submit" id="submit" value="go">
          </div>
        </form>
      </div>
    </div>
</body>
</html>