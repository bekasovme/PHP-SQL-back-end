<?php
  $name = "Михаил";
  $age = "32";
  $mail = "bekasovme@gmail.com";
  $city = "Москва";
  $about = "системный администратор";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Введение в php</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<style>
	  body {
	  	font-family: "Open Sans", sans-serif;
	  	padding: 0;
			margin: 0;
	  }
	  
	  dl {
	  	display: table-row;
	  }
	  
	  dt, dd {
	    display: table-cell;
	    padding: 5px 10px;
	  }
  </style>
</head>
<body>
	<h1>Станица пользователя Михаил</h1>
	<dl>
		<dt>Имя</dt>
		<dd><?= $name ?></dd>
	</dl>
	<dl>
		<dt>Возраст</dt>
		<dd><?= $age ?></dd>
	</dl>
	<dl>
		<dt>Адрес электронной почты</dt>
		<dd><a href="mailto:"><?= $mail ?></a></dd>
	</dl>
	<dl>
		<dt>Город</dt>
		<dd><?= $city ?></dd>
	</dl>
	<dl>
		<dt>О себе</dt>
		<dd><?= $about ?></dd>
	</dl>
</body>
</html>