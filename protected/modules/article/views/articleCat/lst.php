
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ECSHOP 管理中心 - 资讯分类 </title>
    <meta content="noindex, nofollow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>general.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>main.css">

</head>
<body>

<h1>
    <span class="action-span"><a href="<?php echo Yii::app()->createUrl('article/ArticleCat/create');?>">添加资讯分类</a></span>
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span class="action-span1"
                                                                                         id="search_id"> - 资讯分类 </span>

    <div style="clear:both"></div>
</h1>
<form name="listForm" action="" method="post">
<!-- start ad position list -->
<div id="listDiv" class="list-div">

<table cellspacing="1" cellpadding="2" width="100%" id="list-table">
<tbody>
<tr>
    <th>资讯分类名称</th>
    <th>分类类型</th>
    <th>关键字</th>
    <th>描述</th>
    <th>操作</th>
</tr>
<?php foreach($catlst as $k=>$v):?>
<tr align="center" id="0_11" class="0">
    <td align="left" valign="top" class="first-cell nowrap" style="background-color: rgb(255, 255, 255);">
        <img border="0" width="9" height="9" onclick="rowClicked(this)" style="margin-left:0em" id="icon_0_11"
             src="<?php echo IMG_URL; ?>menu_minus.gif">
        <span><a href="javascript:"><?php echo str_repeat('&nbsp;',$v->level*8).$v['cat_name'];?></a></span>
    </td>
    <td valign="top" class="nowrap" style="background-color: rgb(255, 255, 255);">
        <?php echo $v['cat_type']==1 ? '普通分类' : '系统分类';?>
    </td>
    <td align="align" valign="top" style="background-color: rgb(255, 255, 255);">
        <?php echo $v['keywords'];?>
    </td>
    <td align="align" width="10%" valign="top" class="nowrap" style="background-color: rgb(255, 255, 255);">
      <?php echo $v['cat_desc'];?>
    </td>
    <td align="align" width="24%" valign="top" class="nowrap" style="background-color: rgb(255, 255, 255);">
        <a href="<?php echo Yii::app()->createUrl('article/ArticleCat/update',array('id'=>$v['cat_id']));?>">编辑</a>
        |
        <a title="移除" onclick="return confirm('你确定要删除这条记录吗?')" href="<?php echo Yii::app()->createUrl('article/ArticleCat/delete',array('id'=>$v->cat_id))?>">移除</a>
    </td>
</tr>
<?php endforeach;?>
</tbody>
</table>

</div>
</form>


</body>
</html>