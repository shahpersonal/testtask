<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_date_time_format($params, &$smarty) {

$first_date =$params['first_date'];

$start_date = new DateTime($first_date);
$since_start = $start_date->diff(new DateTime(date('Y-m-d H:i:s')));


//echo $since_start->days.' days total<br>';
echo $since_start->y;
echo $since_start->m;
echo $since_start->d;
echo $since_start->h;
echo $since_start->i;
echo $since_start->s;
 
//echo '<pre>';print_r($params);//die();
}




?>
