<?php

/**
 * LoginForm is the data structure for keeping user login form data.
 * It is used by the 'login' action of 'UserController'.
 */
class LoginForm extends CFormModel
{
    public $email;
    public $password;
    public $rememberMe;

    private $_identity;

    /**
     * @return array validation rules for user attributes.
     */
    public function rules()
    {
        return array(
            array('email, password', 'required'),
            array('email', 'email'),
            array('password', 'authenticate'),
            array('rememberMe', 'boolean'),
        );
    }

    /**
     * Declares attribute labels.
     * @return array customized attribute labels (name => label)
     */
    public function attributeLabels()
    {
        return array(
            'rememberMe'=>'Remember me',
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params)
    {
        $this->_identity = new UserIdentity($this->email, $this->password);

        if (!$this->_identity->authenticate())
        {
            $this->addError('password', 'Incorrect email or password.');
        }
    }

    /**
     * Logs in the user using the given email and password in the model.
     * @return boolean whether login is successful
     */
    public function login()
    {
        if (null === $this->_identity)
        {
            $this->_identity = new UserIdentity($this->email, $this->password);
            $this->_identity->authenticate();
        }
        if (UserIdentity::ERROR_NONE === $this->_identity->errorCode)
        {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);

            return true;
        }
        else
        {
            return false;
        }
    }
}
