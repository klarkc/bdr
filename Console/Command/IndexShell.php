<?php

class IndexShell extends AppShell {

	public $tasks = array('MyIndex');

	/**
	 * Main entry point, executes MyIndex
	 *
	 * @return void
	 */
	public function main() {
		$this->out(__('Running the custom index task'));
		$this->MyIndex->execute();
	}

}
