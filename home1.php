<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body>
<form action="" method="post">
<fieldset>
<p><lable>response</lable>
<input type="text" name="abhay"></p>
<p><input type="submit" name="response"></p>
</form>

<?php
if (isset ($_POST['response']))
{
	{
			echo "hello";
		}
}
?>
</body>
</html>