<?php

class LogoutAction extends CAction
{
    public function run()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}
