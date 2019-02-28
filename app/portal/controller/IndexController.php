<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use think\Db;

class IndexController extends HomeBaseController
{
    public function index()
    {
        // 查询轮播
        $sliders = Db::name("slide_item")->where("`status` = 1")->select();
        $slider = '';
        foreach ($sliders as $k => $val) {
            if (($k + 1) == sizeof($sliders)) {
                $slider .= $val['image'];
            } else {
                $slider .= $val['image'] . ',';
            }
        }
        $this->assign('slider', $slider);

        return $this->fetch(':index');
    }
}
