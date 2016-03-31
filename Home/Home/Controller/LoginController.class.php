<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function login(){
        $username = I('loginname');
        $pwd      = I('nloginpwd');
        if($username=='pengliang'&&$pwd='123456'){
            echo '`111`';
        }else{
            echo 0;
        }
    }
}