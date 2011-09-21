<?php 

class AddressHelper extends Helper{
	
	
	/*
	 * $address pass an address model formatted array and returns an html code block
	 * 
	 */
	function format($address = array(), $options = array()){
		$block = $address['addr_1']."<br>";
		if(!empty($address['addr_2'])){
			$block .= $address['addr_1']."<br>";
		}
		
		return $block .= $address['city'].", ".$address['state_id']." ".$address['zip'];
	}
}
