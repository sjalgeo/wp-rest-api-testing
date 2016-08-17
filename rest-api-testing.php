<?php
/**
 * Plugin Name:     REST API Testing
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     rest-api-testing
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rest_Api_Testing
 */


require( 'lib/required-scripts.php');
require( 'lib/simple-test-script.php');

use SJAlgeo\WP_REST_API_Testing\Simple_Test_Script;
use SJAlgeo\WP_REST_API_Testing\Required_Scripts;

$required_scripts = new Required_Scripts();
$simple_test = new Simple_Test_Script();

$required_scripts->run();
$simple_test->run();