<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        //判断
       /* $username=I('post.username');
        if(isset($_POST['day7'])){
            setcookie('u_name',$username,3600*24*7);
            $this->redirect('Index/shows','',2,'登录中');
        }
        else{

            $this->redirect('Index/','',2,'登录中');

        } */
        $this->display();
    }
    //检验用户名，密码
    function check_login(){
        //接值
        if(!IS_POST)die('非法提交');
        $username=I('post.username');
        $pwd=I('post.pwd');
        //调用Model层方法
        $arr=D('Login')->look(array('username'=>$username));
        if(!$arr) die('用户名不存在');
        if($arr['pwd']==$pwd){
            if(isset($_POST['day7'])){
                session('username',$arr['username']);
                session('pwd',$arr['pwd']);
                session('id',$arr['id']);
                setcookie('u_name',$arr['username'],3600*24*7);
                $this->redirect('Index/shows','',2,'登录中');
            }else{
              //存入session
                session('username',$arr['username']);
                session('pwd',$arr['pwd']);
                session('id',$arr['id']);
               setcookie('u_name',$arr['username']);
                $this->redirect('Index/shows','',2,'登录中');
            }
        }
        else{
            $this->error('密码错误');
        }
    }
}