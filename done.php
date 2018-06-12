<html>
<head lang="en">
<meta charset="UTF-8">
<!-- redirect back to editor using <meta> -->
<!--meta http-equiv="refresh" content="1;url=index.php"-->
<!-- redirect back to editor using js -->
<!--script type="text/javascript">
window.location.href = "index.php"
</script-->
<title>Page Redirection</title>
<link href='http://fonts.googleapis.com/css?family=Lora|Lato' rel='stylesheet' type='text/css' media="all">
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
<?php
$txt = $_POST["html"]; //takes the content from editor

$myfile = fopen('../index.htm', 'w+');//opens file
fwrite($myfile, $txt);//writes the content to file
fclose($myfile);//closes the file
echo "Done<br/>";//shows "done"
echo "<a href=\"./\">Go back to editor</a><br/>";
echo "<h2>Preview below</h2>"; 
echo $txt;
?>
</html>