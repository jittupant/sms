<?php

$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath . "/config/DB.php");

class SocietyModel {

    public function AddSociety($input, $Photo_name, $Logo_name, $db) {
        $date = date('m-d-Y');
        try {

            $stmt = $db->prepare("INSERT INTO tbl_society(Name,AliasName,SocietyRegistrationNumber,RegistrationDate,RWARegistrationNumber,RWARegistrationDate,Remarks,ConstructedBy,DateOfComencementOfConstruction,DateOfConstructionCompletion,ContactNumber,AlternateContactNumber,PANno,TANno,FAXNumber,Email,Category,Photo,Logo,Pincode,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11,:f12,:f13,:f14,:f15,:f16,:f17,:f18,:f19,:f20,:f21)");

            if ($stmt->execute(array(':f1' => $input['Name'], ':f2' => $input['AliasName'], ':f3' => $input['SocietyRegistrationNumber'], ':f4' => $input['RegistrationDate'], ':f5' => $input['RWARegistrationNumber'], ':f6' => $input['RWARegistrationDate'], ':f7' => $input['Remarks'], ':f8' => $input['ConstructedBy'], ':f9' => $input['DateOfComencementOfConstruction'], ':f10' => $input['DateOfConstructionCompletion'], ':f11' => $input['ContactNumber'], ':f12' => $input['AlternateContactNumber'], ':f13' => $input['PANno'], ':f14' => $input['TANno'], ':f15' => $input['FAXNumber'], ':f16' => $input['Email'], ':f17' => $input['Category'], ':f18' => $Photo_name, ':f19' => $Logo_name, ':f20' => $input['Pincode'], ':f21' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    public function ContactDetails($input,$db) {
        $date = date('m-d-Y');
        try {

            $stmt = $db->prepare("INSERT INTO tbl_contactdetails(SocietyDbKey,ContactTypeDbKey,Name,Address_PropertyNo,Phone,Mobile,MembershipNumber,Email,ValidFrom,ValidTo,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['ContactType'], ':f3' => $input['Name'], ':f4' => $input['Address_PropertyNo'], ':f5' => $input['Phone'], ':f6' => $input['Mobile'], ':f7' => $input['MembershipNumber'], ':f8' => $input['Email'], ':f9' => $input['ValidFrom'], ':f10' => $input['ValidTo'], ':f11' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    public function AddressDetails($input,$db) {
        $date = date('m-d-Y');
        try {

            $stmt = $db->prepare("INSERT INTO tbl_addressdetails(SocietyDbKey,AddressLine1,AddressLine2,Locality,District,City,State,Country,PinCode,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['AddressLine1'], ':f3' => $input['AddressLine2'], ':f4' => $input['Locality'], ':f5' => $input['District'], ':f6' => $input['City'], ':f7' => $input['State'], ':f8' => $input['Country'], ':f9' => $input['PinCode'], ':f10' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function AllSociety($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_society ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE Name LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR Category LIKE "%' . $input["search"]["value"] . '%" ';
        }
       
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_society");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            $image = '';
            if ($row["Logo"] != '') {
                $image = '<img src="app/images/' . $row["Logo"] . '" class="img-thumbnail" width="50" height="35" />';
            } else {
                $image = '';
            }
            if($row["Status"] == 0){
                $Status = '<span class="label label-danger">Inactive</span>';
            }else{
                $Status = '<span class="label label-success">Active</span>';
            }
            $sub_array = array();
            $sub_array[] = $image;
            $sub_array[] = "<a onclick='viewdetails(".$row["DbKey"].");'>".$row["Name"]."</a>";
            $sub_array[] = $row["Email"];
            $sub_array[] = $row["ContactNumber"];
            $sub_array[] = $row["Category"];
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
    public function AllTax($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_taxdetails ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE StateName LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR RegistrationNumber LIKE "%' . $input["search"]["value"] . '%" ';
        }
        
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
       
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_taxdetails");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $sub_array = array();
            $sub_array[] = $SocietyName;
            $sub_array[] = "<a onclick='viewdetails(".$row["DbKey"].");'>".$row["TaxType"]."</a>";
            $sub_array[] = $row["Applicability"];
            $sub_array[] = $row["StateName"];
            $sub_array[] = $row["RegistrationNumber"];
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
    public function AllArea($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_areadetails ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE AreaType LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR CIA LIKE "%' . $input["search"]["value"] . '%" ';
        }
        
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_areadetails");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $sub_array = array();
            $sub_array[] = $SocietyName;
            $sub_array[] = "<a onclick='viewdetails(".$row["DbKey"].");'>".$row["AreaType"]."</a>";
            $sub_array[] = $row["AreaUOM"];
            $sub_array[] = $row["OriginalArea"];
            $sub_array[] = $row["RevisedArea"];
            $sub_array[] = $row["CIA"];
           
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
    public function AllContact($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM  tbl_contactdetails ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE Name LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR MembershipNumber LIKE "%' . $input["search"]["value"] . '%" ';
        }
        
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From  tbl_contactdetails");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $sub_array = array();
            $sub_array[] = $SocietyName;
            $sub_array[] = $row["ContactTypeDbKey"];
            $sub_array[] = "<a onclick='viewdetails(".$row["DbKey"].");'>".$row["Name"]."</a>";
           // $sub_array[] = $row["Address_PropertyNo"];
            $sub_array[] = $row["Phone"];
            $sub_array[] = $row["Mobile"];
            $sub_array[] = $row["MembershipNumber"];
            $sub_array[] = $row["Email"];
            $sub_array[] = $row["ValidFrom"];
            $sub_array[] = $row["ValidTo"];
           
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
    public function AllAddress($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_addressdetails ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE Locality LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR City LIKE "%' . $input["search"]["value"] . '%" ';
        }
        
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_addressdetails");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $sub_array = array();
            $sub_array[] = $SocietyName;
            $sub_array[] = "<a onclick='viewdetails(".$row["DbKey"].");'>".$row["AddressLine1"]."</a>";
            $sub_array[] = $row["AddressLine2"];
            $sub_array[] = $row["Locality"];
            $sub_array[] = $row["District"];
            $sub_array[] = $row["City"];
            $sub_array[] = $row["State"];
            $sub_array[] = $row["Country"];
            $sub_array[] = $row["PinCode"];
           
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


    public function TaxDetails($input, $db) {
        $date = date('m-d-Y');
        try {

            $stmt = $db->prepare("INSERT INTO tbl_taxdetails(SocietyDbKey,TaxType,Applicability,StateName,RegistrationNumber,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['TaxType'], ':f3' => $input['Applicability'], ':f4' => $input['NameOfTheState'], ':f5' => $input['RegistrationNumber'], ':f6' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function AreaDetails($input, $db) {
        $date = date('m-d-Y');
        try {

            $stmt = $db->prepare("INSERT INTO tbl_areadetails(SocietyDbKey,AreaType,AreaUOM,OriginalArea,RevisedArea,CIA,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['AreaType'], ':f3' => $input['AreaUOM'], ':f4' => $input['OriginalArea'], ':f5' => $input['RevisedArea'], ':f6' => $input['CIA'], ':f7' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    public function GetSoceityName($db) {
       try {

            $stmt = $db->prepare("Select DbKey,Name From tbl_society WHERE Status = :f1");
        if ($stmt->execute(array(':f1' => 1))) {
              return $stmt->fetchall(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

}
