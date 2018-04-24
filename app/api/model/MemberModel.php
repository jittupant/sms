<?php

$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath . "/config/DB.php");

class MemberModel {

    public function AddMemberDetails($Photograph_name,$PANupload,$AADHARSSNUpload,$PassportNoUpload,$Signature,$input, $db) {
       $date = date('m-d-Y');
        try {
                $stmt = $db->prepare("INSERT INTO tbl_member(`SocietyDbKey`, `MemberResidentType`, `Type`, `MemberRegistrationNumber`, `PreviousMemberRegistrationNumber`, `OwnershipType`, `Salutation`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `DOB`, `PANNo`, `PanLocation`, `AADHARSSNNo`, `AdhaarLocation`, `PassportNo`, `PassportLocation`, `Mobile`, `AlternateMobile`, `Phone`, `Email`, `MemberValidFrom`, `MemberValidTo`, `Remarks`, `Photograph`, `Signature`, `CreatedOn`) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11,:f12,:f13,:f14,:f15,:f16,:f17,:f18,:f19,:f20,:f21,:f22,:f23,:f24,:f25,:f26,:f27,:f28)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['MemberResidentType'], 
                ':f3' => $input['Type'],
                ':f4' => $input['MemberRegistrationNumber'],
                ':f5' => $input['PreviousMemberRegistrationNumber'], 
                ':f6' => $input['OwnershipType'],
                ':f7' => $input['Salutation'],
                ':f8' => $input['FirstName'],
                ':f9' => $input['MiddleName'],
                ':f10' => $input['LastName'],
                ':f11' => $input['Gender'], ':f12' => $input['DOB'], ':f13' => $input['PANNo'], ':f14' => $PANupload, ':f15' => $input['AADHARSSNNo'], ':f16' => $AADHARSSNUpload, ':f17' => $input['PassportNo'], ':f18' => $PassportNoUpload, ':f19' => $input['Mobile'], ':f20' => $input['AlternateMobile'], ':f21' => $input['Phone'], ':f22' => $input['Email'], ':f23' => $input['MemberValidFrom'], ':f24' => $input['MemberValidTo'], ':f25' => $input['Remarks'], ':f26' =>$Photograph_name, ':f27' => $Signature, ':f28' =>$date ))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    public function SaveMemberaddress($db,$input) {
     
       try {
          
              $stmt = $db->prepare("INSERT INTO tbl_memberaddress(`MemberRegNo`, `FamilyMemberName`, `Gender`, `AddressType`, `AddressLine1`, `AddressLine2`, `Locality`, `District`, `City`, `State`, `Country`, `PinCode`) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11,:f12)");
 
            if ($stmt->execute(array(':f1' => $input['MemberRegNo'],':f2' => $input['FamilyMemberName'],':f3' => $input['Gender'],
                ':f4' => $input['AddressType'],
                ':f5' => $input['AddressLine1'],
                ':f6' => $input['AddressLine2'],
                ':f7' => $input['Locality'],
                ':f8' => $input['District'],
                ':f9' => $input['City'],
                ':f10' => $input['State'],
                ':f11' => $input['Country'],
                ':f12' => $input['PinCode']
              ))){ 
                
                 return true;
            } else {
            
                return false;
            }
        } catch (PDOException $e) {
  
            echo $e->getMessage();
        }
    }
     public function GetMemberRegNo($db) {
       try {

            $stmt = $db->prepare("Select DbKey,MemberRegistrationNumber From tbl_member WHERE Status = :f1");
        if ($stmt->execute(array(':f1' => 1))) {
              return $stmt->fetchall(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    public function AllMember($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_member ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE MemberRegistrationNumber LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR OwnershipType LIKE "%' . $input["search"]["value"] . '%" ';
        }
       
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_member");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
            $image = '';
            if ($row["Photograph"] != '') {
                $image = '<img src="app/images/' . $row["Photograph"] . '" class="img-thumbnail" width="50" height="35" />';
            } else {
                $image = '';
            }
            if($row['Status'] == 0){
                $Status = '<span class="label label-danger">Inactive</span>';
            }else{
                $Status = '<span class="label label-success">Active</span>';
            }
            $sub_array = array();
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $sub_array[] = $SocietyName;
            $sub_array[] = $image;
            $sub_array[] = $row["FirstName"];
            $sub_array[] = $row["Mobile"];
            $sub_array[] = $row["Email"];
            $sub_array[] = $row["MemberRegistrationNumber"];
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
    public function AllMemberAddress($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_memberaddress ";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= 'WHERE MemberRegNo LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR FamilyMemberName LIKE "%' . $input["search"]["value"] . '%" ';
        }
       
        if ($input["length"] != -1) {
            $query .= 'LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_memberaddress");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
           
          $AllAddress =  $row['AddressLine1'].','.$row['AddressLine2'].','.$row['Locality'].','.$row['District'].','.$row['City'].','.$row['State'].','.$row['Country'].','.$row['PinCode'];
                $Status = '<span class="label label-danger">Inactive</span>';
            
            $sub_array = array();
            $MemberSocietyDbKey = UserModel::get_colum_name($db,"tbl_member", "DbKey", "SocietyDbKey", $row["MemberRegNo"]);
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $MemberSocietyDbKey);
            $MemberRegNo = UserModel::get_colum_name($db,"tbl_member", "DbKey", "MemberRegistrationNumber", $row["MemberRegNo"]);
            
            
            $sub_array[] = $SocietyName;
            $sub_array[] = $MemberRegNo;
            $sub_array[] = $row["FamilyMemberName"];
            $sub_array[] = $row["AddressType"];
            $sub_array[] = $AllAddress;
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
