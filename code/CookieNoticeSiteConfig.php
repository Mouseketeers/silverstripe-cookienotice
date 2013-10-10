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
		Requirements::javascript('cookienotice/javascript/cookie-notice.js');
		$fields->addFieldsToTab(
			'Root.CookieNotice',
			array(
				new CheckboxField('CookieNoticeEnable', 'Show cookie message'),				
				new HTMLEditorField('CookieNoticeContent', 'Cookie message', 15),
				new TextField('CookieNoticeCloseText', 'Text of Accept/Close button'),
				new CheckboxField('CookieNoticeRequireAccept', 'Show cookie notice until user has hit accept/close button'),
				new LiteralField('CookieNoticeDeleteCookie', '<p style="margin-top:3em;color:#666">If you accepted the cookie notice and want to cancel the accept for the cookie notice to show again press this button:</p><button id="cookie-accept-delete" href="#">Delete the accept of cookies on this computer</button>')
			)
		);
   	}
}