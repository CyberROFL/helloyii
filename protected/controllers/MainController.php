<?php

class MainController extends CController
{
    public function actions()
    {
        return array (
            'index' => 'application.controllers.main.IndexAction',
            'main' => 'application.controllers.main.MainAction',
            'get_companies' => 'application.controllers.main.GetCompaniesAction',
        );
    }

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to access 'index' and 'view' actions.
                'actions' => array('index', 'get_companies'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated users to access all actions
                'users' => array('@'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }
}
