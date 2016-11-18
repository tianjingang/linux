<?php
namespace Admin\Model;
use Think\Model;
class LoginModel extends Model{
    protected $table='Login';
    //单查询
    function look($where){
        return M($this->table)->where($where)->find();
    }
    //多查
    function show(){
        return M($this->table)->select();
    }
}