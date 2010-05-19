<?php
if (Configure::read() == 0):
	$this->cakeError('error404');
endif;
?>
<?php
if (Configure::read() > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<?php
	/* Error check */
	if (!is_writable(TMP)) {
		echo '<p><span class="notice">';
		__('Your tmp directory is NOT writable.');
		echo '</span></p>';
	}

	$settings = Cache::settings();
	if (empty($settings)) {
		echo '<p><span class="notice">';
		__('Your cache is NOT working. Please check the settings in APP/config/core.php');
		echo '</span></p>';
	}

	$filePresent = null;
	if (!file_exists(CONFIGS.'database.php')) {
		echo '<p><span class="notice">';
		__('Your database configuration file is NOT present.');
		echo '<br/>';
		__('Rename config/database.php.default to config/database.php');
		echo '</span></p>';
	} else {
		$filePresent = true;
	}

	if (isset($filePresent)) {
		if (!class_exists('ConnectionManager')) {
			require LIBS . 'model' . DS . 'connection_manager.php';
		}
		$db = ConnectionManager::getInstance();
		@$connected = $db->getDataSource('default');

		if (!$connected->isConnected()) {
			echo '<p><span class="notice">';
			__('Cake is NOT able to connect to the database.');
			echo '</span></p>';
		}
	}
?>
<h3><?php __('Contents'); ?></h3>
<p>
	<?php
		echo $this->Html->link(
			__('Home',true),
			array('controller' => 'pages', 'action' => 'display', 'home')
		);
	?>
</p>