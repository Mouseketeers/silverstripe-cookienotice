<% if ShowCookieNotice %>
<% require css(cookienotice/css/cookie-notice.css) %>
<% require javascript(framework/thirdparty/jquery/jquery.min.js) %>
<% require javascript(cookienotice/javascript/cookie-notice.js) %>

<% with $SiteConfig %>
<!--googleoff: all-->
<div id="cookie-notice">
	<div id="cookie-notice-row" class="row">
		<div id="cookie-notice-column" class="large-12 columns">
			$CookieNoticeContent
			<% if $CookieNoticeCloseText %>
				<form action="cookienotice/accept" method="get">
					<input id="cookie-notice-accept" type="submit" id="cookie-notice-accept" class="button tiny" value="$CookieNoticeCloseText" />
				</form>
			<% end_if %>
		</div>
	</div>
</div>
<!--googleon: all-->
<% end_with %>
<% end_if %>


