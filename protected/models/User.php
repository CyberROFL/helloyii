<?php

class User extends CActiveRecord
{
    /**
     * The followings are the available columns in table 'prefix_accounts':
     * @var integer $id
     * @var string $email
     * @var string $password
     * @var string $company
     */

    public $passwd2;

    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{accounts}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('email, password', 'required'),
            array('email, password', 'length', 'max' => 100),
            array('email', 'email'),
            array('password', 'compare', 'compareAttribute'=>'password2', 'on'=>'register'),
            array('company', 'safe'),
        );
    }

    /**
     * @return array customized attribute labels (name => label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'email' => 'E-mail',
            'password' => 'Password',
            'company' => 'Company',
        );
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password)
    {
        return CPasswordHelper::verifyPassword($password, $this->password);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public function hashPassword($password)
    {
        return CPasswordHelper::hashPassword($password);
    }
}
