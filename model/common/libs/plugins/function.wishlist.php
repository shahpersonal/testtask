<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_function_wishlist($params, &$smarty) {


	require_once DOC_ROOT . "/model/users.php";
	
	$usersObj = new Model_Users();
	
	
	$userFavArray = $usersObj->getUserFavCourseByCourseId($params['userId'],$params['courseId']);
	
       // Check if course in user wish list
       
        if($params['page'] == 'detail')
        {
        	if(!empty($userFavArray))
		{
			echo '<a href="#url" class="remove-fav" l="'.$params['courseId'].'" ><i class="fa fa-heart"></i> Wishlisted</a>';
		}else
		{
			echo '<a href="#url" class="add-fav" l="'.$params['courseId'].'" ><i class="fa fa-heart-o"></i>Add To Wishlist</a>';
		}
        }else
        {
		if(!empty($userFavArray))
		{
		?>
			<span class="searchlistgrid-right-wishist remove-fav1" onclick="removeFromFourite(<?php echo $params['courseId'] ?>,'','#<?php echo $params['resp']; ?><?php echo $params['sid'] ?>',<?php echo $params['sid'] ?>);"  sid="<?php echo $params['sid'] ?>" l="<?php echo $params['courseId'] ?>" respid="<?php echo $params['resp']; ?>"><i class="fa fa-heart nohrto"></i> <i class="fa fa-heart nohrt"></i> Wishlisted</span>
		<?php	
		}else
		{
		?>
		
	<span class="searchlistgrid-right-wishist add-fav1" onclick="addToFourite(<?php echo $params['courseId'] ?>,'','#<?php echo $params['resp']; ?><?php echo $params['sid'] ?>',<?php echo $params['sid'] ?>);" sid="<?php echo $params['sid'] ?>" l="<?php echo $params['courseId'] ?>" respid="<?php echo $params['resp']; ?>"><i class="fa fa-heart-o nohrto"></i> <i class="fa fa-heart nohrt"></i> Add To Wishlist</span> 
	
		<?php 	
		}
	}

//echo '<pre>';print_r($params);//die();
}




?>
