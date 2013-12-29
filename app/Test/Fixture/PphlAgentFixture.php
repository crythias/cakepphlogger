<?php
/**
 * PphlAgentFixture
 *
 */
class PphlAgentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'agent' => array('type' => 'string', 'null' => false, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'browser' => array('type' => 'string', 'null' => false, 'length' => 8, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'version' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'version_st' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'system' => array('type' => 'string', 'null' => false, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ind_agt' => array('column' => 'agent', 'unique' => 1),
			'browsers' => array('column' => array('browser', 'version', 'system'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'agent' => 'Lorem ipsum dolor sit amet',
			'browser' => 'Lorem ',
			'version' => 1,
			'version_st' => 'Lorem ip',
			'system' => 'Lorem ipsum d'
		),
	);

}
