<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ECSHOP 管理中心 - 添加资讯分类 </title>
    <meta content="noindex, nofollow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>general.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL;?>main.css">
    </head>
<body>

<h1>
    <span class="action-span"><a href="<?php echo Yii::app()->createUrl('article/ArticleCat/index');?>">返回列表</a></span>
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span class="action-span1"
                                                                                         id="search_id"> - 添加资讯分类 </span>

    <div style="clear:both"></div>
</h1>
<div class="main-div">
        <?php $form=$this->beginWidget("CActiveForm",array(
            'enableClientValidation'=>true,
            'enableAjaxValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        ));?>
        <table cellspacing="1" cellpadding="3" width="100%">
            <tbody>
            <tr>
                <td class="label"><?php echo $form->label($model,'cat_name');?></td>
                <td><?php echo $form->textField($model,'cat_name',array('size'=>30,'maxlength'=>60));?>
                    <span class="require-field">*<?php echo $form->error($model,'cat_name');?></span>
                </td>
            </tr>
            <tr>
                <td class="label"><?php echo $form->label($model,'parent_id');?></td>
                <td>
                    <select name="ArticleCat[parent_id]">
                        <option value="0">顶级分类</option>
                        <?php foreach(Yii::app()->memcache->get('catlst') as $k=>$v):$disabled=false;$v['level']>0 ? $disabled='disabled' : $disabled;?>
                        <option <?php echo $disabled;?>  value="<?php echo $v['cat_id'];?>"><?php echo str_repeat('&nbsp;',$v->level*8).$v['cat_name'];?></option>
                        <?php endforeach;?>
                    </select>
                    <span class="require-field">*<?php echo $form->error($model,'parent_id');?></span>
                </td>
            </tr>
            <tr>
                <td class="label"><?php echo $form->label($model,'keywords') ;?></td>
                <td>
                    <?php echo $form->textField($model,'keywords',array('size'=>15));?>
                    <span class="require-field">*<?php echo $form->error($model,'keywords');?></span>
                </td>
            </tr>
            <tr>
                <td class="label"><?php echo $form->label($model,'cat_desc');?></td>
                <td>
                <?php echo $form->textArea($model,'cat_desc',array('rows'=>4,'cols'=>60));?>
                 <span class="require-field">*<?php echo $form->error($model,'cat_desc');?></span>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2"><br>
                    <input type="submit" value=" 确定 " class="button">
                    <input type="reset" value=" 重置 " class="button">
                </td>
            </tr>
            </tbody>
        </table>
    <?php $this->endWidget(); ?>
</div>
</body>
</html>