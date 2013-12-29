<?php
App::uses('PphlCache', 'Model');

/**
 * PphlCache Test Case
 *
 */
class PphlCacheTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pphl_cache'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PphlCache = ClassRegistry::init('PphlCache');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PphlCache);

		parent::tearDown();
	}

}
