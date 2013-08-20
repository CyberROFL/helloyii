<?php

class MainAction extends CAction
{
    public function run()
    {
        if (Yii::app()->user->isGuest)
        {
            $this->controller->redirect(Yii::app()->createUrl('user/login'));
        }
        else
        {
            echo 'main';
        }
    }
}
