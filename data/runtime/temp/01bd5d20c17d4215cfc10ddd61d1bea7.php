<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./application/admin/template/other/ui_edit.htm";i:1544587640;s:85:"/Users/lixiangyang/Desktop/projects/test/application/admin/template/public/layout.htm";i:1547521062;s:85:"/Users/lixiangyang/Desktop/projects/test/application/admin/template/public/footer.htm";i:1525273456;}*/ ?>
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

<body style="background-color: #FFF; overflow-x:hidden;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>广告管理</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" class="tab current"><span>编辑</span></a></li>
                <?php if($main_lang == $admin_lang): ?>
                <li><a href="javascript:void(0);" class="tab" data-url="<?php echo url('Other/ui_del'); ?>" data-id="<?php echo $field['id']; ?>" onClick="ui_delfun(this);"><span>删除</span></a></li>
                <li><a href="<?php echo url('Other/ui_add', array('edit_id'=>$field['id'], 'pid'=>$field['pid'])); ?>" class="tab"><span>新增</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>广告名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title">广告位说明</label>
                </dt>
                <dd class="opt"> 
                    <?php echo $ad_position['title']; ?>&nbsp;(<?php echo $ad_position['width']; ?>*<?php echo $ad_position['height']; ?>&nbsp;像素)
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>广告链接</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="links" value="<?php echo $field['links']; ?>" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>广告图片</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" <?php if($field['is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>" target="_blank">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $field['litpic_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                 title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($field['is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                    <p class="notic">请填写图片链接，或上传图片格式文件，具体像素大小视网站模板而定</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="author">排序</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="sort_order" value="<?php echo (isset($field['sort_order']) && ($field['sort_order'] !== '')?$field['sort_order']:'100'); ?>" id="sort_order" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">越小越靠前</p>
                </dd>
            </dl>
        </div>
        <!-- 常规信息 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="id" value="<?php echo $field['id']; ?>">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">
    
    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引

    $(function () {
        //选项卡切换列表
    });

    // 远程/本地上传图片切换
    function clickRemote(obj, id)
    {
        if ($(obj).is(':checked')) {
            $('#'+id+'_remote').show();
            $('.div_'+id+'_local').hide();
        } else {
            $('.div_'+id+'_local').show();
            $('#'+id+'_remote').hide();
        }
    }
    
    // 判断输入框是否为空
    function check_submit(){
        if($('input[name=title]').val() == ''){
            layer.msg('广告名称不能为空！', {icon: 2,time: 1000});
            return false;
        }

        layer_loading('正在处理');

        $.ajax({
            url: "<?php echo url('Other/ui_edit'); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#post_form').serialize(),
            success: function(res){
                layer.closeAll();
                if (res.code == 1) {
                    parent.layer.msg(res.msg, {shade: 0.3, time: 1000}, function(){
                        parent.window.location.reload();
                        parent.layer.close(parentObj);
                    });
                } else {
                    // parent.showErrorMsg(res.msg);
                    layer.alert(res.msg, {icon:5});
                }
                return false;
            },
            error: function(e){
                layer.closeAll();
                layer.alert('操作失败', {icon:5});
                return false;
            }
        });

        return false;
    }

    function img_call_back(fileurl_tmp)
    {
      $("#litpic_local").val(fileurl_tmp);
      $("#img_a").attr('href', fileurl_tmp);
      $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
    }

    function ui_delfun(obj) {
        layer.confirm('此操作不可逆，确认删除？', {
              btn: ['确定','取消'] //按钮
            }, function(){
                // 确定
                layer_loading('正在处理');
                $.ajax({
                    type : 'post',
                    url : $(obj).attr('data-url'),
                    data : {del_id:$(obj).attr('data-id')},
                    dataType : 'json',
                    success : function(data){
                        layer.closeAll();
                        if(data.code == 1){
                            parent.layer.msg(data.msg, {shade: 0.3, time: 1000}, function(){
                                parent.window.location.reload();
                                parent.layer.close(parentObj);
                            });
                        }else{
                            layer.msg(data.msg, {icon: 2,time: 2000});
                        }
                    }
                })
            }, function(index){
                layer.close(index);
                return false;// 取消
            }
        );
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