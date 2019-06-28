<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>co0ontty's Box - FileRead</title>
</head>
<body>
<?php
	include "../class/function.class.php";
	$p = new Func("GET","filename");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$filename = $_REQUEST['filename'];
		if (file_exists($filename)) {
			echo htmlspecialchars($p -> con_function('file_get_contents',$filename));
		}else{
			echo "co0ontty's Box Error: file not exists.";
		}
	}
?>
</body>
</html>
