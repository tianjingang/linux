<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $ar=D('Type')->show1();
        $this->assign('ar',$ar);
        $this->display();
    }
    //添加
    function add(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath='./';
         $upload->savePath  =      './Public/uploads/'; // 设置附件上传目录    // 上传文件
          $info   =   $upload->upload($_FILES);
        if(!$info) {
        // 上传错误提示错误信息
         $this->error($upload->getError());
        }else{
            foreach($info as $key=>$val){
                $_POST["$key"]=$val['savepath'].$val['savename'];

            }
            $res=D('Image')->add($_POST);
            if($res){
                $this->success('添加成功',U('Index/show'));
            }
            else{
                $this->error('添加失败');
            }
        }

    }
    //展示
    function show(){
        
        //接搜索条件的值
        $search1=I('get.search1');
        $search2=I('get.search2');
        //实例化表名
        $user=M('Image');
        //查询总条数
        $count= $user->join("Type on Image.t_id=Type.t_id")->where("f_name like '%$search1%' && t_type like '%$search2%' ")->count();
        //每页条数
        $length=3;
        //总页数
        $pages=ceil($count/$length);
        //当前页
        $page=isset($_GET['page'])?$_GET['page']:1;
        //上一页
        $last=$page<=1?1:$page-1;
        //下一页
        $next=$page>=$pages?$pages:$page+1;
        //偏移量
        $offset=($page-1)*$length;
        //查询每页
        $res=$user->join("Type on Image.t_id=Type.t_id")->where("f_name like '%$search1%' && t_type like '%$search2%' ")->limit($offset,$length)->select();
       //关键字变红
        foreach($res as $k=>$v){
            $res[$k]['f_name']=str_replace($search1,"<font color='red'>$search1</font>",$v['f_name']);
            $res[$k]['t_type']=str_replace($search2,"<font color='red'>$search2</font>",$v['t_type']);
        }
        $this->assign('arr',$res);//赋值结果集
        $this->assign('last',$last);//赋值上一页
        $this->assign('next',$next);//赋值下一页
        $this->assign('page',$page);//赋值当前页
        $this->assign('pages',$pages);//赋值总页数
        $this->assign('count',$count);//赋值总条数
        $this->assign('search1',$search1);//赋值搜索条件search1
        $this->assign('search2',$search2);//赋值搜索条件search1
        $this->display();
        
    }
    //单删
    function delete(){
        $id=$_GET['id'];
        $res=D('Image')->delete("id='$id'");
        if($res){
            $this->redirect('Index/show');
        }
        else{
            $this->error('删除失败');
        }

    }
    //批删
    function del_more(){
        $id=$_GET['id'];
        $res=D('Image')->delete("id in($id)");
        if($res){
            $this->redirect('Index/show');
        }
        else{
            $this->error('批删失败');
        }
    }
}