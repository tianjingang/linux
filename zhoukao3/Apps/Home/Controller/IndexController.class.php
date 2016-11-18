<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    //添加
    function add(){
        $title=I('post.title');
        $source=I('post.source');
        $time=date("Y-m-d H:i:s");
        $data=array(
            "title"=>$title,
            "source"=>$source,
            "time"=>$time
        );
        $res=D('New')->add($data);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }

    }
    //展示
    public function show(){
        $search1 = I('get.search1');
        $search2 = I('get.search2');
        $User = M('New'); // 实例化User对象
        $count      = $User->where("title like '%$search1%' and source like '%$search2%'")->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where("title like '%$search1%' and source like '%$search2%'")->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $key=>$val){
            $list[$key]["title"]=str_replace($search1,"<font color='red'>$search1</font>",$val['title']);
        }
        foreach($list as $key=>$val){
            $list[$key]["source"]=str_replace($search2,"<font color='red'>$search2</font>",$val['source']);
        }
        $this->assign('arr',$list);// 赋值数据集
        $this->assign('show',$show);// 赋值分页输出
        $this->assign('search1',$search1);
        $this->assign('search2',$search2);
        $this->display(); // 输出模板

    }
    //删除
    function del(){
        $id=$_GET['id'];
        $res=D('New')->delete("id='$id'");
        if($res){
            $this->success('删除成功');

        }
        else{
            $this->error('删除失败');

        }
    }
}