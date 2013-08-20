<?php

class IndexAction extends CAction
{
    public function run()
    {
        if (Yii::app()->user->isGuest)
        {
            $this->controller->redirect(Yii::app()->createUrl('user/login'));
        }
        else
        {
            $this->controller->redirect(Yii::app()->createUrl('main/main'));
        }
    }
}
