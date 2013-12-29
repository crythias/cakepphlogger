<?php
App::uses('PphlAgent', 'Model');

/**
 * PphlAgent Test Case
 *
 */
class PphlAgentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pphl_agent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PphlAgent = ClassRegistry::init('PphlAgent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PphlAgent);

		parent::tearDown();
	}

}
