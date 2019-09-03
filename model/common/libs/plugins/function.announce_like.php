<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_announce_like($params, &$smarty) {
 	if($params['userId'] != '')
 	{
 		require_once DOC_ROOT . "/model/announce.php";
 		
		$annObj = new Model_Announce();
		
		$cond = "userId = ".$params['userId']." AND announcementId = ".$params['dsnId']." ";
		$userdsnArray = $annObj->getAllAnnounceLikeByCond($cond,$order,$group,$limit,$offset);
	      
		if(!empty($userdsnArray))
		{
			echo '<a href="javascript:;" l="'.$params['dsnId'].'" class="fb-dislike"><i class="fa fa-thumbs-o-up"></i> Liked</a>';
		}else
		{
			echo '<a href="javascript:;" l="'.$params['dsnId'].'" class="fb-like"><i class="fa fa-thumbs-o-up"></i> Like</a>';
		}
 	}
}

?>
