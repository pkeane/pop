<!doctype html>
<html lang="en">
	<head>
		<base href="{$app_root}">
		<meta charset="utf-8">
		{block "head-meta"}{/block}

		<title>{block "title"}{$main_title}{/block}</title>

		<link rel="stylesheet" href="www/css/base.css">
		<link rel="stylesheet" href="www/css/style.css">
		{block "head-links"}{/block}

		{block "head-js"}
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		{/block}

		{block "head"}{/block}
		<script src="www/js/script.js"></script>

	</head>
	<body>
		<div id="container">
			<div id="header">{block "header"}{/block}</div>
			<div id="main">{block "main"}{/block}</div>
			<div class="clear"></div>
			<div id="footer">{block "footer"}{/block}</div>
		</div>
	</body>
</html>
