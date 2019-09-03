<?php

// include required files
require_once 'config/settings.php';
require_once '../model/brands.php';
// Create Objects
$brandsObj = new Model_Brands();
$modelLists = $brandsObj->getAllModelWithSpecs();
//echo "<pre>";print_r($modelLists);exit;
$smarty->assign('modelLists', $modelLists); 
$sitebaseurl = "https://www.showroomz.com/dev";
$smarty->assign('sitebaseurl', $sitebaseurl); 
 
unset($brandsObj);
$smarty->display(TEMPLATEDIR_ADMIN . 'index.tpl');
unset($smarty);
?>