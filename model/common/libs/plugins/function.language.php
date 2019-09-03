<?php

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_language($params, &$smarty) {

        require_once DOC_ROOT . "/model/label.php";
        $lblObj = new Model_Label();

        $lblId = $params['labelId'];
        $langid = $_SESSION[SESSION_PREFIX.'languageId'];
        if($langid == '')
        {
                $langid = 1;
        }
        $cond = "labelId='" . $lblId . "' AND langId='" . $langid . "'";
        $lableArray = $lblObj->getLabelDetailsById($cond);
        //print_r($lableArray);die();
        return $lableArray['label'];
}

/* vim: set expandtab: */
?>
