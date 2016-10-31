<?php

class AllBehaviorsTest extends CakeTestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('All Behaviors tests');
		$suite->addTestDirectory(TESTS . 'Case/Model/Behavior');
		return $suite;
	}

}
