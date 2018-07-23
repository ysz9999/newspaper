<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Session;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        //如果不是会员登录，返回到登陆页面
        if (!Session('admin.admin.username')){
            $this->redirect('admin/login/login');
        }
    }
}
