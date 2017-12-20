<?php
namespace Common\Controller;
use Think\Controller; 
class AppController extends Controller {
    public $local;
    function captcha(){ // 验证码方法
        //make_captcha(intval($this->args['n']) ?intval($this->args['n']) :4,$this->args['w']?$this->args['w'] : 80,$this->args['h']?$this->args['h']:30);
        ob_clean();
        $Verify =     new \Think\Verify();
        $Verify->fontSize = $this->args['f'] ? intval($this->args['f'])	: 18;
        $Verify->length   = $this->args['n'] ? intval($this->args['n'])	: 4;         
        $Verify->imageW   = $this->args['w'] ? intval($this->args['w'])	 : 0;
        $Verify->imageH   = $this->args['h'] ? intval($this->args['h'])	 : 0;
        $Verify->useNoise = true;    	
        $Verify->entry();
    }
    public function _initialize(){
        //处理参数
        $this->user = session('USER');
        $this->assign('user', $this->user); 
        $this->params   = array(
            'controller'=>CONTROLLER_NAME,  //当前控制器
            'action'    =>ACTION_NAME,      //当前方法
            'module'    =>MODULE_NAME,      //当前模块 Home、Admin  类似于我们自己封装的mvc的“前缀”
            //'args'      =>I('get.')         //获取到URL参数
        );
        $this->assign('setting',F('setting'));
        $this->assign('now', date('Y-m-d H:i:s')); 
        $this->assign('root',__ROOT__); //当前相对路径跟目录
        $this->assign('wwwroot',WWWROOT);//当前绝对路径跟目录
        $this->assign('public',PUBLIC_URL);//当前Public文件夹路径跟目录
        $this->assign($this->params,'params');
        
    }
    
    public function pages($pgar,$tiaos,$where='1=1',$order='id'){
        $news=M($pgar);
        $res=$news->where($where)->select();
        $count=count($res);// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,$tiaos);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');  
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        //$list = $news->field('id,name,jg,images,xq,dj,dz')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list =$news->where($where)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as &$v){
            $v['cont'] =html_entity_decode(html_entity_decode($v['cont']));
        }
        $data['list']=$list;
        $data['page']=$show;
        return $data;
          
    }
    
    
    
    
}