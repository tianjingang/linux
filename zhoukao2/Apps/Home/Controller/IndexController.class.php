<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       /* //查出表
        $ar=M('Hose')->select();
        //计算总条数
        $num=count($ar);
        //每页条数
        $page_num=4;
        //总页数
        $page_sum=ceil($num/$page_num);
        //获取当前页
        if(isset($_GET['page'])){
            $page=$_GET['page'];
            if($page<1){
                $page=1;
            }
            if($page>$page_num){
                $page=$page_sum;
            }

        }
        else{
            $page=1;
        }
        $limit=($page-1)*$page_num;
        $arr=M('Host')->limit($limit,$page_num)->select();
        $this->assign('arr',$arr);
        $this->assign('page_sum',$page_sum);
        $this->assign('page',$page);*/

        $this->display();
    }
    //添加
    function add(){
       $res= D('Hose')->add($_POST);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }
    }
    //查询
    function show(){
        $User = M('Hose'); // 实例化Hose对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('arr',$list);// 赋值数据集
        $this->assign('show',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //删除
    function del(){
        $id=$_GET['id'];
        $res=D('Hose')->delete("id='$id'");
        if($res){
            $this->success('删除成功');
        }
        else{
            $this->error('删除失败');
        }
    }
}