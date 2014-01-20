<% if ShowCookieNotice %>
<%-- require javascript(sapphire/thirdparty/jquery/jquery-packed.js) --%>
<% require javascript(cookienotice/javascript/cookie-notice.js) %>
<% require css(cookienotice/css/cookie-notice.css) %>
<% control SiteConfig %>
<!--googleoff: all-->
<div id="cookie-notice">
	<div id="cookie-notice-row" class="row">
		<div id="cookie-notice-column" class="large-12 columns">
			$CookieNoticeContent
			<% if CookieNoticeCloseText %>
				<form action="cookienotice/accept" method="get">
					<p><input id="cookie-notice-accept" type="submit" id="cookie-notice-accept" class="button radius small" value="$CookieNoticeCloseText" /></p>
				</form>
			<% end_if %>
		</div>
	</div>
</div>
<!--googleon: all-->
<% end_control %>
<% end_if %>


