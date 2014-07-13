<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>URL Shortner</title>
		<link rel="stylesheet" href="/css/style.css"/>
		<script src="/js/jquery.min.js"></script>
		<script src="/js/main.js"></script>
	</head>
	<body>
		<div class="content">
			<h1>Create Shorten URL</h1>
			<form action="JavaScript:url_shorten()" method="post">
				<input type="url" placeholder="Enter URL" name="url" id="url" required/>
				<input type="submit" value="Shorten" id="shorten"/>
			</form>
			<div id="short_url"></div>
		</div>
	</body>
</html>
