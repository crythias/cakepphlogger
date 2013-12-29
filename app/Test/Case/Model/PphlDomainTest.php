<?php
App::uses('PphlDomain', 'Model');

/**
 * PphlDomain Test Case
 *
 */
class PphlDomainTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pphl_domain'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PphlDomain = ClassRegistry::init('PphlDomain');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PphlDomain);

		parent::tearDown();
	}

}
