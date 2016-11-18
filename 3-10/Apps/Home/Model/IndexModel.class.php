<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
   protected $table='3-10';
    //添加
    public function add($data){
        return M($this->table)->add($data);
    }
  //带条件查看
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    //查询所有
    public function show(){
        return M($this->table)->select();
    }

}