<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./application/admin/template/language/add.htm";i:1544516176;s:85:"/Users/lixiangyang/Desktop/projects/test/application/admin/template/public/layout.htm";i:1547521062;s:84:"/Users/lixiangyang/Desktop/projects/test/application/admin/template/language/bar.htm";i:1544634366;s:85:"/Users/lixiangyang/Desktop/projects/test/application/admin/template/public/footer.htm";i:1525273456;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>

</head>
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
            <div class="subject">
                <h3>多语言</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access('Language@index') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['index','add','edit'])): ?>
                    <a href="<?php echo url("Language/index"); ?>" class="tab current"><span>语言列表</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/index"); ?>" class="tab"><span>语言列表</span></a>
                <?php endif; ?>
                </li>
                <?php endif; if(is_check_access('Language@customvar_arctype') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['customvar_arctype'])): ?>
                    <a href="<?php echo url("Language/customvar_arctype"); ?>" class="tab current"><span>模板栏目变量</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/customvar_arctype"); ?>" class="tab"><span>模板栏目变量</span></a>
                <?php endif; ?>
                </li>
                <?php endif; if(is_check_access('Language@pack_index') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['pack_index','pack_add','pack_batch_add','pack_edit'])): ?>
                    <a href="<?php echo url("Language/pack_index"); ?>" class="tab current"><span>模板语言变量</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/pack_index"); ?>" class="tab"><span>模板语言变量</span></a>
                <?php endif; ?>
                </li>
                <?php endif; if(is_check_access('Language@pack_index') == '1'): ?>
                <li>
                <?php if('Language' == CONTROLLER_NAME AND in_array(ACTION_NAME, ['official_pack_index'])): ?>
                    <a href="<?php echo url("Language/official_pack_index"); ?>" class="tab current"><span>官方语言包变量</span></a>
                <?php else: ?>
                    <a href="<?php echo url("Language/official_pack_index"); ?>" class="tab"><span>官方语言包变量</span></a>
                <?php endif; ?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Language/add'); ?>" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>选择语言</label>
                </dt>
                <dd class="opt">
                    <select name="mark" id="languagemark">
                        <option value="">请选择语言…</option>
                        <?php if(is_array($languagemark) || $languagemark instanceof \think\Collection || $languagemark instanceof \think\Paginator): $i = 0; $__LIST__ = $languagemark;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['mark']; ?>" data-title="<?php echo $vo['title']; ?>"><?php echo $vo['cn_title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>语言名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" id="title" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">在前台显示</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>语言状态</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="status1" class="cb-enable selected">开启</label>
                        <label for="status0" class="cb-disable ">关闭</label>
                        <input id="status1" name="status" value="1" type="radio" checked="checked">
                        <input id="status0" name="status" value="0" type="radio">
                    </div>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>前台默认语言</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="is_home_default1" class="cb-enable">是</label>
                        <label for="is_home_default0" class="cb-disable selected">否</label>
                        <input id="is_home_default1" name="is_home_default" value="1" type="radio">
                        <input id="is_home_default0" name="is_home_default" value="0" type="radio" checked="checked">
                    </div>
                    <!-- <p class="clear"></p> -->
                    <p class=""></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>新窗口打开</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="target1" class="cb-enable">是</label>
                        <label for="target0" class="cb-disable selected">否</label>
                        <input id="target1" name="target" value="1" type="radio">
                        <input id="target0" name="target" value="0" type="radio" checked="checked">
                    </div>
                    <p class="notic"></p>
                </dd>
            </dl>
            <!-- <dl class="row">
                <dt class="tit">
                    <label for="url">单独域名</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="url" value="" id="url" class="input-txt">
                    <span class="err"></span>
                    <p class=""><font color="red">务必包含http://或https://，访问该域名程序将自动跳转到此语言（需先做好域名解析绑定），或者做外部链接用。</font></p>
                </dd>
            </dl> -->
            <dl class="row">
                <dt class="tit">
                    <label for="sort_order">排序</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="sort_order" value="100" id="sort_order" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">越小越靠前</p>
                </dd>
            </dl>
            <div class="bot">
                <input type="hidden" name="copy_lang" value="<?php echo $main_lang; ?>" />
                <a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    $(function(){
        /*选择多语言*/
        $('#languagemark').change(function(){
            var title = $(this).find("option:selected").data('title');
            $('input[name=title]').val(title);
        });
        /*--end*/
    });

    // 判断输入框是否为空
    function checkForm(){
        if($('#languagemark').val() == ''){
            showErrorMsg('请选择语言！');
            $('#languagemark').focus();
            return false;
        }
        if($('input[name=title]').val() == ''){
            showErrorMsg('语言名称不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        layer_loading('正在处理');
        $('#post_form').submit();
    }
</script>
<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>