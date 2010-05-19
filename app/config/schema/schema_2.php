<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2010-05-19 18:05:29 : 1274284649*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	var $file = 'schema_2.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $instances = array(
		'active' => array('type' => 'integer', 'null' => false, 'default' => 0, 'length' => 1),
		'validate' => array('type' => 'string', 'length' => 32)
	);
	
	var $users = array(
		'active' => array('type' => 'integer', 'null' => false, 'default' => 0, 'length' => 1),
	);
}
?>