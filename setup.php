<?php
/* resourceManager setup.php, v 0.1.0 2011/05/25 */
/*
* Copyright (c) 2011 Region Poitou-Charentes (France)
*
* Description:	Setup page of the Resource Management module.
*
* Author:		Simon BENUREAU, <simon.benureau@gmail.com>
*
* License:		GNU/GPL
*
* CHANGE LOG
*
* version 0.1.0
* 	Creation
*
*/
if (!defined('W2P_BASE_DIR')) {
  die('You should not access this file directly.');
}

/**
 *  Name: Resource Management
 *  Directory: resourceManager
 *  Version 1.0
 *  Type: user
 *  UI Name: resourceManager
 *  UI Icon: ?
 */

$config = array();
$config['mod_name'] = 'Resource Management';
$config['mod_version'] = '1.0';
$config['mod_directory'] = 'resourceManager';
$config['mod_setup_class'] = 'CSetupResourceManager';
$config['mod_type'] = 'user';
$config['mod_ui_name'] = 'Resource Management';
$config['mod_ui_icon'] = 'folder5.png';
$config['mod_description'] = 'This module display and edit the occupation of resources';
$config['mod_config'] = false;

$config['permissions_item_table'] = 'resourceManager';
$config['permissions_item_field'] = 'resourceManager_id';
$config['permissions_item_label'] = 'resourceManager_name';

if (@$a == 'setup') {
	echo w2PshowModuleConfig($config);
}


class CSetupresourceManager extends w2p_Core_Setup {

  function configure() { return true; }

  function remove() { return true; }
  
  function upgrade($old_version) { return true; }

  function install() { return true; }
}
