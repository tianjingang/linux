<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function login(){
        $this->display();
    }
    //验证登录
    /*function login_check(){
      //接值
        if(!IS_POST)die('非法提交');
        $username=I('post.username');
        $pwd=I('post.pwd');
        $arr=D('Login')->look(array('username'=>$username));
        if(!$arr) die('用户名不存在');
       if($arr['pwd']==$pwd){
           echo 123;
       }else{
           $this->error('密码错误');
       }


    }*/
    /*function login_check(){
        //接值
        $username=I('post.username');
        $pwd=I('post.pwd');
        //调用Model层方法
        $arr=D('Login')->look(array('username'=>$username));
        if(!$arr) die('用户名不存在');
        if($arr['pwd']==$pwd){
           echo 123;
           //存入session
                session('username',$arr['username']);
                session('pwd',$arr['pwd']);
                session('id',$arr['id']);
            $this->redirect('Index/add','',2,'登录中');

        }
        else{
            $this->error('密码错误');
        }
    }*/
    function login_check()
    {
        if (!IS_POST) {
            $this->success('非法提交', 'Index/index');
            die;
        }
        $username = I('post.username');
        $pwd = I('post.pwd');
        $id= I('post.id');
        $arr1 = M('login')->where("username='$username'")->select();
        $arr2 = M('login')->where("pwd='$pwd'")->select();
        if (!$arr1) {
            $this->success('用户名不正确', U('Index/index'));
            die;
        }
        if (!$arr2) {
            $this->success('密码不正确', U('Index/index'));
            die;
        }
        //存入session
        session('username',$username);
        session('pwd',$pwd);
        session('id', $id);
        $this->redirect('Index/add','',2,'登录中');
    }

}