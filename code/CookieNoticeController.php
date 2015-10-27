<?php
class CookieNoticeController extends Controller {
	static $allowed_actions = array(
		'accept'
	);
	public function accept() {
		Cookie::set('cookiesAccepted', 'true', 1000);
		if(Director::is_ajax()) {	
			echo 'success';
			return;
		}
		else {
			return Director::redirectBack();
		}
	}
}