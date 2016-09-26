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
 * OSMembershipModelOverrideRegister class
 *
 * This class is used to show you how to override a model class in Membership Pro.
 */
class OSMembershipModelOverrideRegister extends OSMembershipModelRegister
{
	/**
	 * Process Subscription
	 *
	 * @param array    $data
	 * @param MPFInput $input
	 */
	public function processSubscription($data, $input)
	{
		// You can simply copy the original code of the method here, then customize it to meet your need. As this class is
		// extended from  OSMembershipModelRegister class, you can also call any (public/protected) methods from parent class
		// For example, just call parent::processSubscription($data, $input); will work, too
	}
}
