<?php
namespace Admin\Model;
use Think\Model;
class CourseModel extends Model{
    protected $table='Course';
    //添加
    function insert($data){
        return M($this->table)->add($data);
    }
    //删除
    function delete($where){
        return M($this->table)->where($where)->delete();
    }
    //单查
    function look($where){
        return M($this->table)->where($where)->find();
    }
    //多查
    function shows(){
        return M($this->table)->select();
    }
    //修改
    function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}