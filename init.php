<?php defined('SYSPATH') or die('No direct script access.');

// Load Swiftmailer
if (!USES_COMPOSER) {
    include Kohana::find_file('vendor', 'swiftmailer/lib/swift_required', 'php');
}
