<?php defined('C5_EXECUTE') or die(_("Access Denied."));

use Concrete\Core\Block\BlockController;

class BasicTestBlockController extends BlockController {
	
	protected $btTable = "btBasicTest";
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "300";

	public function getBlockTypeName() {
		return t('Basic Test');
	}

	public function getBlockTypeDescription() {
		return t('A simple testing block for developers');
	}
}
