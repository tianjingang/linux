<?php
namespace Home\Model;
use Think\Model;
class TypeModel extends Model{
    protected $table='Type';
    //查询
    function show1(){
        return M($this->table)->select();
    }

}