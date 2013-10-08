<?php
class CookieNoticeSiteConfig extends DataObjectDecorator {
	function extraStatics() {
		return array(
			'db' => array(
				'CookieNoticeEnable' => 'Boolean',
				'CookieNoticeRequireAccept' => 'Boolean',
				'CookieNoticeContent' => 'HTMLText',
				'CookieNoticeCloseText'  => 'Varchar(100)'
			),
			'defaults' => array(
				'CookieCloseText' => 'Accept',
				'CookieNoticeRequireAccept' => 'true'
			)
		);
	}
	public function updateCMSFields(FieldSet &$fields) {
		$fields->addFieldsToTab(
			'Root.CookieNotice',
			array(
				new CheckboxField('CookieNoticeEnable', 'Show cookie message'),				
				new HTMLEditorField('CookieNoticeContent', 'Cookie message', 15),
				new TextField('CookieNoticeCloseText', 'Text of Accept/Close button'),
				new CheckboxField('CookieNoticeRequireAccept', 'Show notice until accepted')


			)
		);
   	}
}