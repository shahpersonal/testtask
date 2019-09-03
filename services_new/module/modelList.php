<?php
// URL : http://192.168.1.51/jeebley/services/services.php?action=register&langId=1&email=rahul@yopmail.com&password=123456&confirmPassword=123456&birthDate=1989-11-06&gender=m&deviceId=1234567895&deviceType=android&newsletterSubscription=y&smsSubscription=y

// Method : POST

header('Content-Type: application/json');
header('charset: utf-8');

try {
   
        if ($requestMethod == 'GET') {
            if (empty($action)) {
				
                $arr['response_code'] = 1;
                throw new Exception("Please pass action parameter");
                
            }
			
                $modelLists = $brandsObj->getAllModelWithSpecs();
				
                ///////////////////////////
				if (empty($modelLists)) {
				
						$arr['response_code']  = 1;							
							//print_r($menuId);
							$arr['error'] = "No records in database !!";	
					   
					   }
                        else{
						 foreach($modelLists as $spec=>$value) {
                        //$value['areaID']
                        $specArray = $brandsObj->getAllSpecByModelId($value['models_id']);
                        $modelLists[$spec]['specArray'] = $specArray;

							}

						$arr['response_code']  = 0;
						$arr['success']          = $modelLists;
                            						
							
						}						
				////////////////////////////
         
            }
         else {
            $arr['response_code'] = 1;
            throw new Exception("Not Allowed");
            
        }
   
}
catch (Exception $e) {
    $arr['error'] = $e->getMessage();
}

unset($modelsObj);

//echo "<pre>";print_r($modelLists);exit;
echo json_encode($arr);
?>