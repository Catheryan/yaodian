<?php
namespace Home\Controller;
class AdminController extends CommonController{
    public function index(){
        $this->display();
    }
    /**
     * 管理员登录
     * @return
     */
    public function login() {
        $reloadUrl = U('Admin/index');
        if (empty($_POST['admin']['email'])) {
            return $this->errorReturn('请填写登录账号！', $reloadUrl);
        }
        if (empty($_POST['admin']['password'])) {
            return $this->errorReturn('请填写登录密码！', $reloadUrl);
        }
        $adminService = D('Admin', 'Service');
        $admin = $_POST['admin'];
        // 登录认证
        $result = $adminService->login($admin);
        if (!$result['status']) {
            return $this->errorReturn($result['data']['error'], $reloadUrl);
        }
        return $this->successReturn('登录成功！',U('Index/index'));
    }
}