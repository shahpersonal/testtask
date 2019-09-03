<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_courselink($params, &$smarty) {


	require_once DOC_ROOT . "/model/course.php";
	
	$courseObj = new Model_Course();
	
	$courseDetail = $courseObj->getCourseDetailById($params['courseId']);
	
	
 	if($params['userId'] != '')
 	{
 		require_once DOC_ROOT . "/model/users.php";
	
		$usersObj = new Model_Users();
		
		$userCourseArray = $courseObj->getCourseByUser($params['courseId'],$params['userId']);
		
		$courseArray = $usersObj->chkUserEnrolledCourse($params['userId'],$params['courseId']);
		
	      
		if(empty($courseArray))
		{
			echo '<a href="'.SITE_URL.'/courses/'.$courseDetail['seourl'].'" class="clearfix" >';
		}else
		{
			echo '<a href="'.SITE_URL.'/r/'.$courseDetail['seourl'].'" class="clearfix" >';
		}
 	}else
 	{
 		echo '<a href="'.SITE_URL.'/courses/'.$courseDetail['seourl'].'" class="clearfix" >';
 	}
 	//echo '<pre>';print_r($courseDetail);die();
}

?>
