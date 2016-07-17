<div class="row">
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Задание 3</u></h4>
<pre>
Дана таблица в базе MySQL с полями:
    id  - ключ
    name  имя,
    parent ссылка на id родителя,

Данную таблицу нужно заполнить рандомными значениями, 
но так что бы получилось дерево с несколькими (от 0 до 5) 
уровнями вложенности

Реализовать алгоритм выводящий это дерево, вида:
EEE
  ->KK
  ->LK
RE
LO
  ->EW
  ->FS
DF
  ->JJJ
	  ->WW
	  ->LL
		->SS
		  ->SD
		  ->HR
			->JS
			  ->PP
			->ET		
  ->ED		
  ->AC
PPP
и т.д.
</pre>
		</div>
	</div>
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Решение</u></h4>

			<?php echo $data['tree']; ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#li-3').addClass('active');
	});
</script>