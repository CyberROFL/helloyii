<?php

class GetCompaniesAction extends CAction
{
    public function run()
    {
        $query = $_POST['query'];

        $companies = Yii::app()->db->createCommand()
                         ->selectDistinct('company')
                         ->from('helloyii_accounts')
                         ->where(array('like', 'company', '%'.$query.'%'))
                         ->queryAll();

        $response['query'] = $query;
        $response['suggestions'] = array();

        foreach ($companies as $company)
        {
            $response['suggestions'][] = $company['company'];
        }

        echo CJSON::encode($response);
    }
}
