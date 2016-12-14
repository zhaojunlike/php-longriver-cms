<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Wap\Controller;

use Common\Helper\MobileHelper;
use Think\Controller;

/**
 * 前台公共控制器
 * 为防止多分组Controller名称冲突，公共Controller名称统一使用分组名称
 */
class BaseController extends Controller
{


    protected $limit_count = 9;

    protected function _initialize()
    {
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if (!C('WEB_SITE_CLOSE')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
        $this->checkPc();
    }

    /* 空操作，用于输出404页面 */
    public function _empty()
    {
        $this->redirect('Index/index');

    }

    private function checkPc()
    {
        if (!MobileHelper::isMobile()) {
            //跳转手机
            redirect(__ROOT__ . "/index.php");
        }
    }

}
