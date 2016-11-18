<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{
     protected $table='Goods';
    //添加
    function add($data){
        return M($this->table)->add($data);
    }
    //查看所有
    function show($where){
        return M($this->table)->where($where)->select();
    }
}