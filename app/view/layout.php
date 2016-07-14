<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->viewTitle; ?></title>
  <link rel="stylesheet" type="text/css" href="../../websource/css/bootstrap.min.css">
  <script type="text/javascript" src="../../websource/js/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="../../websource/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo Helper::url('home', 'index'); ?>">
					Тестовое задание
				</a>
			</div>
		</div>
	</div>

	<?php require_once($this->viewBody); ?>
</body>
</html>