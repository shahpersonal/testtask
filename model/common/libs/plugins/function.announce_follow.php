<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_announce_follow($params, &$smarty) {
 	if($params['userId'] != '')
 	{
 		require_once DOC_ROOT . "/model/discussion.php";
		$dsnObj = new Model_Discussion();
		
		$cond = "userId = ".$params['userId']."";
		$userdsnArray = $dsnObj->getAllDiscussionFollowByCond($cond,$order,$group,$limit,$offset);
	      
		if(!empty($userdsnArray))
		{
			echo '<a href="javascript:;" l="'.$params['dsnId'].'" class="discussion-un-follow">Following</a>';
		}else
		{
			echo '<a href="javascript:;" l="'.$params['dsnId'].'" class="discussion-follow">Follow</a>';
		}
 	}
}

?>
