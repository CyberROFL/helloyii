<?php

class LoginAction extends CAction
{
    public function run()
    {
        if (!Yii::app()->user->isGuest)
        {
            $this->controller->redirect(Yii::app()->homeUrl);
        }
        else
        {
            $model = new LoginForm;

            if (isset($_POST['LoginForm']))
            {
                $model->attributes = $_POST['LoginForm'];

                if ($model->validate() && $model->login())
                {
                    $this->controller->redirect(Yii::app()->homeUrl);
                }
            }

            $this->controller->render('login', array('model' => $model));
        }
    }
}
