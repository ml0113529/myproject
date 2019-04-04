<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace think\template\taglib\eyou;


/**
 * 网站应用插件列表标签
 */
class TagWeapplist extends Base
{
    public $weappidArr = array();
    
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
        $this->weappidArr = array();
    }

    /**
     * 页面上展示网站应用插件
     * @author wengxianhu by 2018-4-20
     */
    public function getWeapplist($type = 'usersmenu', $currentstyle = '')
    {
        $row = false;
        $map = array(
            'tag_weapp' => array('eq',1),
            'status' => array('eq',1),
            'position'  => $type,
        );
        $result = M('weapp')->field('name,code,config')
            ->where($map)
            // ->cache(true, EYOUCMS_CACHE_TIME, 'hooks')
            ->select();
        foreach ($result as $key => $val) {
            $config = json_decode($val['config'], true);
            if (isMobile() && !in_array($config['scene'], [0,1])) {
                continue;
            } else if (!isMobile() && !in_array($config['scene'], [0,2])) {
                continue;
            }

            $code = $val['code'];
            $link = !empty($config['link']) ? url($config['link']) : url('user/Users/centre');
            $menutitle = !empty($config['menutitle']) ? $config['menutitle'] : $val['name'];

            /*标记被选中效果*/
            if ($link == MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME) {
                $tmp_currentstyle = $currentstyle;
            } else {
                $tmp_currentstyle = '';
            }
            /*--end*/

            $row[] = [
                'code'  => $code,
                'href'  => $link,
                'title' => $menutitle,
                'currentstyle'  => $tmp_currentstyle,
            ];
        }
        return $row;
    }
}