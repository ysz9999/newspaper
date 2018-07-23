<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\6\3 0003
 * Time: 18:11
 */

namespace app\admin\validate;
use think\Validate;



class Lists extends Validate
{
   protected $rule=[
       'cname'=>'require|max:25',
       'address'=>'require',
       'email'=>'email',
       'miaoshu'=>'require',
   ];

   protected  $message=[
       'cname.require'=>'网站名字不可为空',
       'address.require'=>'地址不可为空',
       'email.require'=>'邮件格式不对',
       'miaoshu.require'=>'描述不可为空',
   ];
}