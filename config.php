<?php
/**
 * Configure the API keys
 *
 * you may optionally create a configuration file and put it outside of the
 * uploadcare folder, which will make future upgrading easier
 */
@include dirname(dirname(__FILE__)) . 'uploadcare_config.php';

/**
 * If not defined yet, please go ahead and enter your public and secret
 */
if (!defined('UC_PUBLIC_KEY')) {
	define('UC_PUBLIC_KEY', 'demopublickey');
}
if (!defined('UC_SECRET_KEY')) {
	define('UC_SECRET_KEY', 'demoprivatekey');
}
