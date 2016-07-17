<div class="row">
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Задание 1</u></h4>
<pre>
Дан текст с включенными в него тегами следующего вида:
[НАИМЕНОВАНИЕ_ТЕГА:описание]данные[/НАИМЕНОВАНИЕ_ТЕГА]
На выходе нужно получить 2 массива:
Первый:
* Ключ - наименование тега
* Значение - данные 
Второй:
* Ключ - наименование тега
* Значение - описание

Вложенность тегов не допускается.
Описания может и не быть
Обезателен закрвающий тег	
</pre>
		</div>
	</div>
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Решение</u></h4>

			<h5><u>Текст</u></h5>
<pre>
<?php echo $data['text']; ?>
</pre>

			<h5><u>Результат</u></h5>
<pre>
<?php print_r($data['result']); ?>
</pre>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#li-1').addClass('active');
	});
</script>

