<?php


/**
 * @uri /login
 */
class UserLogin extends AppResource {
		
     /** @secure */
    public function get($request) {
    			
             $response = Response::OK;
        try{
             $db = DB::getDB();
           
            $user = UserModel::authenticateUser($this->getUsername(),$this->getPassword(),$db);
            if($user){
                switch ($user['UserType']) {
                    case 'SUPERADMIN':
                        $user['home'] = 'home';
                        break;
                     case 'ADMIN':
                        $user['home'] = 'myhome';
                        break;
                    
                    default:
                        $user['home'] = 'error';
                        break;
                 }
                $userRecord = jsonp_encode($user);
                $_SESSION['UserLogin'] = $userRecord;
            }else{
               throw new BadRequestException('wrong details');
            }
            
            
        }catch (NotFoundException $ex){
            $response = Response::FORBIDDEN;
            
        }

        return $this->createResponse($request, $userRecord, $response);
    }
}


/**
 * @uri /logout
 */
class LogoutHandler extends AppResource {

    public function get($request) {
        $this->logout();
        return $this->createResponse($request);
    }

}
