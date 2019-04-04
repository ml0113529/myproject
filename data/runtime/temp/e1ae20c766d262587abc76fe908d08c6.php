<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:43:"./application/api/template/uiset/upload.htm";i:1554272640;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>可视化编辑</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" type="text/css" href="/public/plugins/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/public/static/common/js/jquery.min.js?v=v1.3.0"></script>
	<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=v1.3.0"></script>
	<style type="text/css">
		.controls {
			width: 100%;
		}
		.container-fluid {
		    padding: 10px 10px;
		    overflow: hidden;
		}
		.control-group {
			padding: 5px 0px;
		}
		.title{
			float: left;
		}
		.left {
			float: left;
			width: 250px;
		}
		.btn{
		    font: bold 14px/20px "microsoft yahei", arial;
			background-color: #4fc0e8;
			color: #FFF;
		    text-shadow: 0 -1px 0 rgba(0,0,0,0.10);
		    border-color: #3aa8cf;
		}
		.btn:hover {
			color: #FFF;
			background-color: #3aa8cf;
		}
		.input-txt{
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" id="post_form" onsubmit="return check_submit();">
					<div class="control-group">
						<div class="controls">
							<div class="title">原图片：</div>
							<div class="">
								<a href="" class="imgsrc" target="_blank"><img src="" width="60" height="60" /></a>
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div class="title">上传图片：</div>
							<div class="left div_litpic_local" <?php if(isset($field['is_remote']) AND $field['is_remote'] == 1): ?>style="display: none;"<?php endif; ?>>
								<input type="file" name="litpic_local" id="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>">
							</div>
							<div class="left">
                    			<input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if(!isset($field['is_remote']) OR empty($field['is_remote'])): ?> style="display: none;"<?php endif; ?>>
                    		</div>
						</div>
					</div>
					<div class="control-group" style="margin-top: 25px;">
						<div class="controls">
                    		<label>
                    			<input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if(isset($field['is_remote']) AND $field['is_remote'] == 1): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片
                    		</label>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="hidden" name="oldhtml" value="">
							<input type="hidden" name="id" value="<?php echo (isset($field['id']) && ($field['id'] !== '')?$field['id']:''); ?>">
							<input type="hidden" name="type" value="<?php echo (isset($field['type']) && ($field['type'] !== '')?$field['type']:''); ?>">
							<input type="hidden" name="page" value="<?php echo (isset($field['page']) && ($field['page'] !== '')?$field['page']:''); ?>">
                            <input type="hidden" name="v" value="<?php echo (isset($v) && ($v !== '')?$v:'pc'); ?>">
							<input type="hidden" name="lang" value="<?php echo (isset($field['lang']) && ($field['lang'] !== '')?$field['lang']:'cn'); ?>">
							<label class="checkbox"><input type="button" class="btn" value="确认提交" onclick="check_submit();" /></label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
	    
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

        function check_submit()
        {
	        layer_loading('正在处理');

			var formData = new FormData($("#post_form")[0]);
            var url = "<?php echo url('api/Uiset/submit'); ?>";
            $.ajax({
                url: url,
				type: 'POST',  
				data: formData,  
				// async: false,  
				cache: false,  
				contentType: false,  
				processData: false,
				dataType: 'JSON',
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
                    // parent.showErrorMsg('操作失败');
                	layer.alert('操作失败', {icon:5});
                    return false;
	        	}
	        });
        }

	    /**
	     * 封装的加载层
	     */
	    function layer_loading(msg){
	        var loading = layer.msg(
	        msg+'...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请勿刷新页面', 
	        {
	            icon: 1,
	            time: 3600000, //1小时后后自动关闭
	            shade: [0.2] //0.1透明度的白色背景
	        });
	        //loading层
	        var index = layer.load(3, {
	            shade: [0.1,'#fff'] //0.1透明度的白色背景
	        });

	        return loading;
	    }
	</script>
</body>
</html>