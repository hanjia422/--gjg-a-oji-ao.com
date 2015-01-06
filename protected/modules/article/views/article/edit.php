<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>高教网 管理中心 - 编辑新资讯 </title>
    <meta content="noindex, nofollow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>general.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_URL; ?>main.css">
    <script type="text/javascript" src="<?php echo UE_URL; ?>ueditor.config.js"></script>
    <script type="text/javascript" src="<?php echo UE_URL; ?>ueditor.all.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo Yii::app()->createUrl('article/Article/index'); ?>">资讯列表</a></span>
    <span class="action-span1"><a href="javascript:">高教网 管理中心</a> </span><span class="action-span1"

    <div style="clear:both"></div>
</h1>
<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span id="general-tab" onclick="javascript:showtongyonginfo(this)" class="tab-front">通用信息</span>
            <span id="detail-tab" onclick="javasctipt:showzixuninfo(this)" class="tab-back">资讯内容</span>
        </p>
    </div>
    <div id="tabbody-div">
        <?php $form = $this->beginWidget("CActiveForm", array('htmlOptions' => array('enctype' => 'multipart/form-data')));?>
        <table width="90%" id="general-table">
            <tbody>
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'title');?></td>
                <td>
                    <?php echo $form->textField($model,'title',array('size'=>40,'maxlength'=>60));?>
                    <span class="require-field">*<?php echo $form->error($model,'title');?></span>
                </td>
            </tr>
            <!--  -->
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'cat_id');?></td>
                <td>
                    <select  name="Article[cat_id]">
                        <?php foreach($catlst as $k=>$v) :$selected=false;$model->cat_id==$v->cat_id ? $selected='selected' : $selected;?>
                            <option <?php echo $selected;?>  value="<?php echo $v->cat_id;?>"><?php echo str_repeat('&nbsp;',$v->level*8).$v->cat_name;?></option>
                        <?php endforeach;?>
                    </select>
                    <span class="require-field">*<?php echo $form->error($model,'cat_id');?></span></td>
            </tr>
            <!--  -->
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'author');?></td>
                <td>
                    <?php echo $form->textField($model,'author');?>
                    <span class="require-field">*<?php echo $form->error($model,'author');?></span></td>
            </tr>
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'author_email');?></td>
                <td>
                    <?php echo $form->textField($model,'author_email');?>
                    <span class="require-field">*<?php echo $form->error($model,'author_email');?></span></td>
            </tr>
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'keywords');?></td>
                <td><?php echo $form->textField($model,'keywords');?>
                    <span class="require-field">*<?php echo $form->error($model,'keywords');?></span>
                </td>
            </tr>
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'link');?></td>
                <td>
                    <?php echo $form->textField($model,'link',array('size'=>40));?>
                    <span class="require-field">*<?php echo $form->error($model,'link');?></span>
                </td>
            </tr>
            <tr>
                <td class="narrow-label"><?php echo $form->label($model,'description');?></td>
                <td>
                    <?php echo $form->textArea($model,'description',array('rows'=>5,'cols'=>40));?>
                    <span class="require-field">*<?php echo $form->error($model,'description');?></span>
                </td>
            </tr>
            </tbody>
        </table>
        <table width="90%" style="display:none" id="detail-table">
            <tbody>
            <tr class="narrow-label">
                <td>
                    <?php echo $form->textArea($model,'content',array('id'=>'content'));?>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="button-div">
            <input type="submit" class="button" value=" 确定 ">
            <input type="reset" class="button" value=" 重置 ">
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<script>

    function showtongyonginfo(t) {
        t.className = "tab-front";
        document.getElementById("detail-tab").className = "tab-back";
        document.getElementById("detail-table").style.display = 'none';
        document.getElementById("general-table").style.display = 'block';
    }

    function showzixuninfo(t) {
        t.className = "tab-front";
        document.getElementById("general-tab").className = "tab-back";
        document.getElementById("general-table").style.display = 'none';
        document.getElementById("detail-table").style.display = 'block';
    }

    (function(){
        UE.getEditor("content");
    }())

</script>
</body>
</html>