<?php 

require_once('app/model/TreeItem.php');

class TreeItemTest extends PHPUnit_Framework_TestCase{
	private $treeItem;
	private $testId = 1;
	private $testName = 'test name';
	private $testParentId = 20;
	private $testChildId = 100;

	public function setUp(){
		$this->treeItem = new TreeItem($this->testId, $this->testName, $this->testParentId);
	}

	public function testId(){
		$id = $this->treeItem->getId();

		$this->assertNotEmpty($id);
		$this->assertEquals($this->testId, $id);
	}


	public function testName(){
		$name = $this->treeItem->getName();

		$this->assertNotEmpty($name);
		$this->assertEquals($this->testName, $name);
	}


	public function testParentId(){
		$parentId = $this->treeItem->getParent();

		$this->assertNotEmpty($parentId);
		$this->assertEquals($this->testParentId, $parentId);
	}

	public function testChildsArray(){
		$childs = $this->treeItem->getChilds();

		$this->assertCount(0, $childs);
	}

	public function testAddChild(){
		$this->treeItem->addChild(new TreeItem($this->testChildId, $this->testName, $this->testId));

		$this->assertCount(1, $this->treeItem->getChilds());
		$this->assertNotEquals($this->testId, $this->treeItem->getChilds()[0]->getId());
	}
}

?>