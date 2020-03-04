<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

use WHMCS\Module\Addon\CustomCodes\Admin\AdminDispatcher;
use WHMCS\Module\Addon\CustomCodes\Client\ClientDispatcher;

function CustomCodes_config()
{
    return array(
        'name' => 'Custom Codes', // Display name for your module
        'description' => 'This module provides you to add custom HTML, CSS and JS codes to a WHMCS websites client pages easily.', // Description displayed within the admin interface
        'author' => '<a href="https://omnisoftit.com" target="_blank">OmniSoft IT</a>', // Module author name
        'language' => 'english', // Default language
        'version' => '1.0', // Version number
        'fields' => array(
            // a text field type allows for single line text input
            'CustomCodesscript' => array(
                'FriendlyName' => 'Your clientarea footer',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The code you want to use for clientarea footer.',
            ),
            'HeadCustomCodesscript' => array(
                'FriendlyName' => 'Your clientarea head',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The code you want to use for clientarea head.',
            ),
            'HeaderCustomCodesscript' => array(
                'FriendlyName' => 'Your clientarea header',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The code you want to use for clientarea header.',
            ),
            'ProductDetailsCustomCodes' => array(
                'FriendlyName' => 'Your clientarea product details',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The code you want to use for product details.',
            ),
        )
    );
	return $configarray;
}