<?php

class LoginAction extends CAction
{
    public function run()
    {
        $model = new LoginForm;

        if (isset($_POST['LoginForm']))
        {
            $model->attributes = $_POST['LoginForm'];

            if ($model->validate() && $model->login())
            {
                $this->redirect(Yii::app()->createUrl('main/main'));
            }
        }

        $this->controller->render('login', array('model' => $model));
    }
}
