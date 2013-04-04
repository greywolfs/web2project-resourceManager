<?php
/* RESOURCE_M setup.php, v 0.1.0 2011/05/25 */
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
 *  Directory: resource_m
 *  Version 1.0
 *  Type: user
 *  UI Name: resource_m
 *  UI Icon: ?
 */

$config = array();
$config['mod_name'] = 'Resource Management';
$config['mod_version'] = '1.0';
$config['mod_directory'] = 'resource_m';
$config['mod_setup_class'] = 'CSetupResource_m';
$config['mod_type'] = 'user';
$config['mod_ui_name'] = 'Resource Management';
$config['mod_ui_icon'] = 'folder5.png';
$config['mod_description'] = 'This module display and edit the occupation of resources';
$config['mod_config'] = false;

$config['permissions_item_table'] = 'resource_m';
$config['permissions_item_field'] = 'resource_m_id';
$config['permissions_item_label'] = 'resource_m_name';

if (@$a == 'setup') {
	echo w2PshowModuleConfig($config);
}


class CSetupResource_m extends w2p_Core_Setup {

  function configure() { return true; }

  function remove() { return true; }
  
  function upgrade($old_version) { return true; }

  function install() { return true; }
}
