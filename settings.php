<?php
/* 
 *	Settings Page for Module 
 *	
 *	This is included into a full page wrapper to be displayed. 
 */
?>

<!-- BEGIN FORM CONTENTS -->
	<fieldset>
		<legend>User Settings</legend>

		  <div class="control-group">
			<label class="control-label" for="username">Username</label>
			<div class="controls">
			  <input class="input-xlarge" id="username" type="text" name="username" value="<?php echo $moduleSettings['username']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="callsign">Callsign</label>
			<div class="controls">
			  <input class="input-xlarge" id="callsign" type="text" name="callsign" value="<?php echo $moduleSettings['callsign']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="email">Email Address</label>
			<div class="controls">
			  <input class="input-xlarge" id="email" type="text" name="email" value="<?php echo $moduleSettings['email']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>
	
		  <div class="control-group">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
			  <input class="input-xlarge" id="password" type="text" name="password" value="<?php echo $moduleSettings['password']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>


		<legend>Server Settings</legend>

		  <div class="control-group">
			<label class="control-label" for="server1">Server</label>
			<div class="controls">
			  <input class="input-xlarge" id="server1" type="text" name="server1" value="<?php echo $moduleSettings['server1']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="port1">Port</label>
			<div class="controls">
			  <input class="input-xlarge" id="port1" type="text" name="port1" value="<?php echo $moduleSettings['port1']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="net">Net</label>
			<div class="controls">
			  <input class="input-xlarge" id="net" type="text" name="net" value="<?php echo $moduleSettings['net']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>


		<legend>Location Settings</legend>

		  <div class="control-group">
			<label class="control-label" for="country">Country</label>
			<div class="controls">
			  <input class="input-xlarge" id="country" type="text" name="country" value="<?php echo $moduleSettings['country']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="city">City</label>
			<div class="controls">
			  <input class="input-xlarge" id="city" type="text" name="city" value="<?php echo $moduleSettings['city']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="part_of_city">Part of City</label>
			<div class="controls">
			  <input class="input-xlarge" id="part_of_city" type="text" name="part_of_city" value="<?php echo $moduleSettings['part_of_city']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="desc">Description</label>
			<div class="controls">
			  <input class="input-xlarge" id="desc" type="text" name="desc" value="<?php echo $moduleSettings['desc']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="band_channel">Band & Channel</label>
			<div class="controls">
			  <input class="input-xlarge" id="band_channel" type="text" name="band_channel" value="<?php echo $moduleSettings['band_channel']; ?>">
			</div>
		    <span class="help-inline">...</span>
		  </div>


		<legend>Module Settings</legend>

		  <div class="control-group">
			<label class="control-label" for="timeout_min">Time Out</label>
			<div class="controls">
			  <input class="input-xlarge" id="timeout_min" type="text" name="timeout_min" value="<?php echo $moduleSettings['timeout_min']; ?>">
			</div>
		    <span class="help-inline">...Timeout in minutes</span>
		  </div>

	</fieldset>					
	
<!-- END FORM CONTENTS -->