<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<title>Список ссылок</title>
</head>
<body >
<div class="container">
<?php
define("PathFile", "site/pages/", TRUE) ;// константа хранит путь к папке со страницами
echo "<ul> \n"; // маркированный список
for ($a = 1; $a <= 5; ++$a)
	{ 		
	// Элемент списка и ссылка на страницу с номером $a
		echo '<li><a href='.pathfile. 'page' . $a . '.html > Страница'. $a . "</a></li> \n"; 
	}	
echo 'хехе </ul>';
?>
</div>
</body>
</html>