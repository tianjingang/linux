<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    //添加
    public function add(){
        //接值
        $g_name=I('post.g_name');
        $g_num=I('post.g_num');
        $g_price=I('post.g_price');
        $g_sum=I('post.g_sum');
        $g_count=I('post.g_count');
        $g_statue=I('post.g_statue');
        $data=array(
            "g_name"=>$g_name,
            "g_num"=>$g_num,
            "g_price"=>$g_price,
            "g_sum"=>$g_sum,
            "g_count"=>$g_count,
            "g_statue"=>$g_statue,
        );
        $res=D('3-10')->add($data);
        if($res){
            $this->success('添加成功',U('Index/show'));
        }
        else{
            $this->error('添加失败');
        }

    }
    //查看
    public function show(){
       $search=I('get.search');
        //echo $search;
        $search1=I('get.search1');
       // echo $search1;
        //var_dump($_GET);die;
        $User = M('3-10'); // 实例化User对象
        $count      = $User->where("g_name like '%$search%' and g_statue like '%$search1%'" )->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where("g_name like '%$search%' and g_statue like '%$search1%'" )->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $key=>$val){
            $list[$key]['g_name']=str_replace($search,"<font color='red'>$search</font>",$val['g_name']);
        }
        foreach($list as $key=>$val){
            $list[$key]['g_statue']=str_replace($search1,"<font color='red'>$search1</font>",$val['g_statue']);
        }
        $this->assign('arr',$list);// 赋值数据集
        $this->assign('show',$show);// 赋值分页输出
        $this->assign('search',$search);
        $this->assign('search1',$search1);
        $this->display('show'); // 输出模板
    }
}