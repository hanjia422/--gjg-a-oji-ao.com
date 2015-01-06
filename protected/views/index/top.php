<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo CSS_URL;?>general.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#header-div {
  background: #276d95;
  border-bottom: 1px solid #276d95;
}

#logo-div {
  height: 55px;
  float: left;
}

#license-div {
  height: 55px;
  float: left;
  text-align:center;
  vertical-align:middle;
  line-height:55px;
}

#license-div a:visited, #license-div a:link {
  color: #EB8A3D;
}

#license-div a:hover {
  text-decoration: none;
  color: #EB8A3D;
}

#submenu-div {
  height: 35px;
  padding-top:20px
}

#submenu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#submenu-div li {
  float: right;
  padding: 0 10px;
  margin: 3px 0;
  border-left: 1px solid #FFF;
}

#submenu-div a:visited, #submenu-div a:link {
  color: #FFF;
  text-decoration: none;
}

#submenu-div a:hover {
  color: #fff;
  text-decoration:underline;
  
}

#loading-div {
  clear: right;
  text-align: right;
  display: block;
}

#menu-div {
  background: #276d95;
  font-weight: bold;
  height: 30px;
  line-height:30px;
}

#menu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#menu-div li {
  float: left;
  border-right: 1px solid #192E32;
  /**border-left:1px solid #BBDDE5;**/
}

#menu-div a:visited, #menu-div a:link {
  display:block;
  padding: 0 20px;
  text-decoration: none;
  color: #345263;
  background:#bad6e6;
}

#menu-div a:hover {
  color: #fff;
  background:#1c506e;
}

#submenu-div a.fix-submenu{clear:both; margin-left:5px; padding:2px 7px; *padding:5px 7px 7px; background:#dce3f2; color:#276d95;}
#submenu-div a.fix-submenu:hover{padding:2px 7px; *padding:5px 7px 7px; background:#FFF; color:#278296;}
#menu-div li.fix-spacel{width:22px; border-left:none;}
#menu-div li.fix-spacer{border-right:none;}
</style>
<script type="text/javascript" src="<?php echo JS_URL;?>transport.js"></script><script type="text/javascript">
/**
 * 帮助系统调用
 */
function web_address()
{
  var ne_add = parent.document.getElementById('main-frame');
  var ne_list = ne_add.contentWindow.document.getElementById('search_id').innerHTML;
  ne_list.replace('-', '');
  var arr = ne_list.split('-');
  window.open('help.php?al='+arr[arr.length - 1],'_blank');
}



function modalDialog(url, name, width, height)
{
  if (width == undefined)
  {
    width = 400;
  }
  if (height == undefined)
  {
    height = 300;
  }

  if (window.showModalDialog)
  {
    window.showModalDialog(url, name, 'dialogWidth=' + (width) + 'px; dialogHeight=' + (height+5) + 'px; status=off');
  }
  else
  {
    x = (window.screen.width - width) / 2;
    y = (window.screen.height - height) / 2;

    window.open(url, name, 'height='+height+', width='+width+', left='+x+', top='+y+', toolbar=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, modal=yes');
  }
}

function ShowToDoList()
{
  try
  {
    var mainFrame = window.top.frames['main-frame'];
    mainFrame.window.showTodoList(adminId);
  }
  catch (ex)
  {
  }
}


var adminId = "1"; 
</script>
</head>
<body>
<div id="header-div">
  <div id="logo-div" style="bgcolor:#000000;"><img src="<?php echo IMG_URL;?>logo.gif" alt="高教网" /></div>
  <div id="license-div" style="bgcolor:#000000;"></div>
  <div id="submenu-div">
  	<div id="send_info" style="padding: 5px 10px 0 0; text-align: right; color: #276d95;width:120px;float: right;">
            <a href="#" target="main-frame" class="fix-submenu">清除缓存</a>
      <a href="<?php echo Yii::app()->createUrl('Admin/logout');?>" target="_top" class="fix-submenu">退出</a>
    </div>
    <ul>
      <li><a href="#" target="main-frame">关于高教网</a></li>
      <li><a href="#">帮助</a></li>
      <li><a href="#" target="_blank">查看网站</a></li>      
      <li><a href="#" target="main-frame">个人设置</a></li>
      <li><a href="javascript:window.top.frames['main-frame'].document.location.reload();window.top.frames['header-frame'].document.location.reload()">刷新</a></li>
      <li><a href="#"  onclick="ShowToDoList()">记事本</a></li>
      <li style="border-left:none;"><a href="#" target="main-frame">开店向导</a></li>
    </ul>
    
        <div id="load-div" style="padding: 5px 10px 0 0; text-align: right; color: #FF9900; display: none;width:40%;float:right;"><img src="<?php echo IMG_URL;?>top_loader.gif" width="16" height="16" alt="正在处理您的请求..." style="vertical-align: middle" /> 正在处理您的请求...</div>
  </div>
</div>
<div id="menu-div">
  <ul>
    <li class="fix-spacel">&nbsp;</li>
    <li><a href="#" target="main-frame">起始页</a></li>
    <li><a href="#" target="main-frame">设置导航栏</a></li>
        <li><a href="#" target="main-frame">商品列表</a></li>
        <li><a href="#" target="main-frame">订单列表</a></li>
        <li><a href="#" target="main-frame">用户评论</a></li>
        <li><a href="#" target="main-frame">会员列表</a></li>
        <li><a href="#" target="main-frame">商店设置</a></li>
        <li class="fix-spacer">&nbsp;</li>
  </ul>
  <br class="clear" />
</div>
</body>
</html>