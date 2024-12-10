<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.row{
			margin-top: 1em;
		}
		[class^="col"]
		{
			background-color: pink;
			border: 2px solid #cccc00;
			padding: 2em;
			margin-top: 1em
		}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-12">col-12</div>
	</div>
	<div class="row">
		<div class="col-4">col-4</div>
		<div class="col-4">col-4</div>
		<div class="col-4">col-4</div>
	</div>
	<div class="row">
		<div class="col-3">col-3</div>
		<div class="col-6">col-6</div>
		<div class="col-3">col-3</div>
	</div>
	<div class="row">
		<div class="col-2">col-2</div>
		<div class="col-8">col-8</div>
		<div class="col-2">col-2</div>
	</div>
	<div class="row">
		<div class="col-1">col-1</div>
		<div class="col-10">col-10</div>
		<div class="col-1">col-1</div>
	</div>
</div>

<script type="js/jquery-3.4.1.js"></script>
<script type="js/popper.min.js"></script>
<script type="js/bootstrap.js"></script>
</body>
</html>