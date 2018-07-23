<?php
namespace app\admin\model;
use think\Model;
use think\Loader;
use think\Validate;

class ListApp extends model
{
    public function listApp($data)
    {
        $rs =  Loader::validate(listApp);
        if(!$rs->check($data)){
           return['valid'=>0,'msg'=>'ads'];
        }else{
            return['valid'=>1,'msg'=>'oook'];
        }
    }
}