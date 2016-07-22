<?php 

class Constant{
// -----------------------------------------------------------------
	const GET_ALL_TREE_ITEMS = 'SELECT * FROM tree';
// -----------------------------------------------------------------
	const QUERY_PART_4 = 
'SELECT * FROM tree AS t WHERE (
parent IS NULL 
AND 
(SELECT COUNT(*) FROM tree WHERE (parent = t.id)) >= 3);';

// -----------------------------------------------------------------
	const QUERY_PART_5 = 
'SELECT * FROM tree AS lowest WHERE(
id NOT IN (SELECT parent FROM tree WHERE parent IS NOT NULL)
AND 
EXISTS(SELECT * FROM tree WHERE (
			id = lowest.parent 
			AND 
			parent IN (SELECT id FROM tree WHERE parent IS NULL))));';

// -----------------------------------------------------------------
	const TEXT_FOR_REGULAR1 = 
'It is a long established fact that a reader will be distracted 
by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less 
normal[first:first description]first data[/first] distribution of
letters, as opposed to using \'Content here, content here\',
making it look like readable English. Many desktop publishing
packages and web page editors now use Lorem Ipsum as their 
default model [second:second description]second data[/second] 
for \'lorem ipsum\' will uncover many web sites still in their infancy.
Various versions have evolved over the years, sometimes by accident, 
sometimes on (injected humour and the like).
[third]third data[/third]';

//------------------------------------------------------------------
	const TEXT_FOR_REGULAR2 = 
'some text some text some text raz: text raz text
text raz dva: text dva text dva text tri: text
text tri text tri raz: text raz-2 text raz-2 text raz-2';

//------------------------------------------------------------------

	const CODE_PART6 = 
'
$arr = array_fill(0, 1000000, 100001);

$duplicate = array();

for($i = 0; $i < 1000000; $i++){
	if(!in_array($arr[$i], $duplicate)){
		$duplicate[] = $arr[$i];
	}

	unset($arr[$i]);
}

return $duplicate;
';
}
?>