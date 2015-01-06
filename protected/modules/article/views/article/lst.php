<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>高教网 管理中心 - 资讯列表 </title>
    <meta content="noindex, nofollow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>general.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>main.css">
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo Yii::app()->createUrl('article/Article/create'); ?>">添加新资讯</a></span>
    <span class="action-span1"><a href="index.php?act=main">高教网 管理中心</a> </span><span class="action-span1"
                                                                                      id="search_id"> - 资讯列表 </span>

    <div style="clear:both"></div>
</h1>
<div class="form-div">
    <form name="searchForm" action="javascript:searchArticle()">
        <img border="0" width="26" height="22" alt="SEARCH" src="<?php echo IMG_URL; ?>icon_search.gif">
        <select name="cat_id">
            <option value="0">全部分类</option>
            <option cat_type="1" value="11">手机促销</option>
        </select>
        资讯标题 <input type="text" id="keyword" name="keyword">
        <input type="submit" class="button" value=" 搜索 ">
    </form>
</div>

<form name="listForm" action="article.php?act=batch_remove" method="POST">
    <!-- start cat list -->
    <div id="listDiv" class="list-div">
        &nbsp;
        <table cellspacing="1" cellpadding="3" id="list-table">
            <tbody>
            <tr>
                <th><a href="javascript:">资讯标题</a></th>
                <th><a href="javascript:">资讯分类</a></th>
                <th><a href="javascript:">资讯作者</a></th>
                <th><a href="javascript:">作者email</a></th>
                <th><a href="javascript:">添加日期</a></th>
                <th>操作</th>
            </tr>
            <?php foreach ($articleinfo as $k => $v) : ?>
                <tr>
                    <td class="first-cell">
                        <span><?php echo $v->title; ?></span></td>

                    <td align="left"><span><?php echo $v->cat_name; ?></span></td>

                    <td align="center"><span><?php echo $v->author; ?></span></td>

                    <td align="center"><span><?php echo $v->author_email; ?></span></td>

                    <td align="center"><span><?php echo date("Y-m-d H:i:s", $v->c_time); ?></span></td>

                    <td align="center" nowrap="true">
                        <span>
      <a title="编辑" href="<?php echo Yii::app()->createUrl('article/Article/update',array('id'=>$v->article_id));?>"><img border="0" width="16" height="16" src="<?php echo IMG_URL; ?>icon_edit.gif"></a>&nbsp;
     <a title="移除" onclick="return confirm('你确定要删除这条资讯吗?')" href="<?php echo Yii::app()->createUrl('article/Article/delete',array('id'=>$v->article_id));?>">
          <img border="0" width="16" height="16" src="<?php echo IMG_URL; ?>icon_drop.gif"></a>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td align="right" nowrap="true" colspan="8">
                    <div id="turn-page">
                       <?php echo $pagelist;?>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</form>
    <script>
        (function(){
            var trobj=document.getElementsByTagName("tr");
            console.log(trobj)
        }())
    </script>
</body>
</html>