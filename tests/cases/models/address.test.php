<?php
/* Address Test cases generated on: 2011-09-21 12:33:55 : 1316622835*/
App::import('Model', 'Addresses.Address');

class AddressTestCase extends CakeTestCase {
	var $fixtures = array('');

	function startTest() {
		$this->Address =& ClassRegistry::init('Address');
	}

	function endTest() {
		unset($this->Address);
		ClassRegistry::flush();
	}

}
