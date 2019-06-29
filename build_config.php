<?php
/*
* This is the file that gets called for this module when OpenRepeater rebuilds the configuration files for SVXLink.
* Settings for the config file are created as a PHP associative array, when the file is called it will convert it into
* the requiried INI format and write the config file to the appropriate location with the correct naming.
*/

$options = unserialize($cur_mod['moduleOptions']);

// Build Config
$module_config_array['Module'.$cur_mod['svxlinkName']] = [
	'NAME' => $cur_mod['svxlinkName'],
	'ID' => $cur_mod['svxlinkID'],
	'TIMEOUT' => intval($options['timeout_min']) * 60,				
];

# Details http://freeradionetwork.eu/frnprotocol.htm

# main server
$module_config_array['Module'.$cur_mod['svxlinkName']] += [
	'SERVER' => trim($options['server1']),
	'PORT' => trim($options['port1']),
];

# backup server
$module_config_array['Module'.$cur_mod['svxlinkName']] += [
	'SERVER_BACKUP' => '',
	'PORT_BACKUP' => '',
];

# login details
$module_config_array['Module'.$cur_mod['svxlinkName']] += [
	'VERSION' => '2014000',
	'EMAIL_ADDRESS' => trim($options['email']),
	'DYN_PASSWORD' => trim($options['password']),
	'CLIENT_TYPE' => '1',
	'BAND_AND_CHANNEL' => trim($options['band_channel']),
	'DESCRIPTION' => '[ORP] ' . trim($options['desc']),
	'COUNTRY' => trim($options['country']),
	'CITY_CITY_PART' => trim($options['city']) . ' - ' . trim($options['part_of_city']),
	'NET' => trim($options['net']),
];

if (trim($options['callsign']) != '') {
	$module_config_array['Module'.$cur_mod['svxlinkName']] += [ 'CALLSIGN_AND_USER' => trim($options['callsign']) . ', ' . trim($options['username']), ];
} else {
	$module_config_array['Module'.$cur_mod['svxlinkName']] += [ 'CALLSIGN_AND_USER' => trim($options['username']), ];	
}



# debugging
#FRN_DEBUG=1
#DISABLE_RF=1

?>