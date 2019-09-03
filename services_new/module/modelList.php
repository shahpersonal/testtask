<?php
header('Content-Type: application/json');
try {
   
        if ($requestMethod == 'GET') {
            if (empty($action)) {
				
                $arr['response_code'] = 1;
                throw new Exception("Please pass action parameter");
                
            }
			
                $modelLists = $brandsObj->getAllModelWithSpecs();
				
				if (empty($modelLists)) {
				
						$arr['response_code']  = 1;							
						
							$arr['error'] = "No records in database !!";	
					   
					   }
                        else{
						 foreach($modelLists as $spec=>$value) {
                       
                        $specArray = $brandsObj->getAllSpecByModelId($value['models_id']);
                        $modelLists[$spec]['specArray'] = $specArray;
							}

						$arr['response_code']  = 0;
						$arr['success']          = $modelLists;
                            						
							
						}						
			         
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

echo json_encode($arr);
?>