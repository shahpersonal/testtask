<?php
/**
* Smarty plugin
* @package Smarty
* @subpackage plugins
*/
function smarty_function_custom_metatag($params, &$smarty) {

// Include File
require_once DOC_ROOT . "/model/seo.php";
require_once DOC_ROOT . '/model/cms.php';
require_once DOC_ROOT .'/model/users.php';
require_once DOC_ROOT . '/model/restaurant.php';
	
// Objects
$cmsObj = new Model_CMS();
$seoObj = new Model_SEO();
$userObj = new Model_Users();
$restaurantObj = new Model_Restaurants();

 if(isset($_SESSION[PREFIX.'languageId']) && $_SESSION[PREFIX.'languageId'] != '')
 {
$langid = $_SESSION[PREFIX.'languageId'];
 }else
 {
$langid = 1;
 }
 if(trim($params['seoId']) != '') {
	$meta = $seoObj->getSeoTranslateDetailsById($params['seoId'],$langid);
	?>
	<title><?php echo $meta['seoTitle']; ?></title>
	<meta name="title"  content="<?php echo return_fetched_value($meta['seoTitle']) ?>">
	<meta name="description"  content="<?php echo return_fetched_value(strip_tags($meta['seoDescp'])) ?>">
	<meta name="keywords"  content="<?php echo return_fetched_value($meta['seoKeywords']) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php
} elseif (trim($params['cmsId']) != '') {
	$cond = "pageID='" . $params['cmsId'] . "' AND langId = '" . $langid . "'";
	$cmsArray = $cmsObj->getCMSDetailById($cond);
	?>
	<title><?php echo $cmsArray['pageTitle']; ?></title>
	<meta name="title"  content="<?php echo $cmsArray['pageTitle']; ?>">
	<meta name="description"  content="<?php echo $cmsArray['pageTitle']; ?>">
	<meta name="keywords"  content="<?php echo $cmsArray['pageContents']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php
}  elseif(trim($params['userId']))
	{
			$meta = $userObj->getDetailsByUserId($params['userId']); 
			?>
			<title><?php echo ucfirst($meta['fname']).' '.ucfirst($meta['lname']);?></title>
			<meta name="title"  content="<?php echo return_fetched_value($meta['fname'].' '.$meta['lname']) ?>">
			<meta name="description"  content="">
			<meta name="keywords"  content="">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<?php
	}
	elseif(trim($params['restaurantId']))
	{
			$restmeta = $restaurantObj->getRestaurantDetailsByLangandRestId($params['restaurantId'],$langid);
			?>
			<title><?php echo $restmeta['rName'];?></title>
			<meta name="title"  content="<?php $restmeta['rName']; ?>">
			<meta name="description"  content="">
			<meta name="keywords"  content="">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<?php
	}
else{
	 $meta = $seoObj->getSeoTranslateDetailsById(1,$langid);
	?>
	<title><?php echo $meta['seoTitle']; ?></title>
	<meta name="title"  content="<?php echo return_fetched_value($meta['seoTitle']) ?>">
	<meta name="description"  content="<?php echo return_fetched_value(strip_tags($meta['seoDescp'])) ?>">
	<meta name="keywords"  content="<?php echo return_fetched_value($meta['seoKeywords']) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php
}  
}
?>