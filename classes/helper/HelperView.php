<?php
/*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 9194 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class HelperViewCore extends Helper
{
	public $id;
	public $toolbar = true;
	public $table;
	public $token;

	/** @var if not null, a title will be added on that list */
	public $title = null;

	public function __construct()
	{
		$this->base_folder = 'helpers/view/';
		$this->base_tpl = 'view.tpl';
		parent::__construct();
	}

	public function generateView()
	{
		$this->tpl = $this->createTemplate($this->base_tpl);

		$this->tpl->assign(array(
			'title' => $this->title,
			'current' => $this->currentIndex,
			'token' => $this->token,
			'table' => $this->table,
			'show_toolbar' => $this->show_toolbar,
			'toolbar_scroll' => $this->toolbar_scroll,
			'toolbar_btn' => $this->toolbar_btn,
			'link' => $this->context->link
		));

		return parent::generate();
	}
}
