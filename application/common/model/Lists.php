<?php
namespace app\common\model;
use think\Validate;
use think\Model;
use think\Request;
use think\Session;
use think\Loader;

class Lists extends Model
{
    protected $pk = 'id';
    protected $table = 'think_lists';
    protected $autoWriteTimestamp = 'datetime';

  public function lists($data)
  {
      $result = $this->validate(true)->save($data);
      if(false === $result){
          // 验证失败 输出错误信息
          return ['valid'=>0,'msg'=>$this->getError()];
          //dump($this->getError());
      }else{
          return ['valid'=>1,'msg'=>'添加成功'];
      }

      if(!$Validate->check($data)){
          return['valia'=>"0",'msg'=>($Validate->getError())];
      }

      $user = new lists($_POST);
// 过滤post数组中的非数据表字段数据
      $user->allowField(true)->save();

      return['valia'=>'1','msg'=>('添加数据成功')];

  }
public function del($data)
{

    $use = Lists::destroy($data);
    dump($use);
    if(false === $use){
        return ['volid'=>0,'msg'=>'删除文章失败'];
    }else{

        return ['volid'=>1,'msg'=>'删除文章成功'];
    }
}

    public function login2()
    {


        $list= Lists::scope(function($query){
            $query->where('state','>',0)->limit(10);
        })->select();

        return $list;
    }



  public function store($data)
  {
      $validate = Loader::validate('lists');
      if($validate->check($data)){
          $user = Lists::get($data['id']);
          //$user->cname     = '企业社会责任';
          $user->cname     = $data['cname'];
          $user->email    = $data['email'];
          $user->address    = $data['address'];
          $user->miaoshu    = $data['miaoshu'];
          $user->state    = $data['state'];

          $user->allowField(true)->save();

      }else{
          $this->getError();
      }


      if(false === $user){
          // 验证失败 输出错误信息
          return ['valid'=>0,'msg'=>$this->getError()];
          //dump($this->getError());
      }else{
          return ['valid'=>1,'msg'=>'修改文章成功'];
      }

  }

}
