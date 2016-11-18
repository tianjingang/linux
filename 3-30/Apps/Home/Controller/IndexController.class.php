<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $search1=I('get.search1');
        $search2=I('get.search2');
        //查看
        $User = M('Ri30'); // 实例化User对象
        $count      = $User->where("username like '%$search1%' and sex like '%$search2%'")->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where("username like '%$search1%' and sex like '%$search2%'")->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $key=>$val){
            $list[$key]["username"]=str_replace($search1,"<font color='red'>$search1</font>",$val['username']);
        }
        foreach($list as $key=>$val){
            $list[$key]["sex"]=str_replace($search2,"<font color='aqua'>$search2</font>",$val['sex']);
        }
        $this->assign('arr',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('search1',$search1);
        $this->assign('search2',$search2);
        $this->display(); // 输出模板
    }
    //删除
    function delete(){
        $id=$_GET['id'];
        $res=D('Ri30')->delete("id='$id'");
        if($res){
            $this->redirect('Index/index');
        }
        else{
            $this->error('删除失败');
        }
    }
    //批量删除
    public function del_all(){
        $id=I('get.id');
        $res=D('Ri30')->delete("id in($id)");
        if($res){
            $this->redirect('Index/index');
        }
        else{
            $this->error('删除失败');
        }
    }
}