# Overriding Membership Pro extension code

From version 2.6.4, **Membership Pro** has a mechanism to allow you to override it's code (static methods, model, view, controller classes). So in case you have to customize **Membership Pro** to meet your own need, you won't have to worry about upgrading to loosing this customization while updating to future releases of the extension anymore. Below you can see the details:

## Override static methods (helper methods)

**Membership Pro** has some helper classes which you can see in components/com_osmembership/helper folder. Currently, the following static methods can be overrided:

1. OSMembershipHelper::buildTags
2. OSMembershipHelper::calculateIndividualRegistrationFees
3. OSMembershipHelper::calculateGroupRegistrationFees
4. OSMembershipHelper::calculateCartRegistrationFee
5. OSMembershipHelper::generateInvoicePDF
6. OSMembershipHelperMail::sendEmails
7. OSMembershipHelperMail::sendRegistrationApprovedEmail
8. OSMembershipHelperMail::sendRegistrationCancelledEmail
9. OSMembershipHelperMail::sendRegistrationCancelledEmail
10. OSMembershipHelperMail::sendWaitinglistEmail
11. OSMembershipHelperMail::sendDepositPaymentEmail
12. OSMembershipHelperMail::sendNewEventNotificationEmail
13. OSMembershipHelperMail::sendReminder
14. OSMembershipHelperMail::sendDepositReminder
15. OSMembershipHelperJquery::validateForm



To customize a method in one of these classes, please folow the steps below:

1. Create folder **override** under components/com_osmembership/helper folder 
2. Create a php file (same name with the php file which contains the method you want to override, for example **helper.php**, **mail.php**, **jquery.php**

3. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after **OSMembershipHelper** compare to the original class name and extends the original class. For example:

```php
/**
 * OSMembershipHelperOverrideHelper class
 *
 * This class can be used to override some common methods used in OSMembershipHelper class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideHelper extends OSMembershipHelper
{
}


/**
 *  OSMembershipHelperOverrideMail class
 *
 * This class can be used to override some common methods used in OSMembershipHelperMail class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideMail extends OSMembershipHelperMail
{

}


/**
 * OSMembershipHelperOverrideJquery class
 *
 * This class can be used to override some common methods used in OSMembershipHelperOverrideJquery class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Membership Pro
 */
class OSMembershipHelperOverrideJquery extends OSMembershipHelperJquery
{
}
```
4.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class

You can see the skeleton of the override code for these methods here https://github.com/joomdonation/osmembership-override-skeleton/tree/master/helper/override

## Override method in a controller class

If you need to override a method inside a controller, please follow the steps below:

1. Create folder **override** under components/com_osmembership/controller folder (or under  administrator/components/com_osmembership/controller if you want to override a backend controller)
2. Create a php file (same name with the php file which contains the method you want to override, for example **register.php**, **coupon.php**, **subscription.php**)
3. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after **OSMembershipController** compare to the original class name and extends the original class. For example:

```php
/**
 * OSMembershipControllerOverrideRegister class
 *
 * This class is used to show you how to override a controller class in Membership Pro.
 */
class OSMembershipControllerOverrideRegister extends OSMembershipControllerRegister
{

}
```
4.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class. See https://github.com/joomdonation/osmembership-override-skeleton/blob/master/controller/override/register.php for sample of controller override

## Override method in a model class

If you need to override a method inside a model, please follow the steps below:

1. Create folder **override** under components/com_osmembership/model folder (or under  administrator/components/com_osmembership/model if you want to override a backend model)
2. Create a php file (same name with the php file which contains the method you want to override, for example **register.php**, **plans.php**, **categories.php**)
3. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after **OSMembershipModel** compare to the original class name and extends the original class. For example:

```php
/**
 * OSMembershipModelOverrideRegister class
 *
 * This class is used to show you how to override a model class in Membership Pro.
 */
class OSMembershipModelOverrideRegister extends OSMembershipModelRegister
{

}
```
4.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class. See https://github.com/joomdonation/osmembership-override-skeleton/blob/master/model/override/register.php for a sample of override model classs.

## Override method in a view class

If you need to override a method inside a view, please follow the steps below:

1. Create folder **override** under components/com_osmembership/view folder (or under administrator/components/com_osmembership/view if you want to override a backend model)
2. Create a new folder - the name of this folder must be the same with name of the view you want to override, for example **register**, **subscriptions**, **profile**...
3. Create a php file - same name with the php file which contains the method you want to override, usually html.php, put it into the above folder
4. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after OSMembershipView compare to the original class name and extends the original class. For example:

```php
/**
 * Class OSMembershipViewOverrideRegisterHtml
 *
 * This class is used to show you how to override a view class in Membership Pro.
 */
class OSMembershipViewOverrideRegisterHtml extends OSMembershipViewRegisterHtml
{
}
```
5.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class. See https://github.com/joomdonation/osmembership-override-skeleton/blob/master/view/override/register/html.php for sample of override view class
