<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
   function index(){
       $this->display();
   }
    //注册
    function add(){
        //接值
        $username=I('post.username');

        $pwd=I('pwd');
        $data=array(
            "username"=>$username,
            "pwd"=>$pwd
        );
        $res=D('Login')->add($data);
        if($res){
            $this->success('注册成功',U('Login/login','3'));
        }
        else{
            $this->error('注册失败');
        }
    }
    function login(){
        $this->display();
    }
    function shows(){
        $User = M('Course'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
}
