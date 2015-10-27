<?php
class CookieNoticePageDecorator extends Extension {
	public static $CookieNoticeJavascriptEnabled = true;
	public function ShowCookieNotice() {		
		if(SiteConfig::current_site_config()->CookieNoticeEnable && !self::CookiesAccepted()) {
			if(!SiteConfig::current_site_config()->CookieNoticeRequireAccept) {
				Cookie::set('cookiesAccepted', 'true', 1000);
			}
			return true;
		}
		return false;
	}
	public function CookiesAccepted() {
		$cookie_accept = Cookie::get('cookiesAccepted');
		if($cookie_accept == 'true') {
			return true;
		}
		return false;
	}
	public function RequireAccept() {
		return SiteConfig::current_site_config()->CookieNoticeRequireAccept;
	}
}