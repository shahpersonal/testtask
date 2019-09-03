<?php
class Model_Brands extends Database {
	// Constructor
	function Model_Brands()
	{
		
		$this->brands 			= brands;
		$this->brmodels 			= models;
		$this->models_spec_en 			= models_spec_en;
		$this->Database();
	}

	function getAllBrands() {
		 mysql_set_charset($this->connection,"utf8");
	    $fields = array("brands_name_en,brands_name_ar,brands_url,brands_desc_ar,brands_hotline,brands_image,brands_logo,brands_status,brands_sort_order,brands_working_hours,brands_friday_working_hours,brands_offer,brands_address,brands_latitude,brands_longitude,brands_available");
		$tables = array($this->brands);	
	//	$where[] = ("brands_status=1");
		$result1 = $this->SelectData($fields, $tables, $where, $order = array("brands_name_en DESC"), $group = array(), $limit, $offset,0);
		$result = $this->FetchAll($result1);
		return $result;
	}
	function getAllModelWithSpecs() {
	
		$fields = array("models_id,models_type,models_name_en,models_name_ar,models_price,models_brand_id,models_sort_order,models_image,models_year ,models_desc_en,models_information_en
		,models_isinitial,models_view,models_status,models_test_drive_price,models_exterior_image,models_interior_image,models_testdrive_available,models_testdrive_atshowroom,models_testdrive_bydelivery,models_interior_available,models_editspec,models_specs_doc,models_comingsoon_month");
		$tables = array($this->brmodels);	
	//	$where[] = ("brands_status=1");
		$result1 = $this->SelectData($fields, $tables, $where, $order = array("models_name_en DESC"), $group = array(), $limit, $offset,0);
		$result = $this->FetchAll($result1);
		return $result;
	}
		function getAllSpecByModelId($modelId) {
		$fields=array("model_id,trim_sortorder,trim_price,spec_trim_en,spec_sub_trim_en");	
		$tables=array($this->models_spec_en);
		$where = array("model_id = '".$modelId."'");
		$result1 = $this->SelectData($fields,$tables, $where, $order=array(), $group=array(), $limit,$offset,0);
		$result= $this->FetchAll($result1);
		return $result;		
	}
}
?>
