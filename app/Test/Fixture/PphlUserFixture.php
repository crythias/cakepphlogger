<?php
/**
 * PphlUserFixture
 *
 */
class PphlUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hits' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'admin' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'pw' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'length' => 70, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'timeout' => array('type' => 'integer', 'null' => false, 'default' => '1800', 'length' => 5),
		'timeout_onl' => array('type' => 'integer', 'null' => false, 'default' => '300', 'length' => 5),
		'date_start' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'last_access' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'access_diff' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5),
		'hit_mail' => array('type' => 'integer', 'null' => false, 'default' => '100', 'length' => 5),
		'loglim' => array('type' => 'integer', 'null' => false, 'default' => '50', 'length' => 10),
		'stats_cache' => array('type' => 'integer', 'null' => false, 'default' => '900', 'length' => 7),
		'your_url' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ipblock' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'refblock' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ownref' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'qstr' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'index_files' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'demo' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'flags' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'dlunite' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'ttf_file' => array('type' => 'string', 'null' => false, 'default' => 'arialbd.ttf', 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gd_font' => array('type' => 'integer', 'null' => false, 'default' => '3', 'length' => 2),
		'ttf_size' => array('type' => 'integer', 'null' => false, 'default' => '14', 'length' => 2),
		'bg_c' => array('type' => 'string', 'null' => true, 'default' => 'black', 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fg_c' => array('type' => 'string', 'null' => true, 'default' => 'lightgrey', 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bg_trans' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'cssid' => array('type' => 'integer', 'null' => false, 'default' => '13', 'length' => 10),
		'gmt' => array('type' => 'float', 'null' => false, 'default' => '1'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => 'en', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'conf' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'index'),
		'del_usr' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'limh' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6),
		'limh_p' => array('type' => 'integer', 'null' => false, 'default' => '1000', 'length' => 6),
		'limd' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'limd_p' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'kwspl' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'tblsize' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'conf_del_usr' => array('column' => array('conf', 'del_usr'), 'unique' => 0)
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
			'username' => 'Lorem ipsum dolor sit amet',
			'hits' => 1,
			'admin' => 1,
			'pw' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'visible' => 1,
			'timeout' => 1,
			'timeout_onl' => 1,
			'date_start' => 1,
			'last_access' => 1,
			'access_diff' => 1,
			'hit_mail' => 1,
			'loglim' => 1,
			'stats_cache' => 1,
			'your_url' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ipblock' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'refblock' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ownref' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'qstr' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'index_files' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'demo' => 1,
			'flags' => 1,
			'dlunite' => 1,
			'ttf_file' => 'Lorem ipsum dolor sit amet',
			'gd_font' => 1,
			'ttf_size' => 1,
			'bg_c' => 'Lorem ipsum dolor sit amet',
			'fg_c' => 'Lorem ipsum dolor sit amet',
			'bg_trans' => 1,
			'cssid' => 1,
			'gmt' => 1,
			'lang' => '',
			'conf' => 1,
			'del_usr' => 1,
			'limh' => 1,
			'limh_p' => 1,
			'limd' => 1,
			'limd_p' => 1,
			'kwspl' => 1,
			'tblsize' => 1
		),
	);

}
