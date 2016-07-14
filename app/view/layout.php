<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->viewTitle; ?></title>
  <link rel="stylesheet" type="text/css" href="../../websource/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../websource/css/style.css">
  <script type="text/javascript" src="../../websource/js/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="../../websource/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo Helper::url('home', 'index'); ?>">
					Тестовое задание
				</a>
			</div>

			<div>
				<ul class="nav navbar-nav">
					<li><a href="<?php echo Helper::url('part', 'part1'); ?>">Часть 1</a></li>
					<li><a href="<?php echo Helper::url('part', 'part2'); ?>">Часть 2</a></li>
					<li><a href="<?php echo Helper::url('part', 'part3'); ?>">Часть 3</a></li>
					<li><a href="<?php echo Helper::url('part', 'part4'); ?>">Часть 4</a></li>
					<li><a href="<?php echo Helper::url('part', 'part5'); ?>">Часть 5</a></li>
					<li><a href="<?php echo Helper::url('part', 'part6'); ?>">Часть 6</a></li>
					<li><a href="<?php echo Helper::url('part', 'part7'); ?>">Часть 7</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<?php require_once($this->viewBody); ?>
	</div>
</body>
</html>