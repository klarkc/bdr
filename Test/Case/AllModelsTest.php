<?php

class AllModelsTest extends CakeTestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('All Models tests');
		$suite->addTestDirectory(TESTS . 'Case/Model');
		return $suite;
	}

}
