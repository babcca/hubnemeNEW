/*
Script Name: JQuery Ajax Contact/Email Form
Description: Ajax contact form- no page refreshing required
Version: 1.0
Author: BrightCherry
Author URI: http://www.brightcherry.co.uk/
*/

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>BrightCherry JQuery Ajax Contact Form</title>
<script src="includes/jquery-1.2.6.min.js" type="text/javascript" charset="utf-8"></script>
<script src="includes/jquery.form.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$('#submitform').ajaxForm({
			target: '#error',
			success: function() {
			$('#error').fadeIn('slow');
			}
		});
	});

</script>
</head>
<body>

	<form id="submitform" action="submitemail.php" method="post">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" />
		</fieldset>
		<fieldset>
			<legend>test</legend>
			<input type="text" name="test" />
		</fieldset>

		<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" />
		</fieldset>

		<fieldset>
			<legend>Message</legend>
			<textarea rows="5" cols="20" name="message"></textarea>
		</fieldset>

		<fieldset>
			<input type="submit" value="Submit" />
		</fieldset>
	</form>
	<div id="error">

	</div>

</body>
</html>