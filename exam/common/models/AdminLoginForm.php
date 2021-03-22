<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class AdminLoginForm extends Model
{
    public $admin_username;
    public $admin_password;
    public $rememberMe = true;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['admin_username', 'admin_password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['admin_password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'admin_username'=>'用户名',
          'admin_password'=>'密码',
          'rememberMe'=>'记住密码',
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->admin_password)) {
                $this->addError($attribute, '请输入正确的用户名和密码');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = Adminuser::findByUsername($this->admin_username);
        }

        return $this->_user;
    }
}