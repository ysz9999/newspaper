<?php
namespace app\admin\validate;
use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username' =>'require',
        'password' =>'require',
        'code'=>'require|captcha'

    ];
    protected $message = [
        'username.require'=>'用户名不对',
        'password.require'=>'密码不对',
        'code.require'=>'没有填写验证码',
        'code.captcha'=>'验证码错误'


    ];
}