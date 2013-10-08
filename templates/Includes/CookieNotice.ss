<% if ShowCookieNotice %>
<%-- require javascript(sapphire/thirdparty/jquery/jquery-packed.js) --%>
<% require javascript(cookienotice/javascript/cookie-notice.js) %>
<% require css(cookienotice/css/cookie-notice.css) %>
<% control SiteConfig %>
<!--googleoff: index-->
<div id="cookie-notice">
	<div id="cookie-notice-row" class="row">
		<div id="cookie-notice-column" class="large-12 columns">
			$CookieNoticeContent
			<% if CookieNoticeCloseText %><a id="cookie-notice-accept" class="button radius small" href="/cookies/accept">$CookieNoticeCloseText</a><% end_if %>
		</div>
	</div>
</div>
<!--googleon: index-->
<% end_control %>
<% end_if %>


