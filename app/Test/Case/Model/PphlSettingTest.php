<?php
App::uses('PphlSetting', 'Model');

/**
 * PphlSetting Test Case
 *
 */
class PphlSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pphl_setting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PphlSetting = ClassRegistry::init('PphlSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PphlSetting);

		parent::tearDown();
	}

}
