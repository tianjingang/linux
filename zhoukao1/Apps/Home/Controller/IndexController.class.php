<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $res = D('tiku')->show();
        $this->assign('res',$res);
        $this->display();
    }
    //添加
    function add(){
        //接值
        $timu_name=I('post.timu_name');
        $tiku_name=I('post.tiku_name');
        $timu_answer=I('post.timu_answer');
        $timu_man=I('post.timu_man');
        $timu_time=date('Y-m-d H:i:s');
        $data=array(
            "timu_name"=>$timu_name,
            "tiku_id"=>$tiku_name,
            "timu_answer"=>$timu_answer,
            "timu_man"=>$timu_man,
            "timu_time"=>$timu_time
        );
        $res=D('Timu')->add($data);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }
    }
    //展示
    function show(){
       $arr= D('Timu')->show();
        $this->assign('arr',$arr);
        $this->display('show');
    }
    //删除
    function delete(){
        $id=$_GET['timu_id'];
        //echo $id;
        $res=D('Timu')->delete("timu_id='$id'");
        if($res){
            $this->success('删除成功',U('Index/show'));
        }
        else{
            $this->error('删除失败');
        }
    }
   //查看答案
    function answer(){
        $id=$_GET['id'];
        $arr= D('timu')->look("timu_id='$id'");
        $this->assign('arr',$arr);
        $this->display();

    }
}