<?php
namespace Home\Model;
use Think\Model;
class Ri30Model extends Model{
    protected $table='Ri30';
    //查询
    function show(){
        return M($this->table)->select();
    }
    //删除
    function delete($where){
        return M($this->table)->where($where)->delete();
    }
}
