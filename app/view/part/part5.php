<div class="row">
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Задание 5</u></h4>
<pre>
Из таблицы из задания 3 сделать выборку записей 
без потомков, но с 2-мя старшими родителями	
</pre>
		</div>
	</div>
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Решение</u></h4>
			
			<h5><u>Запрос</u></h5>
			<div>
<pre>
<?php echo $data['result']['query']; ?>
</pre>
			</div>

			<h5><u>Результат</u></h5>
			<div>
				<ul>
				<?php 
				foreach($data['result']['items'] as $item){
					echo '<li>', $item->getName(), '</li>';
				}
				?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#li-5').addClass('active');
	});
</script>