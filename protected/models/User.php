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

    public $password2;

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
     * @return actions to perform before saving ie: hash password
     */
    public function beforeSave()
    {
        $hash = $this->hashPassword($this->password);
        $this->password = $hash;

        return true;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('email, password, company', 'required'),
            array('email, password, company', 'length', 'max' => 100),
            array('email', 'email'),

            array('password2', 'required', 'on' => 'register'),
            array('password', 'compare', 'compareAttribute' => 'password2', 'on' => 'register'),
            array('email', 'unique'),
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
            'password2'=>'Repeat password',
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
