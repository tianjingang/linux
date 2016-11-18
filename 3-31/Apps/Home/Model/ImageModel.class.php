<?php
namespace Home\Model;
use Think\Model;
class ImageModel extends Model{
    protected $table='Image';
    //添加
    function add($data){
        return M($this->table)->add($data);
    }
    //查询
    function show(){
        return M($this->table)
            ->join("Type on Image.t_id=Type.t_id",'left')
        ->select();
    }
    //单删
    function delete($where){
        return M($this->table)->where($where)->delete();
    }






}