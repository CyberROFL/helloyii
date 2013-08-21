<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" media="screen, projection" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.autocomplete.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="wrap">
            <div id="page">
                <div id="header">
                    <div id="in-header" class="content center">
                        <?php echo CHtml::encode($this->pageTitle); ?>
                    </div>
                </div>
                <div id="in-page" class="content center">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
        <div id="footer">
            <div id="in-footer" class="content center">
                <div id="copyright">&copy; &laquo;helloyii&raquo;, 2013</div>
            </div>
        </div>
    </body>
</html>
