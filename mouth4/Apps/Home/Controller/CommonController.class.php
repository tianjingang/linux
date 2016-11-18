<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    function _initialize(){
        if(!session('?user')){
            $this->redirect('Login/login','',1,'跳转中');
        }
    }
}
