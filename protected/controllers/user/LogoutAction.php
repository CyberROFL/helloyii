<?php

class LogoutAction extends CAction
{
    public function run()
    {
        Yii::app()->user->logout();
        $this->controller->redirect(Yii::app()->createUrl('user/login'));
    }
}
