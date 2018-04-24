<?php

/**
 * @uri /member
 */
class Members extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
          $Photograph_name = $_FILES['Photograph']['name'];
        if (!empty($Photograph_name)) {

            $file_size = $_FILES['Photograph']['size'];
            $file_tmp = $_FILES['Photograph']['tmp_name'];
            $file_type = $_FILES['Photograph']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['Photograph']['name'])));
            $Photograph_name = uniqid() . "." . $file_ext;
            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file For Uploading Photograph.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB for Uploading Photograph';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $Photograph_name);
            } else {
                $res['msg'] = 'Photograph not Uploading plaese contact administrator';
                $res['photo'] = 0;
                $res['error'] = 0;
            }
        }
          $PANupload = $_FILES['PANupload']['name'];
        if (!empty($PANupload)) {

            $file_size = $_FILES['PANupload']['size'];
            $file_tmp = $_FILES['PANupload']['tmp_name'];
            $file_type = $_FILES['PANupload']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['PANupload']['name'])));
            $PANupload = uniqid() . "." . $file_ext;
            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file For Uploading PANupload.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB for Uploading PANupload';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $PANupload);
            } else {
                $res['msg'] = 'PANupload not Uploading plaese contact administrator';
                $res['photo'] = 0;
                $res['error'] = 0;
            }
        }
          $AADHARSSNUpload = $_FILES['AADHARSSNUpload']['name'];
        if (!empty($AADHARSSNUpload)) {

            $file_size = $_FILES['AADHARSSNUpload']['size'];
            $file_tmp = $_FILES['AADHARSSNUpload']['tmp_name'];
            $file_type = $_FILES['AADHARSSNUpload']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['AADHARSSNUpload']['name'])));
            $AADHARSSNUpload = uniqid() . "." . $file_ext;
            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file For Uploading AADHARSSNUpload.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB for Uploading AADHARSSNUpload';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $AADHARSSNUpload);
            } else {
                $res['msg'] = 'AADHARSSNUpload not Uploading plaese contact administrator';
                $res['photo'] = 0;
                $res['error'] = 0;
            }
        }
          $PassportNoUpload = $_FILES['PassportNoUpload']['name'];
        if (!empty($PassportNoUpload)) {

            $file_size = $_FILES['PassportNoUpload']['size'];
            $file_tmp = $_FILES['PassportNoUpload']['tmp_name'];
            $file_type = $_FILES['PassportNoUpload']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['PassportNoUpload']['name'])));
            $PassportNoUpload = uniqid() . "." . $file_ext;
            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file For Uploading PassportNoUpload.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB for Uploading PassportNoUpload';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $PassportNoUpload);
            } else {
                $res['msg'] = 'PassportNoUpload not Uploading plaese contact administrator';
                $res['photo'] = 0;
                $res['error'] = 0;
            }
        }
          $Signature = $_FILES['Signature']['name'];
        if (!empty($Signature)) {

            $file_size = $_FILES['Signature']['size'];
            $file_tmp = $_FILES['Signature']['tmp_name'];
            $file_type = $_FILES['Signature']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['Signature']['name'])));
            $Signature = uniqid() . "." . $file_ext;
            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file For Uploading Signature.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB for Uploading Signature';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $Signature);
            } else {
                $res['msg'] = 'Signature not Uploading plaese contact administrator';
                $res['photo'] = 0;
                $res['error'] = 0;
            }
        }
            try {
                $db = DB::getDB();
                $SocietyInsert = MemberModel::AddMemberDetails($Photograph_name,$PANupload,$AADHARSSNUpload,$PassportNoUpload,$Signature,$input, $db);
                if ($SocietyInsert) {
                    $res['msg'] = "Property Added Succsefully";
                    $res['error'] = 1;
                }
            } catch (NotFoundException $ex) {
                $response = Response::FORBIDDEN;
            }


        return $this->createResponse($request, jsonp_encode($res), $response);
    }

    function get($request) {
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $AllProperty = MemberModel::AllMember($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($AllProperty), $response);
    }

   
}
/**
 * @uri /memberlist
 */
class GetMemberRegNo extends AppResource {

    function get($request) {
        $res = array();
        $response = Response::OK;
        
        try {
            $db = DB::getDB();
            $MemberRegNo = MemberModel::GetMemberRegNo($db);
            if ($MemberRegNo) {
                $res['MemberRegNo'] = $MemberRegNo;
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Member Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
     

}
/**
 * @uri /memberaddress
 */
class Memberaddress extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
         $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $SaveMemberaddress = MemberModel::SaveMemberaddress($db,$input);
            if ($SaveMemberaddress) {
                $res['msg'] = "Member Address Details Added Succsefully";
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Member Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
    function get($request) {
        $res = array();
        $response = Response::OK;
         $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $AllMemberAddress = MemberModel::AllMemberAddress($input,$db);
          
        } catch (NotFoundException $ex) {
          $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($AllMemberAddress), $response);
    }
     

}