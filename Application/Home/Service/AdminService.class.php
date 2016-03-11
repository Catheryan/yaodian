<?php
/**
 * User: haier
 */

namespace Home\Service;


class AdminService extends CommonService{
    /**
     * 管理员登录认证
     * @param  array $admin 管理员信息
     * @return array
     */
    public function login($admin) {
        $Admin = $this->getM();

        // 邮箱是否存在
        if (!$this->existAccount($admin['email'])) {
            return $this->errorResultReturn('账号不存在！');
        }

        $account = $Admin->getByEmail($admin['email']);
        // 密码验证
        if ($account['password'] != $admin['password']) {
            return $this->errorResultReturn('密码不正确！');
        }

        // 是否启用
        if (!$this->isActive($admin['email'])) {
            return $this->errorResultReturn('账户已被禁用！');
        }

        $loginMarked = C('LOGIN_MARKED');
        $shell = $this->genShell($account['id'], $account['password']);

        // 生成登录session
        $_SESSION[$loginMarked] = $shell;

        // 生成登录cookie
        $shell .= '_' . time();
        setcookie($loginMarked, $shell, 0, '/');
        $_SESSION['current_account'] = $account;

        return $this->resultReturn(true,date('Y-m-d H:i:s', time()));
    }
    /**
     * 账户是否启用
     * @param  string  $email email
     * @return boolean
     */
    public function isActive($email) {
        $where = array(
            'email' => $email,
            'is_active' => 1
        );
        if ($this->getM()->where($where)->count() > 0) {
            return true;
        }

        return false;
    }
    /**
     * 是否存在帐号
     * @param  string  $email email
     * @return boolean
     */
    public function existAccount($email) {
        if ($this->getM()->where("email='{$email}'")->count() > 0) {
            return true;
        }

        return false;
    }
    /**
     * 生成登录shell
     * @param  int    $id       shell的id
     * @param  string $password shell的密码
     * @return string
     */
    private function genShell($id, $password) {
        return md5($password . C('AUTH_TOKEN')) . $id;
    }
    protected function getModelName() {
        return 'Admin';
    }
}