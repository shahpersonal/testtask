<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_editcourse($params, &$smarty) {
 	if($params['userId'] != '')
 	{
 		require_once DOC_ROOT . "/model/course.php";
		$courseObj = new Model_Course();
		$userCourseArray = $courseObj->getCourseByUser($params['courseId'],$params['userId']);
	      
		if(!empty($userCourseArray))
		{
			echo '<a href="'.SITE_URL.'/course/course-basic?cid='.$params['courseId'].'" ><i class="fa fa-pencil"></i></a>';
		}
 	}
 	//echo '<pre>';print_r($params);echo '</pre>';//die();
}

?>
