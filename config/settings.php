<?php
include('configuration.php');

@session_start();
ob_start();

ini_set("display_errors", "1");
ini_set('error_reporting', E_ALL ^ E_NOTICE ^ E_WARNING);
ini_set('error_reporting', 1);

// Set time zone
//date_default_timezone_set('Asia/Calcutta');
date_default_timezone_set('Asia/Kuwait');
//error_reporting(E_ALL);

include_once(DOC_ROOT . '/model/common/classes/Database.php');
/* * ********* Creating Object of Smarty ********** */

require(DOC_ROOT . '/model/common/libs/SmartyBC.class.php');

$smarty = new SmartyBC;

function get_client_ip() {

    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
        return $ipaddress;
}

/////////////////class of security
require_once (DOC_ROOT . '/model/common/classes/xss_clean.php');
/// create object to use security calss
$xssObj = new xssClean;

// for Caching
$smarty->caching = 1;
// set the cache_lifetime 5 minutes
$smarty->cache_lifetime = 300;
$smarty->force_compile = true;
$smarty->setTemplateDir(DOC_ROOT . '/templates');
$smarty->setCompileDir(DOC_ROOT . '/templates_c');
$smarty->setCacheDir(DOC_ROOT . '/cache');
$smarty->setConfigDir(DOC_ROOT . '/config');
/* * ********* End of Creating Object of Smarty ********** */

// Below file contains all the tables of the project
include_once(DOC_ROOT . '/config/tbl-names.php');

// get site variables and assign to smarty variables
//require_once DOC_ROOT . '/controller/language.php';
require(DOC_ROOT . '/model/common.php');


require(DOC_ROOT . '/model/common/functions.php');

/*$commonObj = new Model_Common();
$allVarraibles = $commonObj->getAllVariables();

$k = 0;
while ($k < count($allVarraibles)) {
    // Site Name
    define($allVarraibles[$k]['name'], $allVarraibles[$k]['value']);
    $smarty->assign($allVarraibles[$k]['name'], $allVarraibles[$k]['value']);
    $k++;
}

	//to auto load classes
	/*function atLd($class_name) {
		  require_once DOC_ROOT.'/model/'.$class_name.'.php';
	}
	spl_autoload_register('atLd');*/

// Assign site url to smarty variable

$smarty->assign("siteroot", SITE_URL);

require(DOC_ROOT . '/controller/common.php');

// Assign header, footer and left menu files to smarty variables   
/* * **** User side  ** */
/*$smarty->assign("headerstart", TEMPLATEDIR . 'commonFiles/header1.tpl');
$smarty->assign("homePopupContent", TEMPLATEDIR . 'commonFiles/popupcontent.tpl');
$smarty->assign("headerend", TEMPLATEDIR . 'commonFiles/header2.tpl');
$smarty->assign("orderheaderend", TEMPLATEDIR . 'commonFiles/track-order-end.tpl');
$smarty->assign("footer", TEMPLATEDIR . 'commonFiles/footer.tpl');
$smarty->assign("postComment", TEMPLATEDIR . 'commonFiles/postComment.tpl');
$smarty->assign("right", TEMPLATEDIR . 'commonFiles/right.tpl');
$smarty->assign("blogHeader", TEMPLATEDIR . 'commonFiles/blogHeader.tpl');
$smarty->assign("customerDashboardMenu", TEMPLATEDIR . 'commonFiles/customerdashboardmenu.tpl');
$smarty->assign("adsRight", TEMPLATEDIR . 'commonFiles/adsRight.tpl');
$smarty->assign("adsRightHome", TEMPLATEDIR . 'commonFiles/adsRightHome.tpl');
$smarty->assign("adsTop", TEMPLATEDIR . 'commonFiles/adsTop.tpl');
$smarty->assign("adsRightInnerPages", TEMPLATEDIR . 'commonFiles/adsRightInnerPages.tpl');
$smarty->assign("showRestaurants", TEMPLATEDIR . 'commonFiles/showRestaurants.tpl');
$smarty->assign("foodCart", TEMPLATEDIR . 'commonFiles/foodCart.tpl');*/
?>
