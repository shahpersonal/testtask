<?php
// URL : http://192.168.1.51/jeebley/services/services.php?action=register&langId=1&email=rahul@yopmail.com&password=123456&confirmPassword=123456&birthDate=1989-11-06&gender=m&deviceId=1234567895&deviceType=android&newsletterSubscription=y&smsSubscription=y

// Method : POST

header('Content-Type: application/json');

try {
    if ($langId != '') {
        if ($requestMethod == 'GET') {
            if (empty($email)) {
                $arr['response_code'] = 1;
                throw new Exception("Please enter email");
                
            } else if (empty($phone)) {
                $arr['response_code'] = 1;
                throw new Exception("Please enter phone");
                
            } 
			 else if (empty($password)) {
                $arr['response_code'] = 1;
                throw new Exception("Please enter password");
                
            }
			else if (empty($deviceId)) {
                $arr['response_code'] = 1;
                throw new Exception("Please send device id");
                
            } else if (empty($deviceType)) {
                $arr['response_code'] = 1;
                throw new Exception("Please send device type");
                
            } 
			else if (empty($name)) {
                $arr['response_code'] = 1;
                throw new Exception("Please send name");
                
            }else {
                if (substr($phone, 0, -7) != "9" && substr($phone, 0, -7) != "5" && substr($phone, 0, -7) != "6") {
					$arr['response_code'] = 1;
                    throw new Exception("Please Enter Valid Mobile Number");
                }
                               
                $userDetails = $usersObj->checkUserEmailExistsN($email);
                ///////////////////////////
				if (empty($userDetails)) {
						/// add user to database   
						$userArray          = array();
						$userArray['email'] = $email;
						$salt 				= genenrate_salt();					   
					    $generatedPassword 		= genenrate_password($salt,$password);
					    $userArray['password'] 		= $generatedPassword;
					    $userArray['salt'] 		= $salt;
						//$userArray['password'] = $xssObj->clean_input($password);                  
						$userArray['userType']  = 6;
						$userArray['birthdate'] = $birthDate;
						$userArray['status']    = 2;              
						$userArray['fname'] = $name;                
						$userArray['phone']           = $phone;
						$userArray['gender']          = $gender;
						$userArray['deviceId']        = $PlayerID;
						/// check device type
						if($deviceType=="1")
						{
						$userArray['deviceType']      = "ios";	
						}else{
						$userArray['deviceType']      = "android";	
						}
						
						
						$userArray['authToken']       = time();
						$userArray['regDate']         = date("Y-m-d H:i:s");
						$userId                 = $usersObj->addUserByValue($userArray);						
						$userArray['is_register']         = false;
						$userArray['response_code']         = 0;
						$userArray['userId']         =$userId ;
						$arr['success']          = $userArray;
																
						
						   
					   }
                        else{
							/// check address id for this user
							$arr['is_register']  = true;
							$arr['response_code']  = 3;							
							//print_r($menuId);
							$arr['error'] = "Email already exist.Please try to login with same email";	
                            						
							
						}						
				////////////////////////////
         
            }
        } else {
            $arr['response_code'] = 1;
            throw new Exception("Not Allowed");
            
        }
    } else {
		$arr['response_code'] = 1;
        throw new Exception("Please send language id");
    }
}
catch (Exception $e) {
    $arr['error'] = $e->getMessage();
}

unset($usersObj);

echo json_encode($arr);
?>