<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $_id;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $userFromDB = Admin::model()->find('username=?', array(strtolower($this->username)));

        if (!isset($this->username) || null === $userFromDB) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif (!isset($this->password) || null === $userFromDB) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } elseif ($userFromDB->password === md5($this->password)) {
            $this->username = $userFromDB->username;
            $this->_id = $userFromDB->id;

            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    //必须返回id，不能返回usrName

//		$users=array(
//			// username => password
//			'demo'=>'demo',
//			'admin'=>'admin',
//		);
//		if(!isset($users[$this->username]))
//			$this->errorCode=self::ERROR_USERNAME_INVALID;
//		elseif($users[$this->username]!==$this->password)
//			$this->errorCode=self::ERROR_PASSWORD_INVALID;
//		else
//			$this->errorCode=self::ERROR_NONE;
//		return !$this->errorCode;
    public function getId()
    {
        return $this->_id;
    }
}