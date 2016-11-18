<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display('Login/login');
    }
    public function add(){
        $this->display('index');
    }
    //实现添加
    function up(){
        $_POST['m_user']=session('user');
        $res=D('Biao')->add($_POST);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }
    }
    //查看
    function show(){
        $user=session('user');
        $arr=M('Biao')->where(array('m_user'=>$user))->select();
        //echo M('Biao')->_sql();
        $this->assign('arr',$arr);
        $this->display();
    }

    //修改1
    function update(){
        $id=$_GET['id'];
        $res=M('Biao')->where(array('u_id'=>$id))->save(array('m_statue'=>1));
        $this->redirect('Index/show');
    }
    //修改1
    function update1(){
        $id=$_GET['id'];
        $res=M('Biao')->where(array('u_id'=>$id))->save(array('m_statue'=>2));
        $this->redirect('Index/show');
    }
}