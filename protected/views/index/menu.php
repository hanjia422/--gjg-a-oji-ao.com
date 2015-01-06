<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>高教网 Menu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="<?php echo CSS_URL; ?>general.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript">
        <!--
        var noHelp = "<p align='center' style='color: #666'>暂时还没有该部分内容</p>";
        var helpLang = "zh_cn";
        //-->
    </script>

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
<script type="text/javascript" src="<?php echo JS_URL; ?>global.js"></script>
<script type="text/javascript" src="<?php echo JS_URL; ?>utils.js"></script>
<script type="text/javascript" src="<?php echo JS_URL; ?>transport.js"></script>
<script language="JavaScript">
<!--
var collapse_all = "闭合";
var expand_all = "展开";
var collapse = true;

function toggleCollapse() {
    var items = document.getElementsByTagName('LI');
    for (i = 0; i < items.length; i++) {
        if (collapse) {
            if (items[i].className == "explode") {
                toggleCollapseExpand(items[i], "collapse");
            }
        }
        else {
            if (items[i].className == "collapse") {
                toggleCollapseExpand(items[i], "explode");
                ToggleHanlder.Reset();
            }
        }
    }

    collapse = !collapse;
    document.getElementById('toggleImg').src = collapse ? '<?php echo IMG_URL;?>menu_minus.gif' : '<?php echo IMG_URL;?>menu_plus.gif';
    document.getElementById('toggleImg').alt = collapse ? collapse_all : expand_all;
}

function toggleCollapseExpand(obj, status) {
    if (obj.tagName.toLowerCase() == 'li' && obj.className != 'menu-item') {
        for (i = 0; i < obj.childNodes.length; i++) {
            if (obj.childNodes[i].tagName == "UL") {
                if (status == null) {
                    if (obj.childNodes[1].style.display != "none") {
                        obj.childNodes[1].style.display = "none";
                        ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
                        obj.className = "collapse";
                    }
                    else {
                        obj.childNodes[1].style.display = "block";
                        ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
                        obj.className = "explode";
                    }
                    break;
                }
                else {
                    if (status == "collapse") {
                        ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
                        obj.className = "collapse";
                    }
                    else {
                        ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
                        obj.className = "explode";
                    }
                    obj.childNodes[1].style.display = (status == "explode") ? "block" : "none";
                }
            }
        }
    }
}
document.getElementById('menu-list').onclick = function (e) {
    var obj = Utils.srcElement(e);
    toggleCollapseExpand(obj);
}

document.getElementById('tabbar-div').onmouseover = function (e) {
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-back") {
        obj.className = "tab-hover";
    }
}

document.getElementById('tabbar-div').onmouseout = function (e) {
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-hover") {
        obj.className = "tab-back";
    }
}

document.getElementById('tabbar-div').onclick = function (e) {
    var obj = Utils.srcElement(e);

    // var mnuTab = document.getElementById('menu-tab');
    var hlpTab = document.getElementById('help-tab');
    var mnuDiv = document.getElementById('menu-list');
    var hlpDiv = document.getElementById('help-div');

    //if (obj.id == 'menu-tab')
//  {
//    mnuTab.className = 'tab-front';
//    hlpTab.className = 'tab-back';
//    mnuDiv.style.display = "block";
//    hlpDiv.style.display = "none";
//  }

    if (obj.id == 'help-tab') {
        mnuTab.className = 'tab-back';
        hlpTab.className = 'tab-front';
        mnuDiv.style.display = "none";
        hlpDiv.style.display = "block";

        loc = parent.frames['main-frame'].location.href;
        pos1 = loc.lastIndexOf("/");
        pos2 = loc.lastIndexOf("?");
        pos3 = loc.indexOf("act=");
        pos4 = loc.indexOf("&", pos3);

        filename = loc.substring(pos1 + 1, pos2 - 4);
        act = pos4 < 0 ? loc.substring(pos3 + 4) : loc.substring(pos3 + 4, pos4);
        loadHelp(filename, act);
    }
}

/**
 * 创建XML对象
 */
function createDocument() {
    var xmlDoc;

    // create a DOM object
    if (window.ActiveXObject) {
        try {
            xmlDoc = new ActiveXObject("Msxml2.DOMDocument.6.0");
        }
        catch (e) {
            try {
                xmlDoc = new ActiveXObject("Msxml2.DOMDocument.5.0");
            }
            catch (e) {
                try {
                    xmlDoc = new ActiveXObject("Msxml2.DOMDocument.4.0");
                }
                catch (e) {
                    try {
                        xmlDoc = new ActiveXObject("Msxml2.DOMDocument.3.0");
                    }
                    catch (e) {
                        alert(e.message);
                    }
                }
            }
        }
    }
    else {
        if (document.implementation && document.implementation.createDocument) {
            xmlDoc = document.implementation.createDocument("", "doc", null);
        }
        else {
            alert("Create XML object is failed.");
        }
    }
    xmlDoc.async = false;

    return xmlDoc;
}

//菜单展合状态处理器
var ToggleHanlder = new Object();

Object.extend(ToggleHanlder, {
    SourceObject: new Object(),
    CookieName: 'Toggle_State',
    RecordState: function (name, state) {
        if (state == "collapse") {
            this.SourceObject[name] = state;
        }
        else {
            if (this.SourceObject[name]) {
                delete(this.SourceObject[name]);
            }
        }
        var date = new Date();
        date.setTime(date.getTime() + 99999999);
        document.setCookie(this.CookieName, this.SourceObject.toJSONString(), date.toGMTString());
    },

    Reset: function () {
        var date = new Date();
        date.setTime(date.getTime() + 99999999);
        document.setCookie(this.CookieName, "{}", date.toGMTString());
    },

    Load: function () {
        if (document.getCookie(this.CookieName) != null) {
            this.SourceObject = eval("(" + document.getCookie(this.CookieName) + ")");
            var items = document.getElementsByTagName('LI');
            for (var i = 0; i < items.length; i++) {
                if (items[0].getAttribute("name") == "menu" && items[0].getAttribute("id") != '20_yun') {
                    for (var k in this.SourceObject) {
                        if (typeof(items[i]) == "object") {
                            if (items[i].getAttribute('key') == k) {
                                toggleCollapseExpand(items[i], this.SourceObject[k]);
                                collapse = false;
                            }
                        }
                    }
                }
            }
        }
        document.getElementById('toggleImg').src = collapse ? '<?php echo IMG_URL;?>menu_minus.gif' : '<?php echo IMG_URL;?>menu_plus.gif';
        document.getElementById('toggleImg').alt = collapse ? collapse_all : expand_all;
    }
});

ToggleHanlder.CookieName += "_1";
//初始化菜单状态
ToggleHanlder.Load();
/*
 Ajax.call('cloud.php?is_ajax=1&act=menu_api','', start_menu_api, 'GET', 'JSON');
 function start_menu_api(result)
 {
 if(result.content==0)
 {
 }
 else
 {
 document.getElementById("menu-ul").innerHTML = document.getElementById("menu-ul").innerHTML + result.content;
 }
 }*/
//-->
</script>

</body>
</html>