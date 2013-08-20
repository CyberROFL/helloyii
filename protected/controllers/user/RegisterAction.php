<?php

class RegisterAction extends CAction
{
    public function run()
    {
        if (!Yii::app()->user->isGuest)
        {
            $this->controller->redirect(Yii::app()->homeUrl);
        }
        else
        {
            $user = new User('register');

            if (isset($_POST['User']))
            {
                $user->attributes = $_POST['User'];

                if ($user->validate() && $user->save())
                {
                    $this->controller->redirect(Yii::app()->createUrl('user/login'));
                }
            }

            $this->controller->render('register', array('model' => $user));
        }
    }
}
