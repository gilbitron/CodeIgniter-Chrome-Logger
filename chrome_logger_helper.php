<?php

/**
 * Helper function for Chrome Logger
 * @link http://craig.is/writing/chrome-logger
 *
 * @author Gilbert Pellegrom
 * @link http://dev7studios.com
 * @version 1.0
 */
function chrome_log($object, $type = 'log')
{
	if(!file_exists(APPPATH .'third_party/ChromePhp.php')){
		echo 'Missing required file: third_party/ChromePhp.php';
		return;
	}
	
	require_once APPPATH .'third_party/ChromePhp.php';
	if($type == 'warn') ChromePhp::warn($object);
	else if($type == 'error') ChromePhp::error($object);
	else if($type == 'group') ChromePhp::group($object);
	else ChromePhp::log($object);
}