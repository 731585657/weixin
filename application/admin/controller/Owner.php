<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/10/7
 * Time: 22:20
 */
namespace app\admin\controller;
use think\Db;

class  Owner extends Admin{
    //显示认证列表
    public function index(){
        $list=Db::name('Owner')->select();
        //var_dump($list);exit;
        $this->assign('list',$list);
        return $this->fetch();
    }
}