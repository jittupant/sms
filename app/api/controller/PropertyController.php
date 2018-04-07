<?php

/**
 * @uri /property
 */
class Property extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
            try {
                $db = DB::getDB();
                $SocietyInsert = PropertyModel::AddProperty($input, $db);
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
            $AllProperty = PropertyModel::AllProperty($input,$db);
            
              
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
        }



        return $this->createResponse($request, jsonp_encode($AllProperty), $response);
    }

}
