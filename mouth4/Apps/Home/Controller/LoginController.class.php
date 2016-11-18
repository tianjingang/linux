<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    function login(){
        $this->display();
    }
    //验证登录
    function login_check(){
        if (!IS_POST) {
            $this->success('非法提交', 'Index/index');
            die;
        }
        $username = I('post.username');
        $pwd = I('post.pwd');
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
        //存session值
       session('user',$username);
        $this->redirect('Index/add');
    }
}