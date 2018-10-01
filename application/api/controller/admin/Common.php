<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/1
 * Time: 1:10
 */

namespace app\api\controller\admin;


use app\common\controller\AdminController;
use think\facade\Cache;


/**
 * 后台公共接口
 * Class Common
 * @package app\api\controller\admin
 */
class Common extends AdminController {

    /**
     * 获取菜单接口
     */
    public function getMenu() {
        $SysInfo = cache('SysInfo');
        if (!isset($SysInfo['AdminModuleName'])) {
            return __error('后台菜单数据有误，请刷新缓存！');
        }
        $this->redirect(url("{$SysInfo['AdminModuleName']}.php\api.menu\getMenu"));
    }
}