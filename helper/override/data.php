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
 * OSMembershipHelperOverrideData class
 *
 * This class can be used to override some common methods used in OSMembershipHelperOverrideData class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideData extends OSMembershipHelperData
{
	public static function excelExport($fields, $rows, $filename, $headers = array())
	{

	}
}