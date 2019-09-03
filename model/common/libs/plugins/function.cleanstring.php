<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_cleanstring($params, &$smarty) {

 	if($params['str'] != '')
 	{
 		echo clean($params['str']);
 	}
}

?>
