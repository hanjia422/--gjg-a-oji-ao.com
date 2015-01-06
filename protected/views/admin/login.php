<html>
<head>
    <meta charset="UTF-8">
    <title>系统后台 - 高教网</title>
    <meta content="noindex,nofollow" name="robots">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>login.css">
    <script>
        if (window.parent !== window.self) {
            document.write = '';
            window.parent.location.href = window.self.location.href;
            setTimeout(function () {
                document.body.innerHTML = '';
            }, 0);
        }
    </script>
</head>
<body>
<div class="wrap">
    <h1><a href="#">高教网 后台管理中心</a></h1>

    <?php $form = $this->beginWidget('CActiveForm',
        array(
            'id' => 'login-form',
            'htmlOptions'=>array('autocomplete'=>'off'),

        )
    );?>
        <div class="login">
            <ul>
                <li class="user">

                    <?php echo $form->textField($model,'username',array('title'=>'帐号','required id'=>'J_admin_name','class'=>'input')) ;?>
                </li>
                <li class="pass">

                    <?php echo $form->passwordField($model,'password',array('title'=>'密码','required id'=>'admin_pwd','class'=>'input'));?>
                </li>
            </ul>
            <button class="btn" name="submit" type="submit">登录</button>
        </div>
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>" name="YII_CSRF_TOKEN"/>
        <?php $this->endWidget();?>
</div>

</body>
</html>