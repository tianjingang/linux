<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController
{
    public function index()
    {
        $this->display();
    }

    //添加
    public function add()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件
        $info = $upload->uploadOne($_FILES['co_img']);
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {
            // 上传成功 获取上传文件信息
            $_POST['co_img'] = $info['savepath'].$info['savename'];
            $res = D('Course')->insert($_POST);
            if ($res) {
                $this->success('添加成功', U('Index/shows'));
            } else {
                $this->error('添加失败');
            }
        }
    }
    function shows(){
        $User = M('Course'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

}