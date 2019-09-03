<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_discussion_like($params, &$smarty) {
 	if($params['userId'] != '')
 	{
 		require_once DOC_ROOT . "/model/discussion.php";
		$dsnObj = new Model_Discussion();
		
		$cond = "userId = ".$params['userId']." AND discussionId = ".$params['dsnId']." ";
		$userdsnArray = $dsnObj->getAllDiscussionLikeByCond($cond,$order,$group,$limit,$offset);
	      
		if(!empty($userdsnArray))
		{
			echo '<a href="javascript:;" l="'.$params['dsnId'].'" class="discussion-dislike" ><i class="fa fa-thumbs-o-up"></i> Liked</a>  ';
		}else
		{
			echo '<a href="javascript:;" l="'.$params['dsnId'].'" class="discussion-like" ><i class="fa fa-thumbs-o-up"></i> Like</a>  ';
		}
 	}
}

?>
