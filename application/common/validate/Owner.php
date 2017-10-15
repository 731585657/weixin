<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/10/7
 * Time: 22:04
 */
namespace app\common\validate;
use think\Validate;

class Owner extends Validate{
    // 验证规则
    protected $rule = [
        ['name','require','姓名必须填写'],
        ['tel','require','电话必须填写'],
        ['quarters','require','小区名必须填写'],
        ['room','require','房号必须填写'],
        ['contact','require','关系必须填写'],
        ['number','require','身份证必须填写'],


    ];
}