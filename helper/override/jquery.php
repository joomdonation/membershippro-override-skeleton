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
 * OSMembershipHelperOverrideJquery class
 *
 * This class can be used to override some common methods used in OSMembershipHelperJquery class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideJquery extends OSMembershipHelperJquery
{
	/**
	 * validate form
	 */
	public static function validateForm()
	{

	}
}