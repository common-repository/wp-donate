=== wp-donate ===
Contributors: ketanajani
Donate link: http://webconfines.com 
Tags: donate, stripe , credit card, payment, pay, transfer, charge, widget, form, chargly, recurly, recent, donation, donations, charity, transaction, money, wordpress
Requires at least: 5.0
Tested up to: 5.9.1
Requires PHP: 7.4
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP-Donate provides a payment form and recent donor by utilizing Stripe.

== Description ==

WP Donate provides a payment form and recent donor widget by utilizing stripe.com.

What wp-donate provides:

1. Listing of donor at admin area
1. At admin area it allows to set details related to payment gateway
1. From displayed at client side using Shortcode
1. Autherize.net payment gateway integration for accepting donation

If you need any modification in plugin or need some extra functionality than please let us know here [https://www.webconfines.com/contact-us](https://www.webconfines.com/contact-us)

== Installation ==

WP Donate can be used by either calling up a simple shortcode or adding the function to your template as below:

1. Upload the folder `wp-donate` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to WP Donate (for both Test & Live)
1. Place `[Display Donate]` or `[Display_Donate]` in your content or `<?php wp_donate_form(); ?>` in your template.

== Frequently Asked Questions ==
= Will it work on my Theme? =
WP-Donate features an inline form so that it can fit any theme. that you can customize it yourself.
= Can I expand this plugin =
Yes you can customize or expand plugin by adding new payment gateways to receive donation or customization can be made in form related to fields.
= About SSL =
In order to process transactions in a secure manner, you need to [purchase an SSL Certificate](http://www.noeltock.com/sslcertificates/). This way consumers can purchase/donate with confidence. There are multiple plugins for then enforcing that SSL be used on your page, [here's one](http://wordpress.org/extend/plugins/wordpress-https/).
= Support available? =
If you need any modification in plugin or need some extra functionality than please let us know here http://www.webconfines.com/contact-us
= What are limitations of this plugin? =
It is only available to users with Authorize.Net payment gateway to receive donations.

== Screenshots ==
1. screenshot-1.png
2. screenshot-2.png
3. screenshot-3.png
3. screenshot-4.png

== Changelog ==

= 1.2 =
* Provided some more details about plugin

= 1.3 =
* Removed error message and redirected to correct page after success.

= 1.4 =
* Modified database interactions for improvements and solved page redirect bug after successful payment by providing robust solution.

= 1.5 =
* Modified donation limit. Earlier it was minimum $10 and maximum $1000, now minimum is $1 and maximum is $100000

= 1.6 =
* Fixed short code issue for new WordPress versions.

= 1.7 =
* Made changes related to Akamai - according to latest Authorize.net Technical updates

= 1.8 =
* Update cert.pem latest version

= 1.9 =
* Removed non-GPL Authorized.net library.
* Upgraded plugin to process payment via direct APIs.

= 2.0 =
* Replaced Authorized.net payment gateway to stripe.com payment gateway.


== Upgrade Notice ==
* Upgrade to 1.6 will allow placing shortcodes with space and _ e.g. `[Display Donate]` or `[Display_Donate]`
* Upgrade to 1.7 is necessary as Akamai changes will take effect from 30th June 2016. There are few changes in API URLs
* Upgrade to 1.8 Update cert.pem latest version
* 1.8 to 1.9 Upgraded plugin to remove non-GPL Authorize.net library and implemented direct API to process payment.
