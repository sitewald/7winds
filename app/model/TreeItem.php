<?php 

class TreeItem{
	public static $offset;
	private $id;
	private $name;
	private $parent;
	private $childs;

	public function __construct($id, $name, $parent){
		$this->id = $id;
		$this->name = $name;
		$this->parent = $parent;
		$this->childs = array();
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getParent(){
		return $this->parent;
	}

	public function getChilds(){
		return $this->childs;
	}

	public function addChild(TreeItem $child){
		array_push($this->childs, $child);
	}

	public function getStringStructure($offset = ''){
		if($this->parent === null){ // ------- root
			$str = $this->name . '<br />';
		}else{
			$str = $offset . '->' . $this->name . '<br />';
		}

		foreach($this->childs as $child){
			$str .= $offset . $child->getStringStructure(self::$offset . $offset);
		}

		return $str;
	}
}

?>