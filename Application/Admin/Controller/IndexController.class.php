<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController{
    public function index(){
        $admin = $_SESSION['admin_name'];
        $this->assign('admin',$admin);
        $this->display();
    }
    public function login(){
        if(IS_POST){
            $admin = M('admin')->where('admin' == I('user'))->find();
            if($admin){
                if($admin['password'] == md5(I('pw'))){
                    $_SESSION['uid'] = $admin['uid'];
                    $_SESSION['admin_name'] = $admin['admin_name'];
                    header("Location: ".U('Admin/Index/index'));
                }
                else{
                    $this->error('密码错误',U('Admin/Index/login'));
                }
            }else{
                $this->error('不存在该用户',U('Admin/Index/login'));
            }
        }
        $this->display();
    }
    public function change(){
        $this->display();
    }
    public function do_change(){
        if(IS_POST){
            $admin = M('admin')->where('admin_name' == I('admin_name'))->find();
            if($admin){
                if($admin['password'] != md5(I('password'))){
                    $this->error('原始密码错误！');
                }
                else{
                    $data = array(
                        'admin'=>I('admin'),
                        'password'=>md5(I('new_password'))
                    );
                    M('admin')->where('admin'== I('admin'))->save($data);
                    $this->success('修改成功！',U('Admin/Index/index'));
                }
            }
            else{
                $this->error('不存在该用户');
            }
        }
    }
    public function logout(){
        session('admin_name',null);
        session_unset();
        session_destroy();
        header("location:".U('Admin/Index/login'));
    }
    public function header_upload(){
        if(IS_POST){
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            $info = $upload->upload();// 上传文件
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            } else {//上传成功
                foreach($info as $key => $val) {
                    $load = '/Upload/'.$val['savepath'].$val['savename'];
                }
                $data1 = array(
                    'tid'=>1,
                    'upload'=>$load
                );
                $data2 = array(
                    'tid'=>1,
                    'info'=>I('info')
                );
                $u1 = M('upload')->where('tid = 1')->find();
                $u2 = M('page')->where('tid = 1')->find();
                if($u1 == ''){
                    M('upload')->add($data1);
                }else{
                    M('upload')->where('tid = 1')->save($data1);
                }
                if($u2 == ''){
                    M('page')->add($data2);
                }else{
                    M('page')->where('tid = 1')->save($data2);
                }
                $this->success('上传成功！');
            }
        }
    }
    public function case_upload(){
        if(IS_POST){
            $upload = new \Think\Upload;
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $key=>$val){
                    $load = '/Upload/'.$val['savepath'].$val['savename'];
                }
            }
        }
    }
    public function cooper_upload(){
        if(IS_POST){
            $upload = new \Think\Upload;
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else {// 上传成功 获取上传文件信息
                foreach ($info as $key=>$val) {
                    $load = '/Upload/'.$val['savepath'].$val['savename'];
                }
            }
        }
    }
    public function introduce_upload(){
        if(IS_POST){
            $upload = new \Think\Upload;
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $key=>$val){
                    $load = '/Upload/'.$val['savepath'].$val['savename'];
                }
            }
        }
    }
    public function call_upload(){
        if(IS_POST){
            $upload = new \Think\Upload;
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $key=>$val){
                    $load = '/Upload/'.$val['savepath'].$val['savename'];
                }
            }
        }
    }
    public function api_upload(){
        if(IS_POST){
            $upload = new \Think\Upload;
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('doc', 'docx', 'xls', 'xlsx');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $key=>$val){
                    $load = '/Upload/'.$val['savepath'].$val['savename'];
                }
            }
        }
    }
}