<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Login/login');
    }
  /*  function login_check(){
        //接值
        $username=I('post.username');
        $pwd=I('post.pwd');
        $arr=D('Login')->look(array('username'=>$username));
        if($arr){
            if($arr['pwd']==$pwd){
                echo 123;
            }
            else{
                $this->error('密码错误');
            }
        }else{
            $this->error('用户名不存在');
        }


    }*/
    function add(){
        $this->display();
     /* $res=D('Goods')->add($_POST);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }*/
    }
    //添加
    function up(){
       $_POST['g_username']=session('username');
        $res=D('Goods')->add($_POST);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }
    }
    //展示
    function show(){
         $g_username=session('username');
        $arr=M('Goods')->where(array('g_username'=>$g_username))->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    //修改状态
    function update(){
        $id = $_GET['id'];
       $res= M('Goods')->where(array('u_id'=>$id))->save(array('g_statue'=>1));
        $this->redirect('Index/show');

    }
    function update1(){
        $id = $_GET['id'];
        $res= M('Goods')->where(array('u_id'=>$id))->save(array('g_statue'=>0));
        $this->redirect('Index/show');

    }
}