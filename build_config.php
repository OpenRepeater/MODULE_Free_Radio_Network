<?php
/*
* This is the file that gets called for this module when OpenRepeater rebuilds the configuration files for SVXLink.
* Settings for the config file are created as a PHP associative array, when the file is called it will convert it into
* the requiried INI format and write the config file to the appropriate location with the correct naming.
*/

// Build Config
$module_config_array['Module'.$cur_mod['svxlinkName']] = [
	'NAME' => $cur_mod['svxlinkName'],
	'ID' => $cur_mod['svxlinkID'],
	'TIMEOUT' => '60',				
];

# Details http://freeradionetwork.eu/frnprotocol.htm

# main server
$module_config_array['Module'.$cur_mod['svxlinkName']] += [
	'SERVER' => '127.0.0.1',
	'PORT' => '10024',
];

# backup server
$module_config_array['Module'.$cur_mod['svxlinkName']] += [
	'SERVER_BACKUP' => '127.0.0.2',
	'PORT_BACKUP' => '10025',
];

# login details
$module_config_array['Module'.$cur_mod['svxlinkName']] += [
	'VERSION' => '2014000',
	'EMAIL_ADDRESS' => 'your@example.com',
	'DYN_PASSWORD' => '12345',
	'CLIENT_TYPE' => '1',
	'CALLSIGN_AND_USER' => 'callsign, user',
	'BAND_AND_CHANNEL' => '446.03125FM CTC131.8',
	'DESCRIPTION' => 'ORP FreeRadioNetwork Station',
	'COUNTRY' => 'Antarctica',
	'CITY_CITY_PART' => 'City - Street',
	'NET' => 'Test',
];

# debugging
#FRN_DEBUG=1
#DISABLE_RF=1

?>