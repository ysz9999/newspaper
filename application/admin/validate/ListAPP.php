<?php
namespace app\admin\validate;
use think\Validate;
use think\Model;

class ListAPP extends Validate
{
    protected $rule = [
        'cname' => 'require|max:25',
        'email' => 'email',
        'address'=>'require',
        'fatime'=>'require',
        'miaoshu'=>'require',
    ];

    protected $message = [
        'cname.require'=>'用户名不能为空',
        'email.require'=>'邮件不能为空或格式不对',
        'address.require'=>'地址栏不能为空',
        'fatime'=>'时间不能为空',
        'miaoshu.require'=>'描述内容不能为空'

    ];

}