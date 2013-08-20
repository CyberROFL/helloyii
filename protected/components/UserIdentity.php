<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $user = User::model()->find('LOWER(email)=?', array(strtolower($this->username)));

        if (null === $user)
        {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        }
        else if (!$user->validatePassword($this->password))
        {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        else
        {
            $this->_id = $user->id;
            $this->email = $user->email;
            $this->errorCode = self::ERROR_NONE;
        }

        return self::ERROR_NONE == $this->errorCode;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId()
    {
        return $this->_id;
    }
}
