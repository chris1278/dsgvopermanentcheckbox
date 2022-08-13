<?php
/**
*
* @package phpBB Extension - Checkbox when registering for consent to permanent data storage
* @copyright (c) 2022 Chris1278
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'DSGVO_PERMANEENT_CHECKBOX'					=> 'Consent to permanent data storage',
	'DSGVO_PERMANEENT_CHECKBOX_EXPLAIN'			=> 'This consent is required so that we can store your data permanently. You will enter data during the registration process, both optional and required information. You can later adjust the data you have entered in your personal area (provided the appropriate authorizations have been granted). In addition, however, the IP address with which you then registered is also stored in the database. This remains stored until your user account is deleted and cannot be changed.',
	'DSGVO_CHECKBOX_ERROR'						=> 'The checkbox for consent to permanent data storage must be activated.		',
	'DSGVO_PERMANENT_INFO'						=> 'I agree to the permanent storage of my personal data for the purpose of a quick forum login. I have read the <a href="%1$s" target="_blank">privacy policy</a> and agree to it.',
]);
