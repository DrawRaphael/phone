<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller{
        public function _initialize()
        {
            $this->assign('action', ACTION_NAME);
            //过滤不需要登陆的行为
            if (in_array(ACTION_NAME, array('login', 'logout'))) {
                //return;
            } else {
                if (session('uid') > 0) {

                } else {
                    $this->error('请先登陆', U('Admin/Index/login'), 3);
                }
            }
        }
}