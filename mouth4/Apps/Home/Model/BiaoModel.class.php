<?php
namespace Home\Model;
use Think\Model;
class BiaoModel extends Model{
    protected $table='Biao';
    //添加
    function add($data){
        return M($this->table)->add($data);
    }
    //修改
    function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}