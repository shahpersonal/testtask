<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_media($params, &$smarty) {
	$filetype = $params['type'];
	$filename = $params['filename'];
	
	if($filetype == '1' || $filetype == '2')
	{
		

		$url = SITE_URL . "/includes/getID/demos/du.php";

		// Get cURL resource
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url ,
		    CURLOPT_USERAGENT => 'Street smart university',
		    CURLOPT_POST => 1,
		    CURLOPT_POSTFIELDS => array(
			item1 => $filename
		    )
		));
		// Send the request & save response to $resp
		$resp = curl_exec($curl);


		print_r($resp);
		// Close request to clear up some resources
		curl_close($curl);

	}else
	{
		echo '22 pages';
	}
	
}

?>
