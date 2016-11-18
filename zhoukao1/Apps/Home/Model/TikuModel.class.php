<?php
namespace Home\Model;
use Think\Model;
class TikuModel extends Model{
    protected $table='Tiku';
    //查询
    function show(){
        return M($this->table)->select();
    }
}