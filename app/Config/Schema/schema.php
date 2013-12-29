<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $pphl_agents = array(
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

	public $pphl_cache = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'yyyymm' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'key' => 'primary'),
		'cache' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'time' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'type', 'yyyymm'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $pphl_domains = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'tld' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'area' => array('type' => 'string', 'null' => false, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tld_ind' => array('column' => 'tld', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $pphl_settings = array(
		'setting' => array('type' => 'string', 'null' => false, 'length' => 50, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'value' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => false, 'default' => 'text', 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'setting', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $pphl_users = array(
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

}
