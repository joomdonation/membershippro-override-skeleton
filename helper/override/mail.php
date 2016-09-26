<?php
/**
 * @package            Joomla
 * @subpackage         Event Booking
 * @author             Tuan Pham Ngoc
 * @copyright          Copyright (C) 2010 - 2016 Ossolution Team
 * @license            GNU/GPL, see LICENSE.php
 */
// no direct access
defined('_JEXEC') or die;

/**
 * OSMembershipHelperOverrideMail class
 *
 * This class can be used to override some common methods used in OSMembershipHelperMail class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideMail extends OSMembershipHelperMail
{
	/**
	 * Send email to super administrator and user
	 *
	 * @param OSMembershipTableSubscriber $row
	 * @param object                      $config
	 */
	public static function sendEmails($row, $config)
	{

	}

	/**
	 * Send email when subscriber upgrade their membership
	 *
	 * @param JMail                       $mailer
	 * @param OSMembershipTableSubscriber $row
	 * @param stdClass                    $plan
	 * @param stdClass                    $config
	 * @param stdClass                    $message
	 * @param string                      $fieldSuffix
	 */
	public static function sendMembershipRenewalEmails($mailer, $row, $plan, $config, $message, $fieldSuffix)
	{

	}

	/**
	 * Send email when someone upgrade their membership
	 *
	 * @param JMail                       $mailer
	 * @param OSMembershipTableSubscriber $row
	 * @param stdClass                    $plan
	 * @param stdClass                    $config
	 * @param stdClass                    $message
	 * @param string                      $fieldSuffix
	 */
	public static function sendMembershipUpgradeEmails($mailer, $row, $plan, $config, $message, $fieldSuffix)
	{

	}

	/**
	 * Send email to subscriber to inform them that their membership approved (and activated)
	 *
	 * @param object $row
	 */
	public static function sendMembershipApprovedEmail($row)
	{

	}

	/**
	 * Send confirmation email to subscriber and notification email to admin when a recurring subscription cancelled
	 *
	 * @param $row
	 * @param $config
	 */
	public static function sendSubscriptionCancelEmail($row, $config)
	{

	}

	/**
	 * Send notification email to admin when someone update his profile
	 *
	 * @param $row
	 * @param $config
	 */
	public static function sendProfileUpdateEmail($row, $config)
	{

	}

	/**
	 * Method for sending first, second and third reminder emails
	 *
	 * @param array  $rows
	 * @param string $bccEmail
	 * @param int    $time
	 */
	public static function sendReminderEmails($rows, $bccEmail, $time = 1)
	{

	}
}