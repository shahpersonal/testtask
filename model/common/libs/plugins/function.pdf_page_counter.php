<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsFunction
 */


function smarty_function_pdf_page_counter($params)
{
	$document = $params['fullurl'];
	$cmd = "/path/to/pdfinfo";           // Linux
        //$cmd = "C:\\path\\to\\pdfinfo.exe";  // Windows

	    // Parse entire output
	    exec("$cmd $document", $output);

	    // Iterate through lines
	    $pagecount = 0;
	    foreach($output as $op)
	    {
		// Extract the number
		if(preg_match("/Pages:\s*(\d+)/i", $op, $matches) === 1)
		{
		    $pagecount = intval($matches[1]);
		    break;
		}
	    }

    //echo  $pagecount;
    echo  '1:15';
    
}

?>
