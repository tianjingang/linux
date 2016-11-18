<?php
namespace Home\Model;
use Think\Model;
class TimuModel extends Model{
    protected $table='Timu';
    //添加
    function add($data){
        return M($this->table)->add($data);
    }
    //删除
    function delete($where){
        return M($this->table)->where($where)->delete();
    }
    //查询
    function show(){
        return M($this->table)
                    ->join("tiku on timu.tiku_id=tiku.tiku_id",'left')
                    ->select();
     }
    //单查
    function look($where){
        return M($this->table)->where($where)->find();
    }
}