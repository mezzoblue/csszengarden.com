<h1>Get PHP Info</h1>

<?php
	if ( ($_POST['process'] == 1) && ($_POST['theword'] == '3l3phant') ) {
		phpinfo();
	} else { // The form.
?>

<form action="<?php echo $_ENV['SCRIPT_URI']; ?>" method="post">
	<label for="theword">What's the word?</label><input id="theword" name="theword" value="" type="text" /><br />
	<input type="hidden" name="process" value="1" />
	<input class="right" type="submit" id="submit" name="submit" value="submit" />
</form>

<?php
	} // End.
?>