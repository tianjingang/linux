<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model{
    protected $table='Login';
    //查询
    function look(){
        return M($this->table)->select();
    }
}