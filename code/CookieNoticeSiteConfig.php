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
				'CookieNoticeEnable' => false,
				'CookieNoticeContent' => '<p>We use cookies on this site.</p>',
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
				new CheckboxField('CookieNoticeRequireAccept', 'Show cookie notice until the user has accepted cookies'),
				new LiteralField('CookieNoticeDeleteCookie', '<p style="margin-top:2em;color:#666">If you accepted the cookie notice and want to cancel the accept for the cookie notice to show again press this button:</p><button type="button" id="cookie-accept-delete" onclick="document.cookie = \'cookiesAccepted=deleted;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/\';alert(\'Your accept of cookies on this computer has been cancled.\');return false">Delete the accept of cookies on this computer</button>')
			)
		);
   	}
}