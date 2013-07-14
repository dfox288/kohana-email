<?php defined('SYSPATH') or die('No direct script access.');

// Load Swiftmailer
if (
	!defined('USES_COMPOSER')
	|| defined('USES_COMPOSER') && !USES_COMPOSER
) {
    include Kohana::find_file('vendor', 'swiftmailer/lib/swift_required', 'php');
}
