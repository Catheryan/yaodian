<?php
namespace Home\Controller;

use Think\Controller;

/**
 * CommonController
 * 通用控制器
 */
class CommonController extends Controller {
    /**
    * 全局初始化
    * @return
    */
    public function _initialize() {
        // utf-8编码
        header('Content-Type: text/html; charset=utf-8');

        // 登录过滤
//        $notLoginModules = explode(',', 'Index');
//        if (!in_array(CONTROLLER_NAME, $notLoginModules)) {
//            $this->filterLogin();
//        }

        // 权限过滤
        //$this->filterAccess();


    }

    /**
     * 登录过滤
     * @return
     */
    protected function filterLogin() {
        $result = D('Admin', 'Service')->checkLogin();
        if (!$result['status']) {
            return $this->error($result['data']['error'], U('Index/index'));
        }
    }

    /**
     * 权限过滤
     * @return
     */
    protected function filterAccess() {
        if (!C('USER_AUTH_ON')) {
            return ;
        }
        if (\Org\Util\Rbac::AccessDecision(C('GROUP_AUTH_NAME'))) {
            return ;
        }

        if (!$_SESSION [C('USER_AUTH_KEY')]) {
            // 登录认证号不存在
            return $this->redirect(C('USER_AUTH_GATEWAY'));
        }

        if ('Public' === CONTROLLER_NAME && 'Public' === ACTION_NAME) {
            // 首页无法进入，则登出帐号
            D('Admin', 'Service')->logout();
        }

        return $this->error('您没有权限执行该操作！');
    }
    /**
     * 是否已登录
     * @return boolean
     */
    protected function hasLogin() {
        $result = D('Admin', 'Service')->checkLogin();

        return $result['status'];
    }

    /**
     * 空操作
     * @return
     */
    public function _empty() {
        $this->error('亲，您访问的页面不存在！');
    }

    /**
     * 得到数据分页
     * @param  string $modelName 模型名称
     * @param  array  $where     分页条件
     * @return array
     */
    protected function getPagination($modelName, $where, $fields, $order) {
        $service = D($modelName, 'Service');
        // 总数据行数
        $totalRows = $service->getCount($where);
        // 实例化分页
        $page = new \Org\Util\Page($totalRows, C('PAGE_LIST_ROWS'));
        $result['show'] = $page->show();
        // 得到分页数据
        $data = $service->getPagination($where,
                                        $fields,
                                        $order,
                                        $page->firstRow,
                                        $page->listRows);
        $result['data'] = $data;
        $result['total_rows'] = $totalRows;
        return $result;
    }

    /**
     * 分配菜单
     * @return
     */
    protected function assignMenu() {
        $menu = $this->getMenu();

        $this->assign('main_menu', $menu['main_menu']);
        $this->assign('sub_menu', $menu['sub_menu']);
    }

    /**
     * 分配面包屑
     * @return
     */
    protected function assignBreadcrumbs() {
        $breadcrumbs = $this->getBreadcrumbs();

        $this->assign('breadcrumbs', $breadcrumbs);
    }

    /**
     * 得到菜单
     * @return array
     */
    protected function getMenu() {
        $menu = C('MENU');
        // 主菜单
        $mainMenu = array();
        // 处理主菜单
        foreach ($menu as $key => $menuItem) {
            $mainMenu[$key]['name'] = $menuItem['name'];
            $mainMenu[$key]['target'] = $menuItem['target'];
        }
        // 子菜单
        $subMenu = array();
        $ctrlName = CONTROLLER_NAME;
        foreach ($menu[$ctrlName]['sub_menu'] as $item) {
            $routes = array_keys($item['item']);
            $itemNames = array_values($item['item']);
            $subMenu[$routes[0]] = $itemNames[0];
        }
        return array(
            'main_menu' => $mainMenu,
            'sub_menu' => $subMenu
        );
    }

    /**
     * 得到面包屑
     * @return string
     */
    public function getBreadcrumbs() {
        $menu = C('MENU');
        $menuItem = $menu[CONTROLLER_NAME];
        // 主菜单显示名称
        $main = $menuItem['name'];
        // 子菜单显示名称
        $sub = 'unkonwn';
        $route = CONTROLLER_NAME . '/' . ACTION_NAME;
        foreach ($menuItem['sub_menu'] as $item) {
            // 以键值匹配路由
            if (array_key_exists($route, $item['item'])) {
                $sub = $item['item'][$route];
            }
        }

        return $main . ' > ' . $sub;
    }

    /**
     * { status : true, info: $info}
     * @param  string $info
     * @param  string $url
     * @return
     */
    protected function successReturn($info, $url) {
        $this->resultReturn(true, $info, $url);
    }

    /**
     * { status : false, info: $info}
     * @param  string $info
     * @param  string $url
     * @return
     */
    protected function errorReturn($info, $url) {
        $this->resultReturn(false, $info, $url);
    }

    /**
     * 返回带有status、info键值的json数据
     * @param  boolean $status
     * @param  string $info
     * @param  string $url
     * @return
     */
    protected function resultReturn($status, $info, $url) {
        $json['status'] = $status;
        $json['info'] = $info;
        $json['url'] = isset($url) ? $url : '';

        return $this->ajaxReturn($json);
    }

    /**
     * 下载文件
     * @param  文件路径 $filePath
     * @param  文件名称 $fileName
     * @return
     */
    protected function download($filePath, $fileName) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; '
               . 'filename="' . $fileName . '"');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
    }
}
