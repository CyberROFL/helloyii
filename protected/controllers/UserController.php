<?php

class UserController extends CController
{
    public function actions()
    {
        return array (
            'register' => 'application.controllers.user.RegisterAction',
            'login' => 'application.controllers.user.LoginAction',
        );
    }
}
