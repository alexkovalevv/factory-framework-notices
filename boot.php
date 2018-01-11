<?php
	/**
	 * Factory Notices
	 *
	 * @author Paul Kashtanoff <paul@byonepress.com>, Webcraftic <wordpress.webraftic@gmail.com>
	 * @copyright (c) 2013, OnePress Ltd, (c) 2017 Webcraftic Ltd
	 *
	 * @package factory-notices
	 * @since 1.0.0
	 */

	// module provides function only for the admin area
	if( !is_admin() ) {
		return;
	}

	if( defined('FACTORY_NOTICES_000_LOADED') ) {
		return;
	}
	define('FACTORY_NOTICES_000_LOADED', true);

	define('FACTORY_NOTICES_000_DIR', dirname(__FILE__));
	define('FACTORY_NOTICES_000_URL', plugins_url(null, __FILE__));

	#comp merge
	require(FACTORY_NOTICES_000_DIR . '/ajax.php');
	require(FACTORY_NOTICES_000_DIR . '/notices.php');
	#endcomp