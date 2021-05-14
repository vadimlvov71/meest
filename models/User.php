<?php

namespace app\models;
use Yii;
use PDO;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
	
	const ROLE_USER = 1;
	const ROLE_ADMIN = 2;
	/*
	public static function roles(){
		return [
			self::ROLE_USER => Yii::t('app', 'User'),
			self::ROLE_ADMIN => Yii::t('app', 'Admin'),
		];
	}
	*/
	public static function tableName() { 
		return 'user'; 
	}
	public function isAdministrator(){
		return ($this->role == self::ROLE_ADMIN);
	}

	public function isClient(){
		return ($this->role == self::ROLE_MANAGER);
	}

     /**
     * @inheritdoc
     */
     public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }
     
	public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
	public function getAuthKey()
    {
        return $this->auth_key;
    }
 
	   /**
	 * @inheritdoc
	 */
	public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }
 
	public function getId() {
		return $this->id;
        //return $this->email;
        //return $this->username;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['access_token' => $token]);
    }
	public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    
	public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
 
    
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
   
}
