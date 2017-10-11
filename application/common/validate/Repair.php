<?php

namespace  app\common\validate;
use think\Validate;

class Repair extends  Validate{
    // 验证规则
    protected $rule = [
        ['name','require','报修人必须填写'],
        ['tel','require','电话必须填写'],
        ['address','require','地址必须填写'],
        ['problem','require','事故详情必须填写'],
        //['status','require','必须填写'],


    ];
}
