<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo CSS_URL;?>general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_URL;?>main.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h1>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"></span>
<div style="clear:both"></div>
</h1>
<!-- directory install start -->
<ul id="cloud_list" style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
</ul>
<ul id="lilist" style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
    <li class="Start315">您还没有删除 install 文件夹，出于安全的考虑，我们建议您删除 install 文件夹。</li>
    <li class="Start315">您还没有删除 demo 文件夹，出于安全的考虑，我们建议您删除 demo 文件夹。</li>
  </ul>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
 <!-- <script type="text/javascript" src="http://bbs.ecshop.com/notice.php?v=1&n=8&f=ul"></script>-->
</ul>
<!-- directory install end -->
<!-- start personal message -->
<!-- end personal message -->
<!-- start order statistics -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">订单统计信息</th>
  </tr>
  <tr>
    <td width="20%"><a href="order.php?act=list&composite_status=101">待发货订单:</a></td>
    <td width="30%"><strong style="color: red">0</strong></td>
    <td width="20%"><a href="order.php?act=list&composite_status=0">未确认订单:</a></td>
    <td width="30%"><strong>0</strong></td>
  </tr>
  <tr>
    <td><a href="order.php?act=list&composite_status=100">待支付订单:</a></td>
    <td><strong>0</strong></td>
    <td><a href="order.php?act=list&composite_status=102">已成交订单数:</a></td>
    <td><strong>0</strong></td>
  </tr>
  <tr>
    <td><a href="goods_booking.php?act=list_all">新缺货登记:</a></td>
    <td><strong>0</strong></td>
    <td><a href="user_account.php?act=list&process_type=1&is_paid=0">退款申请:</a></td>
    <td><strong>0</strong></td>
  </tr>
  <tr>
    <td><a href="order.php?act=list&composite_status=6">部分发货订单:</a></td>
    <td><strong>0</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
<!-- end order statistics -->
<br />
<!-- start goods statistics -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">实体商品统计信息</th>
  </tr>
  <tr>
    <td width="20%">商品总数:</td>
    <td width="30%"><strong>0</strong></td>
    <td width="20%"><a href="goods.php?act=list&stock_warning=1">库存警告商品数:</a></td>
    <td width="30%"><strong style="color: red">0</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_new">新品推荐数:</a></td>
    <td><strong>0</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_best">精品推荐数:</a></td>
    <td><strong>0</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_hot">热销商品数:</a></td>
    <td><strong>0</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_promote">促销商品数:</a></td>
    <td><strong>0</strong></td>
  </tr>
</table>
</div>
<br />
<!-- Virtual Card -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">虚拟卡商品统计</th>
  </tr>
  <tr>
    <td width="20%">商品总数:</td>
    <td width="30%"><strong>0</strong></td>
    <td width="20%"><a href="goods.php?act=list&amp;stock_warning=1&amp;extension_code=virtual_card">库存警告商品数:</a></td>
    <td width="30%"><strong style="color: red">0</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_new&amp;extension_code=virtual_card">新品推荐数:</a></td>
    <td><strong>0</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_best&amp;extension_code=virtual_card">精品推荐数:</a></td>
    <td><strong>0</strong></td>
  </tr>
  <tr>
    <td><a href="goods.php?act=list&amp;intro_type=is_hot&amp;extension_code=virtual_card">热销商品数:</a></td>
    <td><strong>0</strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_promote&amp;extension_code=virtual_card">促销商品数:</a></td>
    <td><strong>0</strong></td>
  </tr>
</table>
</div>
<!-- end order statistics -->
<br />
<!-- start access statistics -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">访问统计</th>
  </tr>
  <tr>
    <td width="20%">今日访问:</td>
    <td width="30%"><strong>1</strong></td>
    <td width="20%">在线人数:</td>
    <td width="30%"><strong>2</strong></td>
  </tr>
  <tr>
    <td><a href="user_msg.php?act=list_all">最新留言:</a></td>
    <td><strong>0</strong></td>
    <td><a href="comment_manage.php?act=list">未审核评论:</a></td>
    <td><strong>0</strong></td>
  </tr>
</table>
</div>
<!-- end access statistics -->
<br />
<!-- start system information -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">系统信息</th>
  </tr>
  <tr>
    <td width="20%">服务器操作系统:</td>
    <td width="30%">WINNT (::1)</td>
    <td width="20%">Web 服务器:</td>
    <td width="30%">Apache/2.4.10 (Win32) OpenSSL/1.0.1h PHP/5.4.31</td>
  </tr>
  <tr>
    <td>PHP 版本:</td>
    <td>5.4.31</td>
    <td>MySQL 版本:</td>
    <td>5.5.39</td>
  </tr>
  <tr>
    <td>安全模式:</td>
    <td>否</td>
    <td>安全模式GID:</td>
    <td>否</td>
  </tr>
  <tr>
    <td>Socket 支持:</td>
    <td>是</td>
    <td>时区设置:</td>
    <td>PRC</td>
  </tr>
  <tr>
    <td>GD 版本:</td>
    <td>GD2 ( JPEG GIF PNG)</td>
    <td>Zlib 支持:</td>
    <td>是</td>
  </tr>
  <tr>
    <td>IP 库版本:</td>
    <td>20071024</td>
    <td>文件上传的最大大小:</td>
    <td>2M</td>
  </tr>
  <tr>
    <td>ECShop 版本:</td>
    <td>v2.7.3 RELEASE 20120411</td>
    <td>安装日期:</td>
    <td>2014-12-12</td>
  </tr>
  <tr>
    <td>编码:</td>
    <td>UTF-8</td>
    <td></td>
    <td></td>
  </tr>
</table>
</div>
</body>
</html>