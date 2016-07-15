<?php 
require_once('app/helpers/DbHelper.php');
require_once('app/helpers/Constant.php');
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

	public static function getItemsForPart4(){
		return array(
				'query' => Constant::QUERY_PART_4,
				'items' => self::getObjectsFromRows(Constant::QUERY_PART_4)
			);
	}

	public static function getItemsForPart5(){
		return array(
				'query' => Constant::QUERY_PART_5,
				'items' => self::getObjectsFromRows(Constant::QUERY_PART_5)
			);
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
		return self::getObjectsFromRows(Constant::GET_ALL_TREE_ITEMS);
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

	private static function getObjectsFromRows($query){
		$rows = DbHelper::getData($query);
		$items = array();

		foreach($rows as $row){
			 $item = new TreeItem($row[0], $row[1], $row[2]);
			 array_push($items, $item);
		}

		return $items;
	}
}

?>