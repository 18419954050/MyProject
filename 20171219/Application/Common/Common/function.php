<?php
header("Content-type: text/html; charset=utf-8"); 
function pr($var) {
	$template = PHP_SAPI !== 'cli' ? '<pre>%s</pre>' : "\n%s\n";
	printf($template, print_r($var, true));
}
function check_verify($code, $id = ''){ 
    $verify = new \Think\Verify();   
     return $verify->check($code, $id);
}

function upload($file){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload($file);
        if($info) { // 上传成功
            foreach ($info as $file) {
                $arr[] = 'Uploads/' . $file['savepath'] . $file['savename'];
            }
        }
        return $arr;
    }


	
    
    
    
    
    
    

	
?>