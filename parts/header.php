<!DOCTYPE html>
<html lang="ua">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="<?php echo $baseurl;?>css/s.css" rel="stylesheet">
		<title><?php echo $title;?></title>
	</head>
	<body>
		<section align="center" class="top">Особисті записи | Андрій Голотюк</section>
		<section align="center" class="top_menu">

<?php
foreach ($menu as $k => $v) {
	$name = $v['name'];
	$title = $v['title'];
	$link = $v['link'];

	echo "<a href='$baseurl$link' title='$title'>$name</a> ";
}

?>
		</section>
