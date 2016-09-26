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
 * OSMembershipHelperOverrideHelper class
 *
 * This class can be used to override some common methods used in OSMembershipHelper class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideHelper extends OSMembershipHelper
{
	/**
	 * Build list of tags which will be used on emails & messages
	 *
	 * @param $row
	 * @param $config
	 *
	 * @return array
	 */
	public static function buildTags($row, $config)
	{

	}

	/**
	 * Calculate subscription fees based on input parameter
	 *
	 * @param JTable  $rowPlan the object which contains information about the plan
	 * @param MPFForm $form    The form object which is used to calculate extra fee
	 * @param array   $data    The post data
	 * @param Object  $config
	 * @param string  $paymentMethod
	 *
	 * @return array
	 */
	public static function calculateSubscriptionFee($rowPlan, $form, $data, $config, $paymentMethod = null)
	{

	}

	/**
	 * Generate invoice PDF
	 *
	 * @param object $row
	 */
	public static function generateInvoicePDF($row)
	{
		
	}
}