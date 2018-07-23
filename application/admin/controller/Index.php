<?php
namespace app\admin\controller;
use app\common\model\Lists;
use think\Controller;
use app\common\model\User;
use think\Db;
use think\File;
use think\Validate;
use think\Request;



class Index extends Common
{
    public function index()
    {
       return $this->fetch();

    }

    public function upload(){
// 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
// 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
// 成功上传后 获取上传信息
// 输出 jpg
              //  echo $info->getExtension();
// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
              //  echo $info->getSaveName();
// 输出 42a79759f284b767dfcb2a0197904287.jpg
                 $this->success('上传成功！');
            }else{
// 上传失败获取错误信息
                echo $file->getError();
            }
        }

      return $this->fetch();

    }

    public function lists()
    {

        if (Request()->isPost()){
            $rs = (new Lists()) -> lists(input('post.'));
            if($rs['volid']='0'){
               // $this->error($this->getError(),'admin.index.lists');
                $this->error($rs['msg']);
            }else{
               // $this->success('添加文章成功','admin.index.lists');
                $this->success($rs['msg'],'admin/index/lists');
            }
        }
        return $this->fetch();
    }
    public function del()
    {

         $use = (new Lists())->del(input('param.id'));

         if ($use['volid']='1') {
            $this->success($use['msg'],'news');
          }else{
            $this->Error($use['msg']);
        }

    }
        public function news()
    {

        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('lists')->where('')->paginate(10);
// 把分页数据赋值给模板变量list
   // dump($list);
        $page = $list->render();
       $this->assign('list', $list);
        $this->assign('page', $page);
// 渲染模板输出


        return $this->fetch();


    }

    public function linksadd()
    {
        //dump(Request()->isPost());
        if (Request()->isPost()){

            $rs = (new User)->linksadd(input('post.'));

            if($res='0')
            {
                $this->error($rs['msg']);
            }
            if($res='1'){
                $this->success($rs['msg']);
            }

        }


        return $this->fetch();

    }

    public function newsadd()
    {
        //dump(Request()->isPost());



        return $this->fetch();

    }
    public function newsedit()
    {
        dump(input('post.'));

            if(request()->isPost())
            {
              //  dump(input('post.'));
                $res = (new Lists)->store(input('post.'));

                if($res['valid'])
                {
                    //操作成功
                    $this->success($res['msg'],'news');
                }else{
                    $this->error($res['msg']);
                }
        }
        $id=input('param.id');
            $rs=(new Lists)->where('id',$id)->select();

            $this->assign('list',$rs);


        return $this->fetch();

    }





}