# Cookie Notice Module for SilverStripe CMS #
Adds cookie notice configuration to the site config

## Requirements
 * SilverStripe 3.1

## Installation
Install as normal and add <% include CookieNotice %> to your Page.ss template right after the body tag.

If you don't want javascripts (such as Google Analytics) to save cookies before the users has accepted them, put the scripts inside <% if CookiesAccepted %>[ Your scripts ]<% end_if %>


## Maintainer Contact
* Henrik Olsen
  <Henrik (at) mouseketeers (dot) dk>