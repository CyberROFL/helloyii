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
}
