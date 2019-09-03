<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_includefile($params, &$smarty)
{
       if(trim($params['file']))
        {
             $homepage = file_get_contents($params['file']);
             echo $homepage;
        }
}
/* vim: set expandtab: */
?>
