<?php
/**
 * Configuration File
 *
 * @package GetSimple
 * @subpackage Config
 */

$site_full_name     = 'GetSimple';
$site_version_no    = '3.3.16';
$name_url_clean     = lowercase(str_replace(' ','-',$site_full_name));
$ver_no_clean       = str_replace('.','',$site_version_no);
$site_link_back_url = 'http://get-simple.info/';

// cookie config
$cookie_name        = lowercase($name_url_clean) .'_cookie_'. $ver_no_clean; // non-hashed name of cookie
$cookie_login       = 'index.php'; // login redirect
$cookie_time        = '10800';     // in seconds, 3 hours
$cookie_path        = '/';         // cookie path
$cookie_domain      = "";        // cookie domain
$cookie_secure      = "";        // cookie secure only
$cookie_httponly    = true;        // cookie http only

$api_url            = 'http://get-simple.info/api/start/v3.php';
# $api_timeout        = 800; // time in ms defaults to 500
# $debugApi           = true;

$cookie_redirect = 'pages.php';

if (!defined('GSVERSION')) define('GSVERSION', $site_version_no);

?>
