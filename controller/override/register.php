<?php
/**
 * @package        Joomla
 * @subpackage     Membership Pro
 * @author         Tuan Pham Ngoc
 * @copyright      Copyright (C) 2012 - 2016 Ossolution Team
 * @license        GNU/GPL, see LICENSE.php
 */

defined('_JEXEC') or die;

/**
 * OSMembershipControllerOverrideRegister class
 *
 * This class is used to show you how to override a controller class in Membership Pro.
 */
class OSMembershipControllerOverrideRegister extends OSMembershipControllerRegister
{
	/**
	 * Process subscription
	 *
	 * @throws Exception
	 */
	public function process_subscription()
	{
		// You can simply copy the original code of the method here, then customize it to meet your need. As this class is
		// extended from  OSMembershipControllerRegister class, you can also call any (public/protected) methods from parent class
		// For example, just call parent::process_subscription(); will work, too
	}
}
