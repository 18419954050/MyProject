<?php

namespace Home\Controller;

use Think\Controller;
use Com\WechatAuth;

class IndexController extends Controller
{
   /* public function __construct()
    {
        parent::__construct();
        $this->openId = $this->wid = session("openid");
        //$this->openId=1;
        //用户第一次点开页面的请求
        if ($this->openId) {
            //echo $this->openId;exit;
        } else {

            if (IS_GET) {

                $this->app_id = C('app_id');
                $this->app_secret = C('app_secret');

                $this->weChatAuth = new WechatAuth($this->app_id, $this->app_secret);
                $this->redirect_url = "http://" . $_SERVER["HTTP_HOST"] . __SELF__;
                $code = I('code');
                $state = I('state');
            }
            if (isset($code) && isset($state) && $code != '') {

                //判断是否是从微信网页授权页面来的请求
                $token = $this->weChatAuth->getAccessToken('code', $code);
                $this->openId = $token['openid'];
                if (isset($this->openId)) {
                    $userInfo = $this->weChatAuth->getUserInfo($token);
                    $cake = I('post.');
                    if($cake==''){
                        echo 1;
                    }else{
                        //echo 2;
                    }
                    //var_dump($userInfo);exit;
                    session('nickname', $userInfo['nickname']);
                    session('headimgurl', $userInfo['headimgurl']);
                    //$this->saveUserInfo($userInfo);
                    session('openid', $this->openId);
                    return session;
                } else {
                    redirect($this->redirect_url);
                }
            } else {
                $url = $this->weChatAuth->getRequestCodeURL($this->redirect_url, 'red', 'snsapi_userinfo');
                redirect($url);
            }
        }
        
        
    }*/

    public function index(){        
        $this->display();
	}
    public function updateName()
       {
            if(IS_POST){
                $model = M('user');
                $data = array(
                    'name'  => I('post.name'),
                    'phone' => I('post.phone'),
                    'addtime' => date('Y-m-d H:i:s',time()),
                );
                $adddata = $model->add($data);
                if($adddata){
                    $this->ajaxReturn(1);
                }else{
                    $this->ajaxReturn(2);
                }
            }else{
                $this->ajaxReturn(3);
                exit;
            }
       }

}