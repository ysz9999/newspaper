<?php
namespace app\common\model;
use think\Model;
use think\Loader;
use think\Request;
use think\Session;
use think\Validate;

class User extends Model
{
    protected $pk = 'id';
    protected $table = 'b_table';

    public function login($data)
    {
        //$validate = new app\admin\validate\User;
        $validate = Loader::validate('User');

        if(!$validate){
            return ("不存在");
        }


        if(!$validate->check($data)){
            return['valia'=>"0",'msg'=>($validate->getError())];
        }

        $res = $this->where('name',$data['username'])->where('password',$data['password'])->find();

        if(!$res){
            return['valia'=>'0','msg'=>'用户名或密码不对!'];
        }

        Session('admin.admin.username',$res['name']);

        return['valia'=>'1','msg'=>'会员登录成功！'];



    }

    public function linksadd($data)
    {
       // dump($data);
        $rs =  validate('User');
        if(!$rs->check($data)){
            return['valid'=>0,'msg'=>$rs->getError()];
        }else{
            return['valid'=>1,'msg'=>$rs->message()];
        }
    }



}