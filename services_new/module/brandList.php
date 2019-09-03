 <?php
// Method : GET
header('Content-Type: application/json');
try {
    
    if ($requestMethod == 'GET') {
        if (empty($action)) {
            
            $arr['response_code'] = 1;
            throw new Exception("Please pass action parameter");
            
        }
        $brandLists = $brandsObj->getAllBrands();
        if (empty($brandLists)) {
            
            $arr['response_code'] = 1;
            $arr['error']         = "No records in database !!";
            
        } else {
            
            $arr['response_code'] = 0;
            $arr['success']       = $brandLists;
                        
        }
              
    } else {
        $arr['response_code'] = 1;
        throw new Exception("Not Allowed");
        
    }
    
}
catch (Exception $e) {
    $arr['error'] = $e->getMessage();
}

unset($brandsObj);
echo json_encode($arr);
?> 