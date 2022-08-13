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
	'DSGVO_PERMANEENT_CHECKBOX'					=> 'Einwilligung zur dauerhaften Datenspeicherung',
	'DSGVO_PERMANEENT_CHECKBOX_EXPLAIN'			=> 'Diese Einwilligung ist erforderlich damit wir deine Daten dauerhaft Speichern dürfen. Während des Registrierungsvorgang werden von dir ja Daten eingegeben, Optionale wie auch erforderliche Informationen. Die von dir eingegeben Daten kannst du später in deinem Persönlichen Bereich anpassen (sofern entsprechende Berechtigungen erteilt wurden). Zusätzlich wird allerdings auch die IP-Adresse in der Datenbank gespeichert mit der du dich dann Registriert hast. Diese bleibt solange gespeichert bis dein Benutzeraccount gelöscht wird und ist auch nicht änderbar.',
	'DSGVO_CHECKBOX_ERROR'						=> 'Die Checkbox für die Einwilligung zur dauerhaften Datenspeicherung muss aktiviert sein.',
	'DSGVO_PERMANENT_INFO'						=> 'Mit der dauerhaften Speicherung meiner personenbezogenen Daten zum Zwecke eines schnellen Forenlogin bin ich einverstanden. Die <a href="%1$s" target="_blank">Datenschutzerklärung</a> habe ich gelesen und erkläre mich damit Einverstanden.',
]);
