<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/10/7
 * Time: 21:42
 */
namespace app\home\controller;
use think\Request;

class Owner extends Home{
    //显示认证页面
    public function add(){
        if(request()->isPost()){
            //实例化模型
            $contrast = model('owner');
            //var_dump($contrast);exit;
            //接收数据
            $post_data=Request::instance()->post();
            //var_dump($post_data);exit;
            //自动验证
            $validate = validate('owner');
            if(!$validate->check($post_data)){
                return $this->error($validate->getError());
            }
            //var_dump($post_data);exit;
            //保存数据库
            $data = $contrast->insert($post_data);
            //判断是否添加成功
            if($data){
                $this->success('提交成功,等待审核', url('my'));
            } else {
                $this->error($contrast->getError());
            }
        }


        return $this->fetch('index');
    }
}