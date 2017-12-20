<?php
namespace Admin\Controller;
use       Common\Controller\AppController;
class AdminController extends AppController {
    public function _initialize(){

        call_user_func(array('parent',__FUNCTION__));//判断登陆

        if (!session('USER') && $this->params['action'] !=='login'){
            $this->redirect('Admin/User/login');
        }

    }
    

}