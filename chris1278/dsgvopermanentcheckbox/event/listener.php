<?php
/**
*
* @package phpBB Extension - Checkbox when registering for consent to permanent data storage
* @copyright (c) 2022 Chris1278
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\dsgvopermanentcheckbox\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	protected $request;
	protected $config;
	protected $template;
	protected $language;
	protected $php_ext;
	protected $phpbb_root_path;

	public function __construct(
		\phpbb\request\request_interface $request,
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\language\language $language,
		$phpEx,
		$phpbb_root_path
	)
	{
		$this->request			= $request;
		$this->config			= $config;
		$this->template			= $template;
		$this->language			= $language;
		$this->php_ext			= $phpEx;
		$this->phpbb_root_path	= $phpbb_root_path;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'						=> 'load_language_on_setup',
			'core.ucp_register_data_before'			=> 'ucp_register_data_before',
			'core.ucp_register_data_after'			=> 'ucp_register_data_after',
		];
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name'	=> 'chris1278/dsgvopermanentcheckbox',
			'lang_set'	=> 'dsgvopermanentcheckbox',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function ucp_register_data_before()
	{
		$dsgvo_privacy = append_sid("{$this->phpbb_root_path}ucp.$this->php_ext", 'mode=privacy');

		$this->template->assign_vars([
			'DSGVO_PERMANENT_INFO_TEMPLATE'				=> sprintf($this->language->lang('DSGVO_PERMANENT_INFO'), $dsgvo_privacy),
		]);

	}

	public function ucp_register_data_after($event)
	{
		$dsgvo_check = $this->request->variable('dsgvo_check', '');

		if (!$dsgvo_check == 'dsgvo_check')
		{
			$error = $event['error'];
			$error[] = $this->language->lang('DSGVO_CHECKBOX_ERROR');
			$event['error'] = $error;
		}

	}
}
