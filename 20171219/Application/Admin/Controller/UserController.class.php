<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/2 0002
 * Time: 下午 3:03
 */

namespace Admin\Controller;



class UserController extends AdminController
{
    public function login(){     
        if($this->user)   $this->redirect('Admin/index/index');        //有登录直接跳首页
        if(IS_POST){
            $model = M('Adminuser');
            $data = I('post.');
            if(!$data['username']) $error['username']= '请输入用户名';
            if(!$data['password']) $error['password']= '请输入密码';
                $finduser = $model -> where(array('username'=>$data['username'])) -> find();
                if($finduser['password']==md5($data['password'])){   //对比密码
                    session('USER',$data);
                    $this->redirect('index/index',array(),0,'页面跳转中......');
                }else{
                    $error['yzm'] = '用户或者密码错误';
                }
        }      
        $this->assign('error',$error);
        $this->display();
    }

    public function loginout(){
        if($_SESSION){
            session('USER',null);
        }
        $this->redirect('User/login',array(),0,'页面跳转中......');
    }
    
    
    
    
    
    
    
   

}