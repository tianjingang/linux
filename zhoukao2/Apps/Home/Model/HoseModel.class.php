<?php
namespace Home\Model;
use Think\Model;
class HoseModel extends Model{
    protected $table='Hose';
    //添加
    function add($data){
        return M($this->table)->add($data);
    }
    //查询
    function show(){
        return M($this->table)->select();
    }
    //删除
    function delete($where){
        return M($this->table)->where($where)->delete();
    }
}