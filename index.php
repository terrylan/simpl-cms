<?php
//from http://www.stevedawson.com/scripts/password-protect.php
$password = "password";  
// Modify Password to suit for access, Max 10 Char.
$editing = "../index.htm";
?>
<!DOCTYPE html>
<html>
<head lang="en"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="terrylan" >
<title>SIMPL-CMS</title>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css' media="all">
<style type="text/css">
body{
	max-width: 800px;
	font-family: Lato, sans-serif;
}
textarea{
	width: 100%;
	height: 400px;
}
</style>
</head>
<body>
<?php 
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- Start of Editor -->
<header>
<h1>SIMPL-CMS</h1>
</header>
<form action="done.php" method="post">
<label>Editing "<?php echo $editing; ?>" HTML:</label><br>
			<textarea id="html" name="html"><?php $html = include $editing;// this fetches the html code from index ?></textarea><br>
			<input type="submit" value="Apply Changes">
</form>
<p>
<a href="../" target="_blank">View HTML</a>
</p>

<!-- End of Editor -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  echo "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
// Displays password input
  echo "<form method=\"post\"><p>Password ";
  echo "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"> <input value=\"Login\" type=\"submit\"></p></form>";
}
?>
</body>
</html>
