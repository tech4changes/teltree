<?php
defined('_SECURE_') or die('Forbidden');

// insert to left menu array
$menutab = $core_config['menutab']['features'];
$menu_config[$menutab][] = array(
	"index.php?app=main&inc=feature_sms_autoreply&op=sms_autoreply_list",
	_('Manage autoreply') 
);
