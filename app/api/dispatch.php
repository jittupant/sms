<?php

ini_set('display_errors', 0);
// load Tonic library
require_once(dirname(__FILE__) . '/lib/tonic.php');
require_once(dirname(__FILE__) . '/config/config.php');
require_once(dirname(__FILE__) . '/config/DB.php');
require_once(dirname(__FILE__) . '/lib/AppResource.php');
require_once(dirname(__FILE__) . '/lib/AppResponse.php');
require_once(dirname(__FILE__) . '/lib/exceptions.php');
require_once(dirname(__FILE__) . '/lib/AppHandler.php');
require_once(dirname(__FILE__) . '/controller/UserController.php');
require_once(dirname(__FILE__) . '/controller/SocietyController.php');
require_once(dirname(__FILE__) . '/model/UserModel.php');
require_once(dirname(__FILE__) . '/model/SocietyModel.php');
require_once(dirname(__FILE__) . '/controller/PropertyController.php');
require_once(dirname(__FILE__) . '/model/PropertyModel.php');
require_once(dirname(__FILE__) . '/controller/MemberController.php');
require_once(dirname(__FILE__) . '/model/MemberModel.php');
// handle request
$request = new Request(array('baseUri' => '/sms/app/api'));

try {
    $resource = $request->loadResource();
    $response = $resource->exec($request);
} catch (ResponseException $e) {
    switch ($e->getCode()) {
        case Response::UNAUTHORIZED:
            $response = $e->response($request);
            $response->addHeader('WWW-Authenticate', 'Basic realm="SMS"');
            break;
        default:
            $response = $e->response($request);
    }
}
$response->output();


