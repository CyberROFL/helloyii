<?php

class MainAction extends CAction
{
    public function run()
    {
        $users = User::model()->findAll();

        $this->controller->render('main', array('users' => $users));
    }
}
