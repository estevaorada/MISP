<?php
class AppSchema extends CakeSchema {

	public $file = 'schema_0.2.1.1.php';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $attributes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'category' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'value1' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'to_ids' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'uuid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'revision' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'private' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'value2' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'event_id' => array('column' => 'event_id', 'unique' => 0), 'uuid' => array('column' => 'uuid', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

	public $bruteforces = array(
		'ip' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'expire' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

	public $events = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'org' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'info' => array('type' => 'text', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'alerted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'uuid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'private' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'uuid' => array('column' => 'uuid', 'unique' => 0), 'info' => array('column' => 'info', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

	public $servers = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'authkey' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'org' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'push' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'pull' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'lastfetchedid' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'org' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'autoalert' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'authkey' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'invited_by' => array('type' => 'integer', 'null' => false, 'default' => null),
		'gpgkey' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'nids_sid' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15),
		'termsaccepted' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'newsread' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'password', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);
}