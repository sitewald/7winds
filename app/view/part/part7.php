<div class="row">
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Задание 7</u></h4>
<pre>
Дан 2-х мерный массив, количество элементов в каждой 
строке может быть разной и заранее не известно. 
Так же не известно количество строк.
Нужно разработать алгоритм, на выходе которого 
получим массив, в котром будет представлены все 
возможные уникальные комбинации вариантов 
использующий по одному элементу из каждой строки.
Пример
Исходный массив:
а1 а2 а3
b1 b2
c1 c2 c3
d1

Результирующий массив:
a1 b1 c1 d1
a1 b1 c2 d1
a1 b1 c3 d1
a1 b2 c1 d1
a1 b2 c2 d1
a1 b2 c3 d1
a2 b1 c1 d1
a2 b1 c2 d1
a2 b1 c3 d1
a2 b2 c1 d1
a2 b2 c2 d1
a2 b2 c3 d1
a3 b1 c1 d1
a3 b1 c2 d1
a3 b1 c3 d1
a3 b2 c1 d1
a3 b2 c2 d1
a3 b2 c3 d1	
</pre>
		</div>
	</div>
	<div class="col-md-6">
		<div class="bg-info content-wrapper">
			<h4><u>Решение</u></h4>
			
			<div class='div-like-pre'>
			<?php 
				foreach($data['result'] as $row){
					foreach($row as $element){
						echo $element, '&nbsp;';
					}

					echo '<br />';
				}
			?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#li-7').addClass('active');
	});
</script>