<?php 
require_once('app/helpers/DbHelper.php');
require_once('TreeItem.php');

class Tree{
	public static function getTotalStringStructure(){
		$tree = self::buildTree();

		$stringTree = '';
		TreeItem::$offset = '&nbsp;&nbsp;&nbsp;&nbsp;';

		foreach($tree as $item){
			$stringTree .= $item->getStringStructure();
		}

		return $stringTree;
	}

	private static function buildTree(){
		$items = self::getAll();
		$tree = array();

        foreach($items as $item){
        	if($item->getParent() === null){
        		$item = self::buildOneBranch($item, $items);

        		array_push($tree, $item);
        	}
        }

        return $tree;
	}

	private static function getAll(){
		$query = 'SELECT * FROM tree';

		$rows = DbHelper::getData($query);

		$items = array();

		foreach($rows as $row){
			 $item = new TreeItem($row[0], $row[1], $row[2]);

			 array_push($items, $item);
		}

		return $items;
	}

	private static function buildOneBranch(TreeItem $parent, $items){
		foreach($items as $item){
			if($item->getParent() == $parent->getId()){
				$item = self::buildOneBranch($item, $items);

				$parent->addChild($item);
			}
		}

		return $parent;
	}
}

?>