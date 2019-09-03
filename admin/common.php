<?php
// Include Files
require(DOC_ROOT.'/model/users.php');
require(DOC_ROOT . '/model/restaurant.php');
require(DOC_ROOT . '/model/orders.php');
require(DOC_ROOT . '/model/advertise.php');
require(DOC_ROOT . '/model/revenue.php');
// Create Objects

$userObj 		= new Model_Users();
$restaurantObj  = new Model_Restaurants();
$ordObj     	= new Model_Orders();
$advertiseObj 	= new Model_Advertise();
$revenueObj = new Model_Revenue();
// ----------------login details-----------------------------

if($_SESSION['loginId']!='')
{

$loginDetails =$userObj->getLoginTimeByLoginId($_SESSION['loginId']);

$end_date = date("Y-m-d H:i:s");
$start_date = $loginDetails['loginTime'];
$loginDetails['loginFrom'] = calculateDateTimeDifference($start_date, $end_date);
$smarty->assign("loginDetails", $loginDetails);
}
//echo "<pre>";print_r($loginDetails);exit;
//----------------------login details ---------------------------

require_once DOC_ROOT.'/model/language.php';
$langObj = new Model_Language();
/*	$orderField = 'id';
$orderBy = 'ASC';
$langArray = $langObj->getLanguage($searchindex, $orderField, $orderBy);
//echo "<pre>";print_r($langArray);exit;
$smarty->assign('langArray', $langArray);*/
	$langArray = $langObj->getAllLanguages();
	$smarty->assign('langArray', $langArray);
if (isset($_GET['langId']) && $_GET['langId'] != "") {
				$langId = $_GET['langId'];
} else {
				$langId = 1;
}
$smarty->assign('langId', $langId);		

//-----------------User Detials ------------------
$adminDetails =$userObj->getDetailsByUserId($_SESSION['adminECommerceId']);
$userId = $adminDetails['userId'];

$smarty->assign('userId', $userId);		// login user Id

//echo "<pre>";print_r($userDetails);exit;

$smarty->assign("adminDetails", $adminDetails);
if($adminDetails['userId']!='')
{
	$loginUserArray = $userObj->getDetailsByUserId($adminDetails['userId']);   
	$rIds =$loginUserArray['restId'];
	if($adminDetails['userType']!=1 && $adminDetails['userType']!=2 && $adminDetails['userType']!=7)
	{
		$restaurantDetailsArray = $restaurantObj->getAllManagerAssignedRestaurantsforReports($rIds, $langId);
		$smarty->assign('selrest', $restaurantDetailsArray);
		 $brIds =$loginUserArray['brnchId'];
		if($brIds)
		{
		$branchDetailsArray = $restaurantObj->getAllbranchDetailByBranchId($brIds);
		
		$smarty->assign('selbranch', $branchDetailsArray);
		}
	}
	  
	
}
//	echo "<pre>";print_r($adminDetails);echo "</pre>";
//-----------------User Detials ------------------
$smarty->assign('loginPopup', "{width:600, height:300}");

/* get all languages*/
$langData = $langObj->getAllLanguage();
$smarty->assign('langData',$langData);

// Get Country For Admin By English Language Id
		 $adminCountryArray = $countryObj->getAllCountryByLangId(1);
		 $smarty->assign("adminCountryArray", $adminCountryArray);
// Assign session language
if($_SESSION['langID'] == ""){
	$_SESSION['langID'] = "1";
	$langID  = $_SESSION['langID'];
}
else{
	$langID  = $_SESSION['langID'];
}
$smarty->assign("langID",$langID);

// Assign country

if (isset($_SESSION['ctrID']) && $_SESSION['ctrID'] != '') {	
	$ctrID = $_SESSION['ctrID'];
} else {	
	$_SESSION['ctrID'] = "21";
	$ctrID  = $_SESSION['ctrID'];
}
$smarty->assign("ctrID",$ctrID);


// get country details
$cntrDetails = $countryObj->getCountryDetailByLanguageId($ctrID, $langID);
$smarty->assign("cntrDetails", $cntrDetails);
$cntrCurrency = $cntrDetails['cntrCurrency'];
$smarty->assign("cntrCurrency", $cntrCurrency);   


$hourArray 	= array("00","01","02","03","04","05","06","07","08","09","10","11","12");
$smarty->assign("hourArray",$hourArray);
$minuteArray 	= array("00","05","10","15","20","25","30","35","40","45","50","55","60");
$smarty->assign("minuteArray",$minuteArray);

for($i=0;$i<60;$i++){
	$secondArray[] = $i;
}
$smarty->assign("secondArray",$secondArray);
//echo "<pre>";print_r($minuteArray);exit;
if($_GET['bId'] != ''){
	// get branch id
	$bId = $_GET['bId'];
	$smarty->assign("bId",$bId);

}
// Get All Restaurant Name for Assigned User
if($adminDetails['userId']!='' && $adminDetails['restId']!='' )
{
	$loginUserArray = $userObj->getDetailsByUserId($adminDetails['userId']);   
    $restaurantArray = array_reverse(explode(',' , $loginUserArray['restId']));
	foreach($restaurantArray as $key=>$value) {
		 $restaurantName = $restaurantObj->getRestaurantNameByLangId($value,$langID);
		 $restaurantNamesArray[$key]['rName'] = $restaurantName['rName'];
	}
}
$restid = $adminDetails['restId'];
$restIds = explode(',' ,$restid);
$resturantid = $restIds['0'];
$restaurantDetailsArray = $restaurantObj->getRestaurantDetailsById($restIds[0]);
$enable_timestamp =  $restaurantDetailsArray['0']['enable_timestamp_report'];
$smarty->assign('enable_timestamp', $enable_timestamp);

$smarty->assign("restaurantNamesArray",$restaurantNamesArray);
// Get Count Of Customer
$currentMonth = date('m');
$customerDetails=$userObj->getCustomerCountByDate($currentMonth);
$smarty->assign("todaysCustomers",$customerDetails['customerCount']);
 
//echo "Common aftewr seonccustomerDetails";die;
// Get Count Of Restaurants
$restaurantDetails=$restaurantObj->getRestaurantCountByDate($currentMonth);
$smarty->assign("todaysRestaurants",$restaurantDetails['restaurantCount']);

// Get Restaurants Request Count
//$restaurantRequestCount = $restaurantObj->getAllUnreadRestaurantRequestCount();
//$smarty->assign("totalRequests",$restaurantRequestCount['requestCount']);

// Get Restaurants Request Count
$currentMonth = date('m');
$requestOrderCount = $ordObj->getTotalRequestOrderCountByDate($currentMonth);
$smarty->assign("totalOrderRequests",$requestOrderCount['requestOrderCount']);
// Get Total Count Of  Orders currentMonth
$currentMonth = date('m');
$todayOrderDetails = $ordObj->getTotalOrderCountByDate($currentMonth,$ctrID);
$smarty->assign("todaysOrderCount",$todayOrderDetails['orderCount']);

// Get Total Count Of  Cancelled Orders currentMonth
$currentMonth = date('m');
$todayCancelledOrderDetails = $ordObj->getTotalCancelledOrderCountByDate($currentMonth,$ctrID);
$smarty->assign("todaysCancelledOrderCount",$todayCancelledOrderDetails['cancelledorderCount']);

// Get Total Count Of   Track Order Request currentMonth
//$currentMonth = date('m');
//$todayTrackOrderDetails = $ordObj->getTotalTrackOrderRequestByDate($currentMonth);
//$smarty->assign("todaysTrackRequestCount",$todayTrackOrderDetails['trackOrderCount']);
//pre($todayTrackOrderDetails,1);
// Get Total Count Of todays Advertisement
$currentMonth = date('m');
$currentYear = date('Y');
$todayAdvDetails = $advertiseObj->getTotalAdvertisementCountByDate($currentMonth,$currentYear,$ctrID);
$smarty->assign("todaysAdvertisemetCount",$todayAdvDetails['advertiseCount']);

// Get Top Ten Customers with Maxmimum Orders
/*$currentMonth = date('m');
$userOrderDetailsArray = $ordObj->getTopTenUserswithMaximumOrder($currentMonth,$ctrID);
$smarty->assign("userOrderDetailsArray",$userOrderDetailsArray);*/

// Get Total Revenue  Of Today
$currentMonth = date('m');
$restaurantOrderDetailsArray = $ordObj->getTotalOrderRevenueByDateandCountry($currentMonth,$ctrID);
$smarty->assign("todaysOrderRevenue",$restaurantOrderDetailsArray['totalOrderRevenue']);

// Get Total Admin Comission Revenue  Of Today
$currentMonth = date('m');
$adminComissionDetailsArray = $ordObj->getTotalJeebleyCommissionByDateandCountry($currentMonth,$ctrID);
//pre($adminComissionDetailsArray,1);
$smarty->assign("todaysAdminCommision",$adminComissionDetailsArray['totalAdminComission']);
// Get Advertisement Revenue  Of Today
$currentMonth = date('m');
$currentYear = date('Y');
$advertiseDetailsArray = $ordObj->getTotalAdvRevenueByDateandCountry($currentMonth,$currentYear,$ctrID);
$smarty->assign("todaysAdvRevenue",$advertiseDetailsArray['advertiseRevenue']);	

// Get Total Count Of todays Orders By Website 
$currentMonth = date('m');
$todayOrderWebsiteDetails = $ordObj->getTotalOrdersByWebsiteByDate($currentMonth,$ctrID);
$smarty->assign("todaysWebsiteOrderCount",$todayOrderWebsiteDetails['websiteOrderCount']);

// Get Total Count Of todays Orders By Andriod 
$currentMonth = date('m');
$todayOrderAndriodDetails = $ordObj->getTotalOrdersByAndriodByDate($currentMonth,$ctrID);
$smarty->assign("todaysAndriodOrderCount",$todayOrderAndriodDetails['andriodOrderCount']);

// Get Total Count Of todays Orders By  Iphone
$currentMonth = date('m');
$todayOrderIphoneDetails = $ordObj->getTotalOrdersByIphoneByDate($currentMonth,$ctrID);
$smarty->assign("todaysIphoneOrderCount",$todayOrderIphoneDetails['iphoneOrderCount']);

// Get Total Count Of todays Orders By Ipad 
$currentMonth = date('m');
$todayOrderIpadDetails = $ordObj->getTotalOrdersByIpadByDate($currentMonth,$ctrID);
$smarty->assign("todaysIpadOrderCount",$todayOrderIpadDetails['ipadOrderCount']);

// Get Total Count Of Other Revenue
$currentMonth = date('m');
$todayOtherRevenueDetails = $revenueObj->getTotalOthersRevenueByDate($currentMonth,$ctrID);
$smarty->assign("todaysOthersCount",$todayOtherRevenueDetails['othersCount']);	

// Get Other Revenue  Of Today
$currentMonth = date('m');
$othersRevenueDetailsArray = $revenueObj->getTotalOthersRevenueByDateandCountry($currentMonth,$ctrID);
$smarty->assign("todaysOthersRevenue",$othersRevenueDetailsArray['othersRevenue']);		

// Add Order and Advertisement Revenue and Others Revenue
$todaysTotalRevenue = $adminComissionDetailsArray['totalAdminComission'] + $advertiseDetailsArray['advertiseRevenue'] + $othersRevenueDetailsArray['othersRevenue'];
$smarty->assign("todaysTotalRevenue",$todaysTotalRevenue);	
// Get All Top Restaurants with max Orders
/*$currentMonth = date('m');
$topResataurantDetailsArray = $ordObj->getTopTenRestaurantOrderByDate($currentMonth,$ctrID,$langID);
$smarty->assign("topResataurantDetailsArray",$topResataurantDetailsArray);

// Get  All Lowest Restaurants with min Orders
$currentMonth = date('m');
$lowestopResataurantDetailsArray = $ordObj->getLowestTenRestaurantOrderByDate($currentMonth,$ctrID,$langID);
$smarty->assign("lowestopResataurantDetailsArray",$lowestopResataurantDetailsArray);
//pre($lowestopResataurantDetailsArray,0);
// Get All Restaurants Not in Orders
$restNotInOrdersArray= $ordObj->getRestaurantsNotOrderedYetByDate($ctrID,$langID);
$lowestRestaurantArray= array_merge($restNotInOrdersArray,$lowestopResataurantDetailsArray);
$smarty->assign("lowestopResataurantDetailsArray",$lowestRestaurantArray);
// Get  All Lowest Areas with min Orders
$currentMonth = date('m');
$lowestAreaDetailsArray = $ordObj->getLowestTenAreasByDate($currentMonth,$ctrID,$langID);
$smarty->assign("lowestAreaDetailsArray",$lowestAreaDetailsArray);	*/

$abc = COUNTDOWN_TIME/1000;
$smarty->assign("abc",$abc);

?>