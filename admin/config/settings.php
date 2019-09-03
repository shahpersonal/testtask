<?php
require_once '../config/configuration.php';
@session_start();
ob_start();
ini_set("display_errors", "1");
//ini_set('error_reporting', E_ALL ^ E_NOTICE ^ E_WARNING);
ini_set('error_reporting', 0);
//error_reporting(0);
## Set time zone
//date_default_timezone_set('Asia/Calcutta');
date_default_timezone_set('Asia/Kuwait');

include_once(DOC_ROOT . '/model/common/classes/Database.php');

/* * ********* Creating Object of Smarty ********** */
require(DOC_ROOT . '/model/common/libs/SmartyBC.class.php');

$smarty = new SmartyBC;
include_once (DOC_ROOT . '/model/common/classes/xss_clean.php');
/// create object to use security calss
/// echo "sdfdssfddsfdsfdsf";exit;

$xssObj = new xssClean;
// for Caching
$smarty->caching = 1;
// set the cache_lifetime 5 minutes
$smarty->cache_lifetime = 300;
$smarty->force_compile = true;
$smarty->setTemplateDir(DOC_ROOT . '/templates');
$smarty->setCompileDir(DOC_ROOT . '/templates_c');
$smarty->setCacheDir(DOC_ROOT . '/imagecache');
$smarty->setConfigDir(DOC_ROOT . '/config');
/////////////////class of security

/* * ********* End of Creating Object of Smarty ********** */

## Below file contains all the tables of the project
include_once(DOC_ROOT . '/config/tbl-names.php');

# get site variables and assign to smarty variables
require(DOC_ROOT . '/model/common.php');
require(DOC_ROOT . '/model/common/functions.php');

$commonObj = new Model_Common();

//pre($allVarraibles,1);
## Assign site url to smarty variable
$smarty->assign("siteroot", SITE_URL . '/admin');

$smarty->assign("siterootuser", SITE_URL);

## Assign header, footer and left menu files to smarty variables

/* * **** Admin side  ** */
$smarty->assign("header_start", TEMPLATEDIR_ADMIN . 'commonFiles/admin_header1.tpl');
$smarty->assign("header_end", TEMPLATEDIR_ADMIN . 'commonFiles/admin_header2.tpl');
$smarty->assign("footer", TEMPLATEDIR_ADMIN . 'commonFiles/footer.tpl');
$smarty->assign("languagetabs", TEMPLATEDIR_ADMIN . "commonFiles/languagetabs.tpl");
$smarty->assign("tool_tip", TEMPLATEDIR_ADMIN . "commonFiles/tool_tip.tpl");
?>
