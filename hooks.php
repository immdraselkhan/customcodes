<?php
use Illuminate\Database\Capsule\Manager as Capsule;
function CustomCodes_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'CustomCodes')->WHERE('setting' , '=', 'CustomCodesscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterCustomCodesEntities($widgetScript); // this displays the script as FooterCustomCodes text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $CustomCodesreturn = "$widgetScript";
    return($CustomCodesreturn);
}
function HeadCustomCodes_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'CustomCodes')->WHERE('setting' , '=', 'HeadCustomCodesscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterCustomCodesEntities($widgetScript); // this displays the script as FooterCustomCodes text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $CustomCodesreturn = "$widgetScript";
    return($CustomCodesreturn);
}
function HeaderCustomCodes_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'CustomCodes')->WHERE('setting' , '=', 'HeaderCustomCodesscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterCustomCodesEntities($widgetScript); // this displays the script as FooterCustomCodes text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $CustomCodesreturn = "$widgetScript";
    return($CustomCodesreturn);
}
function ProductDetailsCustomCodes_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'CustomCodes')->WHERE('setting' , '=', 'ProductDetailsCustomCodesscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterCustomCodesEntities($widgetScript); // this displays the script as FooterCustomCodes text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $CustomCodesreturn = "$widgetScript";
    return($CustomCodesreturn);
}
add_hook("ClientAreaFooterOutput",1,"CustomCodes_check");
add_hook("ClientAreaHeadOutput",1,"HeadCustomCodes_check");
add_hook("ClientAreaHeaderOutput",1,"HeaderCustomCodes_check");
add_hook("ClientAreaProductDetailsOutput",1,"ProductDetailsCustomCodes_check");