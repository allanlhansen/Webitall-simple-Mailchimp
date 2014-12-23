<?php
/**
 * @copyright	@copyright	Copyright (c) 2014 Webitall ApS (www.webitall.dk). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$signup = JFactory::getApplication()->input->get('signup');

$class_sfx = htmlspecialchars($params->get('class_sfx'));

require(JModuleHelper::getLayoutPath('mod_webitall_simple_mailchimp', $params->get('layout', 'default')));