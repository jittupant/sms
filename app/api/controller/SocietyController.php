<?php

/**
 * @uri /society
 */
class Society extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        $Photo_name = $_FILES['Photo']['name'];
        if (!empty($Photo_name)) {

            $file_size = $_FILES['Photo']['size'];
            $file_tmp = $_FILES['Photo']['tmp_name'];
            $file_type = $_FILES['Photo']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['Photo']['name'])));
            $newfilename = uniqid() . "." . $file_ext;
            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file For Uploading Photo.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB for Uploading Photo';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $newfilename);
            } else {
                $res['msg'] = 'Photo not Uploading plaese contact administrator';
                $res['photo'] = 0;
                $res['error'] = 0;
            }
        }
        $Logo_name = $_FILES['Logo']['name'];

        if (!empty($Logo_name)) {

            $file_size = $_FILES['Logo']['size'];
            $file_tmp = $_FILES['Logo']['tmp_name'];
            $file_type = $_FILES['Logo']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['Logo']['name'])));

            $expensions = array("jpeg", "jpg", "png");
            $newfilenamel = uniqid() . "." . $file_ext;
            if (in_array($file_ext, $expensions) === false) {
                $res['msg'] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $res['msg'] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../images/" . $newfilenamel);
            } else {
                $res['msg'] = 'Logo not Uploading plaese contact administrator';
                $res['logo'] = 0;
                $res['error'] = 0;
            }
        }
        if ($res['photo'] !== 0 && $res['logo'] !== 0) {

            try {
                $db = DB::getDB();
                $SocietyInsert = SocietyModel::AddSociety($input, $newfilename, $newfilenamel, $db);
                if ($SocietyInsert) {
                    $res['msg'] = "Property Added Succsefully";
                    $res['error'] = 1;
                }
            } catch (NotFoundException $ex) {
                $response = Response::FORBIDDEN;
            }
        } else {
            $response = Response::BADREQUEST;
            $res['msg'] = "Error found contact to administrator";
            $res['error'] = 0;
        }


        return $this->createResponse($request, jsonp_encode($res), $response);
    }

    function get($request) {
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $AllSociety = SocietyModel::AllSociety($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($AllSociety), $response);
    }

}

/**
 * @uri /taxdetails
 */
class TaxDetails extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $SocietyInsert = SocietyModel::TaxDetails($input, $db);
            if ($SocietyInsert) {
                $res['msg'] = "Tax Details Added Succsefully";
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Tax Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
    function get($request) {
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $Alltax = SocietyModel::AllTax($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($Alltax), $response);
    }

}

/**
 * @uri /areadetails
 */
class AreaDetails extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $SocietyInsert = SocietyModel::AreaDetails($input, $db);
            if ($SocietyInsert) {
                $res['msg'] = "Area Details Added Succsefully";
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
      function get($request) {
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $AllArea = SocietyModel::AllArea($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($AllArea), $response);
    }

}
/**
 * @uri /getsocietyname
 */
class GetSocietyName extends AppResource {

    function get($request) {
        $res = array();
        $response = Response::OK;
        
        try {
            $db = DB::getDB();
            $SoceityName = SocietyModel::GetSoceityName($db);
            if ($SoceityName) {
                $res['SoceityName'] = $SoceityName;
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
     

}
/**
 * @uri /contactdetails
 */
class ContactDetails extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $SocietyInsert = SocietyModel::ContactDetails($input, $db);
            if ($SocietyInsert) {
                $res['msg'] = "Contact Details Added Succsefully";
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Contact Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
    function get($request) {
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $Alltax = SocietyModel::AllContact($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($Alltax), $response);
    }

}
/**
 * @uri /addressdetails
 */
class AddressDetails extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $SocietyInsert = SocietyModel::AddressDetails($input, $db);
            if ($SocietyInsert) {
                $res['msg'] = "Address Details Added Succsefully";
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Address Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
    function get($request) {
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $Alltax = SocietyModel::AllAddress($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($Alltax), $response);
    }

}
