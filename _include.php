<?php

// Name this file as "include.php" to enable it.

/**
 * @return string
 */
// phpcs:ignore PHPCompatibility.FunctionNameRestrictions.ReservedFunctionNames.FunctionDoubleUnderscore -- This name is a required RainLoop custom-data hook.
function __get_custom_data_full_path()
{
	return '';
	return '/var/external-rainloop-data-folder/'; // custom data folder path
}

/**
 * @return string
 */
// phpcs:ignore PHPCompatibility.FunctionNameRestrictions.ReservedFunctionNames.FunctionDoubleUnderscore -- This name is a required RainLoop configuration hook.
function __get_additional_configuration_name()
{
	return '';
	return defined('APP_SITE') && 0 < strlen(APP_SITE) ? APP_SITE.'.ini' : ''; // additional configuration file name
}
