<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:31:"./template/pc/lists_article.htm";i:1547472898;s:63:"/Users/lixiangyang/Desktop/projects/test/template/pc/header.htm";i:1554275175;s:63:"/Users/lixiangyang/Desktop/projects/test/template/pc/footer.htm";i:1547472650;}*/ ?>
<!DOCTYPE html>
<html>
 <head> 
  <title><?php echo $eyou['field']['seo_title']; ?></title> 
  <meta name="renderer" content="webkit" /> 
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" /> 
  <meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" /> 
  <meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
  <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/basic.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/common.css","",""); echo $__VALUE__; ?> 
  <style>
    body{background-position: center;background-repeat: no-repeat;background-color: ;font-family:;}
  </style> 
    <!--[if lte IE 9]>
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/lteie9.js","",""); echo $__VALUE__; ?>
    <![endif]--> 
 </head> 
 <!--[if lte IE 8]>
    <div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
    </button>
    你正在使用一个 <strong>过时</strong> 的浏览器。请 <a href=https://browsehappy.com/ target=_blank>升级您的浏览器</a>，以提高您的体验。</div>
<![endif]--> 
 <body> 
<!--header-s-->
      <header class="met-head" e-page="header"> 
   <nav class="navbar navbar-default box-shadow-none met-nav"> 
    <div class="container"> 
     <div class="row"> 
      <h1 hidden=""><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h1> 
      <div class="navbar-header pull-xs-left"> 
       <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" class="navbar-logo vertical-align block pull-xs-left" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"> 
        <div class="vertical-align-middle"> 
         <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" /> 
        </div> </a> 
      </div>
      <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 met-nav-toggler" data-target="#met-nav-collapse" data-toggle="collapse">
        <span class="sr-only"></span>
        <span class="hamburger-bar"></span>
      </button> 
      <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="met-nav-collapse"> 
       <ul class="nav navbar-nav navlist"> 
        <li class="nav-item"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl1";}'); echo $__VALUE__; ?>" class="nav-link <?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl1";}'); echo $__VALUE__; ?></a> </li> 

        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li class="nav-item dropdown m-l-10"> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>" class="nav-link dropdown-toggle <?php echo $field['currentstyle']; ?>" <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>data-toggle="dropdown"<?php endif; ?> data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><span class="fa fa-angle-down p-l-5"></span><?php endif; ?></a> 
         <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
         <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet"> 
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
          <div class="dropdown-item dropdown-submenu"> 
           <a href="<?php echo $field2['typeurl']; ?>" class="dropdown-item "><?php echo $field2['typename']; ?></a> 
           <?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
           <div class="dropdown-menu animate"> 
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$mod = ($e % 2 );$i= intval($key) + 1;?>
            <a href="<?php echo $field3['typeurl']; ?>" class="dropdown-item "><?php echo $field3['typename']; ?></a> 
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
           </div> 
           <?php endif; ?>
          </div> 
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
         </div>
         <?php endif; ?>
        </li> 
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; if(!(empty($eyou['global']['web_language_switch']) || (($eyou['global']['web_language_switch'] instanceof \think\Collection || $eyou['global']['web_language_switch'] instanceof \think\Paginator ) && $eyou['global']['web_language_switch']->isEmpty()))): ?>
        <li class="nav-item dropdown m-l-10 met-langlist">
          <a href="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:5:"const";s:3:"url";}'); echo $__VALUE__; ?>" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:5:"const";s:5:"title";}'); echo $__VALUE__; ?>" class="nav-link dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:5:"const";s:4:"logo";}'); echo $__VALUE__; ?>" alt="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:5:"const";s:5:"title";}'); echo $__VALUE__; ?>" width="20" /><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:5:"const";s:5:"title";}'); echo $__VALUE__; ?><span class="fa fa-angle-down p-l-5"></span></a> 
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet"> 
            <?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("default", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
            <div class="dropdown-item dropdown-submenu met-langlist"> 
              <a href="<?php echo $field['url']; ?>" class="dropdown-item "><img src="<?php echo $field['logo']; ?>" alt="<?php echo $field['title']; ?>" width="20" /><?php echo $field['title']; ?></a> 
            </div> 
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
         </div>
        </li>
        <?php endif; ?>

       </ul> 
      </div> 
     </div> 
    </div> 
   </nav> 
  </header> 
<!--header-e-->
<main e-page="lists_article">
  <div class="met-banner-ny vertical-align text-center" m-id="banner"> 
   <h1 class="vertical-align-middle"><?php echo $eyou['field']['typename']; ?></h1> 
  </div> 
  <section class="met-crumbs hidden-sm-down" m-id="met_position" m-type="nocontent"> 
   <div class="container"> 
    <div class="row"> 
     <div class="border-bottom clearfix"> 
      <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow"> 
       <li class="breadcrumb-item"> <?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl5";}'); echo $__VALUE__; ?>： <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?> </li>
      </ol> 
     </div> 
    </div> 
   </div> 
  </section> 
  <section class="met-column-nav" m-id="subcolumn_nav" m-type="nocontent"> 
   <div class="container"> 
    <div class="row"> 
     <ul class="clearfix met-column-nav-ul"> 
      <li> <a href="<?php echo $eyou['field']['ptypeurl']; ?>" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl2";}'); echo $__VALUE__; ?>" <?php if($eyou['field']['has_children'] > '0'): ?>class="active"<?php endif; ?>><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl2";}'); echo $__VALUE__; ?></a> </li> 
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "sonself", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <li> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>" class="<?php echo $field['currentstyle']; ?>"><?php echo $field['typename']; ?></a> </li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
     </ul> 
    </div> 
   </div> 
  </section> 
  <section class="met-news animsition"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-md-9 met-news-body"> 
      <div class="row"> 
       <div class="met-news-list" m-id="noset"> 
        <ul class="ulstyle met-pager-ajax imagesize" data-scale="400x400"> 
         <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 10, "", "", "desc");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
         <li class="media media-lg border-bottom1"> 
          <div class="media-left"> 
           <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"> <img class="media-object" src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" height="100" /></a> 
          </div> 
          <div class="media-body"> 
           <h4> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_self"><?php echo $field['title']; ?></a> </h4> 
           <p class="des font-weight-300"> <?php echo $field['seo_description']; ?></p> 
           <p class="info font-weight-300"> <span><?php echo MyDate('Y-m-d',$field['add_time']); ?></span> <span></span> <span> <i class="icon wb-eye m-r-5 font-weight-300" aria-hidden="true"></i> <?php echo $field['click']; ?> </span> </p> 
          </div>
         </li> 
         <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
        </ul> 
        <div class="m-t-20 text-xs-center hidden-sm-down" m-type="nosysdata"> 
          <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,end,pre,next", "2"); echo $__VALUE__; ?>
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="col-md-3"> 
      <div class="row"> 
       <div class="met-bar"> 
        <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
        <form class="sidebar-search" method="get" action="<?php echo $field['action']; ?>">
          <?php echo $field['hidden']; ?>
         <div class="form-group"> 
          <div class="input-search"> 
           <button type="submit" class="input-search-btn"> <i class="icon wb-search" aria-hidden="true"></i> </button> 
           <input type="text" class="form-control" name="keywords" placeholder="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl6";}'); echo $__VALUE__; ?>" /> 
          </div> 
         </div> 
        </form> 
        <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; ?>
        <div class="sidebar-news-list recommend"> 
         <h3 class=" font-weight-300 m-0"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl7";}'); echo $__VALUE__; ?></h3> 
         <ul class="list-icons list-group-bordered m-t-10 m-b-0"> 
         <!-- 循环输出指定最顶级栏目ID的文档列表，并按随机排序 start -->
         <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tag = array (
  'typeid' => '2',
  'limit' => '0,5',
  'titlelen' => '30',
  'orderby' => 'rand',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "rand", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
         <li> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a> </li> 
         <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
         <!-- 循环输出指定最顶级栏目ID的文档列表，并按随机排序 end -->
         </ul> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </section> 
</main>
  <!--footer-s-->
    <footer class="met-foot-info p-y-20 border-top1" e-page="footer"> 
   <div class="langcss text-xs-center p-b-20"> 
    <div class="container"> 
     <div class="row mob-masonry"> 
      <div class="col-lg-2 col-md-3 col-xs-6 list masonry-item foot-nav eyou-edit" e-id="301" e-type="channel" id="testtest"> 
       <?php  $tagUichannel = new \think\template\taglib\eyou\TagUichannel; $__LIST__ = $tagUichannel->getUichannel("1","301", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
       <h4 class="font-size-16 m-t-0"> <a href="<?php echo $field['typeurl']; ?>" target="_self" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a> </h4>
        <?php endif; else: echo htmlspecialchars_decode("");endif; ?>
       <ul class="ulstyle m-b-0"> 
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li> <a href="<?php echo $field['typeurl']; ?>" target="_self" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a> </li> 
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
       </ul> 
      <?php $ui_typeid = $ui_row = ""; endif; ?>
      </div> 
      <div class="col-lg-2 col-md-3 col-xs-6 list masonry-item foot-nav eyou-edit" e-id="302" e-type="channel"> 
       <?php  $tagUichannel = new \think\template\taglib\eyou\TagUichannel; $__LIST__ = $tagUichannel->getUichannel("2","302", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
        <h4 class="font-size-16 m-t-0"> <a href="<?php echo $field['typeurl']; ?>" target="_self" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a> </h4>
        <?php endif; else: echo htmlspecialchars_decode("");endif; ?>
       <ul class="ulstyle m-b-0"> 
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li> <a href="<?php echo $field['typeurl']; ?>" target="_self" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a> </li> 
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
       </ul> 
      <?php $ui_typeid = $ui_row = ""; endif; ?>
      </div> 
      <div class="col-lg-2 col-md-3 col-xs-6 list masonry-item foot-nav eyou-edit" e-id="303" e-type="channel"> 
       <?php  $tagUichannel = new \think\template\taglib\eyou\TagUichannel; $__LIST__ = $tagUichannel->getUichannel("3","303", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
       <h4 class="font-size-16 m-t-0"> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a> </h4> 
        <?php endif; else: echo htmlspecialchars_decode("");endif; ?>
       <ul class="ulstyle m-b-0"> 
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a> </li> 
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
       </ul> 
      <?php $ui_typeid = $ui_row = ""; endif; ?>
      </div> 
      <div class="col-lg-3 col-md-12 col-xs-12 info masonry-item font-size-20" m-id="met_contact" m-type="nocontent"> 
       <p class="font-size-26"><a href="javascript:void(0);" title="" class="eyou-edit" e-id="304" e-type="text">
         <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("304", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else:  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl4";}'); echo $__VALUE__; endif; ?>
        </a></p> 
       <p class="eyou-edit" e-id="web_attr_2" e-type="text">
         <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("web_attr_2", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else:  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; endif; ?>
       </p> 
       <?php if(!(empty($eyou['global']['web_attr_4']) || (($eyou['global']['web_attr_4'] instanceof \think\Collection || $eyou['global']['web_attr_4'] instanceof \think\Paginator ) && $eyou['global']['web_attr_4']->isEmpty()))): ?>
       <a class="p-r-5" id="met-weixin" data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement="top" data-width="auto" data-height="auto" data-padding="0" data-content="&lt;div class='text-xs-center'&gt;&lt;img src='<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>' alt='<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>' width='150' height='150' id='met-weixin-img'&gt;&lt;/div&gt;"> <i class="fa fa-weixin light-green-700"></i> </a> 
       <?php endif; if(!(empty($eyou['global']['web_attr_3']) || (($eyou['global']['web_attr_3'] instanceof \think\Collection || $eyou['global']['web_attr_3'] instanceof \think\Paginator ) && $eyou['global']['web_attr_3']->isEmpty()))): ?>
       <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?>&amp;site=qq&amp;menu=yes" rel="nofollow" target="_blank" class="p-r-5"> <i class="fa fa-qq"></i> </a> 
       <?php endif; if(!(empty($eyou['global']['web_attr_1']) || (($eyou['global']['web_attr_1'] instanceof \think\Collection || $eyou['global']['web_attr_1'] instanceof \think\Paginator ) && $eyou['global']['web_attr_1']->isEmpty()))): ?>
       <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>" rel="nofollow" target="_blank" class="p-r-5"> <i class="fa fa-weibo red-600"></i> </a> 
       <?php endif; ?>
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="copy p-y-10 border-top1"> 
    <div class="container text-xs-center"> 
     <p>
      <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("all", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 15, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <a href='<?php echo $field['url']; ?>'><?php echo $field['title']; ?></a>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
     </p>
    </div>
    <div class="container text-xs-center"> 
     <p class="eyou-edit" e-id="web_copyright" e-type="text">
         <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("web_copyright", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else:  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; endif; ?>
     </p>
     <p>
        <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>
     </p>
     <button type="button" class="btn btn-outline btn-default btn-squared btn-lang" id="btn-convert" m-id="lang" m-type="lang">繁體</button> 
    </div> 
   </div>  
   <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?>
  </footer>
  <input type="hidden" name="met_lazyloadbg" value="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/loading.gif" /> 
  <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/tether.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/bootstrap.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/breakpoints.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/webui-popover.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery-s2t.js","",""); echo $__VALUE__; ?>
  <!-- 应用插件标签 start -->
   <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
  <!-- 应用插件标签 end -->
  <!--footer-e-->
  <?php  $tagUi = new \think\template\taglib\eyou\TagUi; $__VALUE__ = $tagUi->getUi(); echo $__VALUE__; ?>
 </body>
</html>