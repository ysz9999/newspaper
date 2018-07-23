<?php
namespace app\admin\controller;
use app\common\model\User;
use think\Controller;
use think\Request;

class Login extends Controller
{
    public function login()
    {
        if(Request()->isPost()) {
            $res =(new User)->login(input('post.'));

        if ($res['valia']) {
            return $this->success($res['msg'], 'admin/admin/index');
        } else {
            return $this->error($res['msg'], 'admin/login/login');
        }
        }
        return $this->fetch();
    }




}
