<?php
App::uses('PphlUser', 'Model');

/**
 * PphlUser Test Case
 *
 */
class PphlUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pphl_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PphlUser = ClassRegistry::init('PphlUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PphlUser);

		parent::tearDown();
	}

}
