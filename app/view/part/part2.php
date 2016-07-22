<div class="row">
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Задание 2</u></h4>
<pre>
Дан текст в который включены ключи raz: dva: tri:
текст может располагаться как перед ключами так и после
 
На выходе нужно получить массив, 
где ключ это raz , dva , tri, а ДАННЫЕ - текст
раполагающийся после ключа до следующего ключа или 
до конца текста, если не встретился ключ. 
Очередность ключей может быть – произвльная. 
Если в тексте ключ встречается второй раз - 
в массиве он должен быть переписан.
В решении должны использоваться регулярки.	
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
		$('#li-2').addClass('active');
	});
</script>