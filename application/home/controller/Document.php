<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/30
 * Time: 14:48
 */
namespace app\home\controller;
use think\Db;

class Document extends Home{
    //展示小区通知数据
    public function Survey($id){
       // $list=Db::name('document')->where(['category_id'=>2])->select();
        //var_dump($list);exit;
        $this->assign('id',$id);
        return $this->fetch('index');
    }

    //ajax获取小区通知
    public function ajaxpage($id,$page){
        $list=Db::name('document')->where(['category_id'=>$id])->paginate(2);
        $this->assign('list',$list);
        $this->assign('no',++$page);
        return $this->fetch();
    }

    //查看小区通知详情
    public function Details($id){
        //var_dump($id);exit;
        $info=Db::name('document')->find($id);
        //查询详情表的数据
        $row=Db::name('document_article')->find($id);
       // var_dump($row);exit;
        $this->assign('info',$info);
        $this->assign('row',$row);
        return $this->fetch();
    }

    //便民服务
    public function Service(){
        $list=Db::name('document')->where(['category_id'=>51])->select();
        //var_dump($list);exit;
        $this->assign('list',$list);
        return $this->fetch('service');
    }

    //服务详情
    public function Services($id){
        $info=Db::name('document')->find($id);
        //var_dump($info['id']);exit;
        //查询详情表的数据
        $row=Db::name('document_article')->find($id);
        // var_dump($row);exit;
        $this->assign('info',$info);
        $this->assign('row',$row);
        return $this->fetch();
    }

    //小区活动
    public function Activity(){
        $list=Db::name('document')->where(['category_id'=>49])->select();
        //var_dump($list);exit;
        $this->assign('list',$list);
        return $this->fetch('service');
    }

    //活动详情
    public function Activitys($id){
        $info=Db::name('document')->find($id);
        //查询详情表的数据
        $row=Db::name('document_article')->find($id);
        // var_dump($row);exit;
        $this->assign('info',$info);
        $this->assign('row',$row);
        return $this->fetch();
    }

    //商家活动
    public function Market(){
        $list=Db::name('document')->where(['category_id'=>52])->select();
        //var_dump($list);exit;
        $this->assign('list',$list);
        return $this->fetch('service');
    }

    //商家活动详情
    public function Markets($id){
        $info=Db::name('document')->find($id);
        //查询详情表的数据
        $row=Db::name('document_article')->find($id);
        // var_dump($row);exit;
        $this->assign('info',$info);
        $this->assign('row',$row);
        return $this->fetch();
    }

    //生活贴士
    public function Life(){
        $list=Db::name('document')->where(['category_id'=>50])->select();
        //var_dump($list);exit;
        $this->assign('list',$list);
        return $this->fetch('life');
    }

    //生活详情
    public function Lifes($id){
        $info=Db::name('document')->find($id);
        //查询详情表的数据
        $row=Db::name('document_article')->find($id);
        // var_dump($row);exit;
        $this->assign('info',$info);
        $this->assign('row',$row);
        return $this->fetch();
    }

    //活动报名
    public function add($id){
        $document=model('document');
        //var_dump($document);exit;
        //var_dump($id);exit;
        $list=Db::name('document')->find($id);
        //var_dump($list);exit;
        if(!$list['activity'] == 1){
            $list['activity']=1;
           $document->update($list);
            return "success";
        }
        return 'fail';
    }

}