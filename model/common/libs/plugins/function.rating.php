<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_rating($params, &$smarty) {
//echo $params['rate'];

if ($params['rate'] ==  '5')
{
?>
 <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
<?php
}
elseif ($params['rate'] ==  '4')
{
?>
  <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
<?php
}
elseif ($params['rate'] ==  '3')
{
?>
 <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
<?php
}
elseif ($params['rate'] ==  '2')
{
?>

   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
<?php
}
elseif ($params['rate'] ==  '1')
{
?>
  <img src="<?php echo SITE_URL; ?>/siteAssets/images/star-yellow.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />

<?php
}
else
{
?>
	  <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
								   <img src="<?php echo SITE_URL; ?>/siteAssets/images/star.png" alt="Star" title="Star" />
<?php
}
//print_r($params);
 	
}

?>
