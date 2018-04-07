<?php

$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath . "/config/DB.php");

class PropertyModel {

    public function AddProperty($input, $db) {
       $date = date('m-d-Y');
        try {
                $stmt = $db->prepare("INSERT INTO tbl_property(SocietyDbKey,Tower,Block,PropertyNo,PropertyType,UnitType,ParkingType,UnitOfMeasurement,OriginalArea,RevisedArea,PropertyDisplayName,Remarks,Status,Currency,CurrencyAmount,ExchangeRate,OriginalPrice,RevisedPrice,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11,:f12,:f13,:f14,:f15,:f16,:f17,:f18,:f19)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['Tower'], ':f3' => $input['Block'], ':f4' => $input['PropertyNo'], ':f5' => $input['PropertyType'], ':f6' => $input['Unit_Type'], ':f7' => $input['ParkingType'], ':f8' => $input['UnitOfMeasurement'], ':f9' => $input['OriginalArea'], ':f10' => $input['RevisedArea'], ':f11' => $input['PropertyDisplayName'], ':f12' => $input['Remarks'], ':f13' => $input['Status'], ':f14' => $input['Currency'], ':f15' => $input['CurrencyAmount'], ':f16' => $input['ExchangeRate'], ':f17' => $input['OriginalPrice'], ':f18' => $input['RevisedPrice'], ':f19' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    
    public function AllProperty($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_property ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE Tower LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR PropertyNo LIKE "%' . $input["search"]["value"] . '%" ';
        }
       
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_property");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            if($row['Status'] == 0){
                $Status = '<span class="label label-danger">Inactive</span>';
            }else{
                $Status = '<span class="label label-success">Active</span>';
            }
            $sub_array = array();
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $sub_array[] = $SocietyName;
            $sub_array[] = "<a onclick='viewdetails(".$row["DbKey"].");'>".$row["Tower"]."</a>";
            $sub_array[] = $row["Block"];
            $sub_array[] = $row["PropertyNo"];
            $sub_array[] = $row["PropertyType"];
            $sub_array[] = $row["UnitType"];
            $sub_array[] = $Status;
            //$sub_array[] = '<button type="button" name="update" id="' . $row["id"] . '" class="btn btn-warning btn-xs update">Update</button>';
            //$sub_array[] = '<button type="button" name="delete" id="' . $row["id"] . '" class="btn btn-danger btn-xs delete">Delete</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw" => intval($input["draw"]),
            "recordsTotal" => $filtered_rows,
            "recordsFiltered" => $totalRow,
            "data" => $data
        );
        return $output;
    }
    
   

}
