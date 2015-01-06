<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>高教网 Menu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="<?php echo CSS_URL; ?>general.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body {
            background: #276d95;
        }

        #tabbar-div {
            background: #bad6e6;
            padding-left: 10px;
            height: 21px;
            padding-top: 0px;
        }

        #tabbar-div p {
            margin: 1px 0 0 0;
        }

        .tab-front {
            background: #bad6e6;
            line-height: 20px;
            font-weight: bold;
            padding-left: 50px;
            cursor: hand;
            cursor: pointer;
        }

        .tab-back {
            color: #F4FAFB;
            line-height: 20px;
            padding: 4px 15px 4px 18px;
            cursor: hand;
            cursor: pointer;
        }

        .tab-hover {
            color: #F4FAFB;
            line-height: 20px;
            padding: 4px 15px 4px 18px;
            cursor: hand;
            cursor: pointer;
            background: #2F9DB5;
        }

        #top-div {
            padding: 3px 0 2px;
            background: #BBDDE5;
            margin: 5px;
            text-align: center;
        }

        #main-div {
            border: 1px solid #276d95;
            padding: 5px;
            margin: 5px;
            /**background: #FFF;**/
        }

        #menu-list {
            padding: 0;
            margin: 0;
        }

        #menu-list ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
            color: #fff;
        }

        #menu-list li {
            padding-left: 16px;
            line-height: 26px;
            cursor: hand;
            cursor: pointer;
        }

        #menu-list li li {
            padding-left: 10px;
        }

        #main-div a:visited, #menu-list a:link {
            color: #fff;
            text-decoration: none;
        }

        #menu-list a:active {
            color: #EB8A3D;
        }

        #menu-list a:hover {
            color: #fff;
            font-weight: bold;
        }

        .explode {
            background: url(<?php echo CSS_URL;?>gjw_minus.png) no-repeat 0px 8px;
            font-weight: bold;
        }

        .collapse {
            background: url(<?php echo CSS_URL;?>gjw_plus.png) no-repeat 0px 8px;
            font-weight: bold;
        }

        .menu-item {
            font-weight: normal;
        }

        #help-title {
            font-size: 14px;
            color: #000080;
            margin: 5px 0;
            padding: 0px;
        }

        #help-content {
            margin: 0;
            padding: 0;
        }

        .tips {
            color: #CC0000;
        }

        .link {
            color: #000099;
        }
    </style>

</head>
<body>
<div id="tabbar-div">
    <p><span style="float:right; padding: 3px 5px;"><a href="javascript:toggleCollapse();"><img id="toggleImg"
                                                                                                src="<?php echo IMG_URL; ?>menu_minus.gif"
                                                                                                width="9" height="9"
                                                                                                border="0"
                                                                                                alt="闭合"/></a></span>
        <span class="tab-front" id="menu-tab">菜单</span>
    </p>
</div>
<div id="main-div">
    <div id="menu-list">

      <?php
      $this->widget('zii.widgets.CMenu',array(
          'activateParents'=>true,
          'htmlOptions'=>array('id'=>'menu-ul'),
          'items'=>array(
              array('label'=>'会员管理', 'items'=>array(
                  array('label'=>'会员列表', 'url'=>array('/user/User/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('User.User.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
                  array('label'=>'添加会员', 'url'=>array('/user/User/Create'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('User.User.Create', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
                  array('label'=>'讲师认证', 'url'=>array('/user/GCourceTeacher/authentication'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('User.GCourceTeacher.Authentication', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
                  array('label'=>'讲师列表', 'url'=>array('/user/GCourceTeacher/index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('User.GCourceTeacher.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('User.User.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'02_cat_and_goods','name'=>'menu')),
              array('label'=>'专辑管理', 'items'=>array(
                  array('label'=>'专辑列表', 'url'=>array('/album/ZyAlbum/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Album.ZyAlbum.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
                  array('label'=>'创建专辑', 'url'=>array('/album/ZyAlbum/Create'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Album.ZyAlbum.Create', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Album.ZyAlbum.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'订单管理', 'items'=>array(
                  array('label'=>'订单列表', 'url'=>array('/order/ZyOrder/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'试题管理', 'items'=>array(
                  array('label'=>'试题列表', 'url'=>array('/order/ZyOrder/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'财务管理', 'items'=>array(
                  array('label'=>'财务列表', 'url'=>array('/order/ZyOrder/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'包库管理', 'items'=>array(
                  array('label'=>'包库列表', 'url'=>array('/order/ZyOrder/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'消息管理', 'items'=>array(
                  array('label'=>'消息列表', 'url'=>array('/order/ZyOrder/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'系统管理', 'items'=>array(
                  array('label'=>'网站设置', 'url'=>array('/order/ZyOrder/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Order.ZyOrder.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              array('label'=>'资讯管理', 'items'=>array(
                  array('label'=>'资讯分类', 'url'=>array('/article/ArticleCat/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Article.ArticleCat.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
                  array('label'=>'文章列表', 'url'=>array('/article/Article/Index'), 'linkOptions'=>array('target'=>'main-frame'),'visible'=>Yii::app()->authManager->checkAccess('Article.Article.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'menu-item') ),
              ),'visible'=>Yii::app()->authManager->checkAccess('Article.Article.Index', Yii::app()->user->id),'itemOptions'=>array('class'=>'explode','key'=>'03_cat_and_goods','name'=>'menu')),
              
          ),
      ));

      ?>

    </div>
    <div id="help-div" style="display:none">
        <h1 id="help-title"></h1>

        <div id="help-content"></div>
    </div>
</div>
</body>
</html>