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
}

?>