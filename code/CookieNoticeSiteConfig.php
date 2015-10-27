<?php
class CookieNoticeSiteConfig extends DataExtension {
	private static $db = array(
		'CookieNoticeEnable' => 'Boolean',
		'CookieNoticeRequireAccept' => 'Boolean',
		'CookieNoticeContent' => 'HTMLText',
		'CookieNoticeCloseText' => 'Varchar(100)'
	);
	private static $defaults = array(
		'CookieNoticeEnable' => true,
		'CookieNoticeContent' => '<p>We use cookies on this site.</p>',
		'CookieNoticeCloseText' => 'Accept',
		'CookieNoticeRequireAccept' => 'true'
	);
	public function updateCMSFields(FieldList $fields) {
		Requirements::javascript('cookienotice/javascript/cookie-notice.js');
		$fields->addFieldsToTab(
			'Root.CookieNotice',
			array(
				new CheckboxField('CookieNoticeEnable', 'Show cookie message'),				
				new HTMLEditorField('CookieNoticeContent', 'Cookie message', 15),
				new TextField('CookieNoticeCloseText', 'Text of Accept/Close button'),
				new CheckboxField('CookieNoticeRequireAccept', 'Show cookie notice until the user has accepted cookies'),
				new LiteralField('CookieNoticeDeleteCookie', '<button type="button" id="cookie-accept-delete" onclick="document.cookie = \'cookiesAccepted=deleted;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/\';alert(\'Your accept of cookies on this computer has been cancled.\');return false">Cancel your accept of cookies on this computer</button>')
			)
		);
   	}
}