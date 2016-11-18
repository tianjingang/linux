<?php
namespace Home\Model;
use Think\Model;
class NewModel extends Model {
    protected $table='New';
    //添加
    public function add($data){
        return M($this->table)->add($data);
    }
    //查询
    public function show(){
        return M($this->table)->select();
    }
    //删除
    function delete($where){
        return M($this->table)->where($where)->delete();
    }
}