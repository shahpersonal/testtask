<?php
//************************************************//
// ALL COMMON FUNCTIONS FOR USER AREA WILL BE HERE
//************************************************//
require 'vendor/autoload.php';
use Aws\S3\S3Client;	
function redirect($filename, $querystring)
{
    #  IF QUERYSTRING IS ARRAY #
    if (is_array($querystring) && sizeof($querystring) > 0) {
        $_x = http_build_query($querystring);
    }
    #  IF QUERYSTRING IS STRING #
    if (strlen(trim($querystring)) > 0) {
        $_x = $querystring;
    }
    if (strlen(trim($_x)) < 1) {
        header("Location:{$filename}");
        exit;
    } else {
        header("Location:{$filename}" . "?" . $_x);
        exit;
    }
}
/* function definition to redirect the page */
function redirect_to_link($link_path)
{
    echo "<script type='text/javascript'>window.location.href='" . $link_path . "'</script>";
    exit();
}
function get_time_difference($start, $end)
{
    $uts['start'] = strtotime($start);
    $uts['end']   = strtotime($end);
    if ($uts['start'] !== -1 && $uts['end'] !== -1) {
        if ($uts['end'] >= $uts['start']) {
            $diff = $uts['end'] - $uts['start'];
            if ($days = intval((floor($diff / 86400))))
                $diff = $diff % 86400;
            if ($hours = intval((floor($diff / 3600))))
                $diff = $diff % 3600;
            if ($minutes = intval((floor($diff / 60))))
                $diff = $diff % 60;
            $diff = intval($diff);
            return (array(
                'days' => $days,
                'hours' => $hours,
                'minutes' => $minutes,
                'seconds' => $diff
            ));
        } else {
            trigger_error("Ending date/time is earlier than the start date/time", E_USER_WARNING);
        }
    } else {
        trigger_error("Invalid date/time data detected", E_USER_WARNING);
    }
    return (false);
}
function dateDifference($day_1, $day_2)
{
    $diff  = strtotime($day_1) - strtotime($day_2);
    $sec   = $diff % 60;
    $diff  = intval($diff / 60);
    $min   = $diff % 60;
    $diff  = intval($diff / 60);
    $hours = $diff % 24;
    $days  = intval($diff / 24);
    return array(
        $sec,
        $min,
        $hours,
        $days
    );
}
function calculateDateTimeDifference($start, $end = "NOW")
{
    $sdate = strtotime($start);
    $edate = strtotime($end);
    $time  = $edate - $sdate;
    if ($time >= 0 && $time <= 59) {
        // Seconds
        $timeshift = $time . ' seconds ';
    } elseif ($time >= 60 && $time <= 3599) {
        // Minutes + Seconds
        $pmin      = ($edate - $sdate) / 60;
        $premin    = explode('.', $pmin);
        $presec    = $pmin - $premin[0];
        $sec       = $presec * 60;
        $timeshift = $premin[0] . ' min ' . round($sec, 0) . ' sec ';
    } elseif ($time >= 3600 && $time <= 86399) {
        // Hours + Minutes
        $phour     = ($edate - $sdate) / 3600;
        $prehour   = explode('.', $phour);
        $premin    = $phour - $prehour[0];
        $min       = explode('.', $premin * 60);
        $presec    = '0.' . $min[1];
        $sec       = $presec * 60;
        $timeshift = $prehour[0] . ' hrs ' . $min[0] . ' min ' . round($sec, 0) . ' sec ';
    } elseif ($time >= 86400) {
        // Days + Hours + Minutes
        $pday      = ($edate - $sdate) / 86400;
        $preday    = explode('.', $pday);
        $phour     = $pday - $preday[0];
        $prehour   = explode('.', $phour * 24);
        $premin    = ($phour * 24) - $prehour[0];
        $min       = explode('.', $premin * 60);
        $presec    = '0.' . $min[1];
        $sec       = $presec * 60;
        $timeshift = $preday[0] . ' days ' . $prehour[0] . ' hrs ' . $min[0] . ' min ' . round($sec, 0) . ' sec ';
    }
    return $timeshift;
}
# is login function 
function isLogin($msg)
{
    if ($_SESSION[SESSION_PREFIX . 'UserId'] == '') {
        $_SESSION['error_msg'] = 'Login required';
        header('location:' . SITE_URL);
        exit();
    }
}
# is login function 
function isEnrolled($seo)
{
    $_SESSION['error_msg'] = 'You are not enrolled with this course, So you can not access content of this course';
    header('location:' . SITE_URL . "/view/'.$seo");
    exit();
}
function isLogOut($msg)
{
    session_destroy();
    session_start();
}
// check Admin Accessible page
function adminPage()
{
    if ($_SESSION["admin_type"] != '1') {
        $_SESSION['msg'] = '<section class="alert alert-danger">This URL not accessible for you.</section>';
        header("Location:" . SITE_URL . "/admin/");
        exit();
    }
}
/* function definition to add adslashes in post values */
function return_post_value($post_value)
{
    $post_value = html2txt($post_value);
    if (get_magic_quotes_gpc())
        return trim($post_value);
    else
        return addslashes(trim($post_value));
}
/* function definition to add stripslashes in fetched values */
/* function definition to add stripslashes in fetched values */
function return_fetched_value($fetched_value)
{
    $fetched_value = html2txt($fetched_value);
    return stripslashes(trim($fetched_value));
}
function file_extension($filename)
{
    return end(explode(".", $filename));
}
function valid_extension($fileExt)
{
    if ($fileExt == 'jpg' || $fileExt == 'JPG' || $fileExt == 'jpeg' || $fileExt == 'JPEG' || $fileExt == 'PNG' || $fileExt == 'png' || $fileExt == 'GIF' || $fileExt == 'gif' || $fileExt == 'BMP' || $fileExt == 'bmp') {
        return true;
    }
}
function valid_pdf($fileExt)
{
    if ($fileExt == 'pdf') {
        return true;
    }
}
//http://in2.php.net/strip_tags          
function html2txt($document)
{
    $search = array(
        '@<script[^>]*?>.*?</script>@si', // Strip out javascript 
        '@<![\s\S]*?--[ \t\n\r]*>@' // Strip multi-line comments including CDATA 
    );
    $text   = preg_replace($search, '', $document);
    $text   = preg_replace("/<link[^>]+\>/i", "", $text);
    return $text;
}
//Redirect to Home Page if Session is false
function checkLoggedInStatus()
{
    if ($_SESSION['stagUserId'] == '') {
        header("location:" . SITE_URL . "/");
    }
}
## Remove special Characters From string
function clean($string)
{
    $string = str_replace('&', 'and', $string); // Replaces all spaces with hyphens.
    $string = str_replace(',', '', $string); // Replaces all spaces with hyphens.
    $string = str_replace('-', '-', $string); // Replaces all spaces with hyphens.
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = str_replace("'", '', $string); // Replaces all spaces with hyphens.
    $string = str_replace("(", '', $string); // Replaces all spaces with hyphens.
    $string = str_replace(")", '', $string); // Replaces all spaces with hyphens.
    $string = preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&--,]/s", '', $string); // Removes special chars.   
    return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
// This function create salt
function genenrate_salt()
{
    $rndstring = "";
    $length    = 64;
    $a         = "";
    $b         = "";
    $template  = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    settype($length, "integer");
    settype($rndstring, "string");
    settype($a, "integer");
    settype($b, "integer");
    for ($a = 0; $a <= $length; $a++) {
        $b = rand(0, strlen($template) - 1);
        $rndstring .= $template[$b];
    }
    return $rndstring;
}
// This function generate random code 
function generateRandomNumericCode($length)
{
    $characters   = '0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
// This function generate Random password
function genenrate_password($salt, $pass)
{
    $password_hash = '';
    $mysalt        = $salt;
    $password_hash = hash('SHA256', "-" . $mysalt . "-" . $pass . "-");
    return $password_hash;
}
// Function for Currency Convert
function convertCurrency($amount, $from_Currency, $to_Currency)
{

    //$amount = '70';
    //$from_Currency = 'INR';
    //$to_Currency = 'USD';
    $amount        = urlencode($amount);
    $from_Currency = urlencode($from_Currency);
    $to_Currency   = urlencode($to_Currency);
    $get           = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=$from_Currency&to=$to_Currency");
    $get           = explode("<span class=bld>", $get);
    $get           = explode("</span>", $get[1]);
    return $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
}
// Function print all session detail and exit
function printsessionexit()
{
    echo '<pre>';
    print_r($_SESSION);
    die();
}
// Function print all Request(get or post) detail and exit
function printrequestexit()
{
    echo '<pre>';
    print_r($_REQUEST);
    die();
}
// Function print all session detail
function printsession()
{
    echo '<pre>';
    print_r($_SESSION);
}
// Function print all Request(get or post) detail
function printrequest()
{
    echo '<pre>';
    print_r($_REQUEST);
}
function CheckUserLogin()
{
    if (!isset($_SESSION[PREFIX . 'uid']) && $_SESSION[PREFIX . 'uid'] == '') {
        redirect(SITE_URL . '/users/login');
        exit;
    }
}


function cleanInputs($data){

	$clean_input = array();
	if(is_array($data)){
		foreach($data as $k => $v){
			$clean_input[$k] = cleanInputs($v);
		}
	}else{
		if(get_magic_quotes_gpc()){
			$data = trim(stripslashes($data));
		}
		$data = strip_tags($data);
		$clean_input = trim($data);
	}
	return $clean_input;

}

?>