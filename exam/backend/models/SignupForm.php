<?php
namespace backend\models;

use yii\base\Model;
use common\models\Adminuser;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $admin_username;
    public $admin_email;
    public $admin_password;
    public $admin_password_repeat;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['admin_username', 'trim'],
            ['admin_username', 'required'],
            ['admin_username', 'unique', 'targetClass' => '\common\models\Adminuser', 'message' => 'This username has already been taken.'],
            ['admin_username', 'string', 'min' => 2, 'max' => 255],

            ['admin_email', 'trim'],
            ['admin_email', 'required'],
            ['admin_email', 'email'],
            ['admin_email', 'string', 'max' => 255],
            ['admin_email', 'unique', 'targetClass' => '\common\models\Adminuser', 'message' => 'This email address has already been taken.'],

            ['admin_password', 'required'],
            ['admin_password', 'string', 'min' => 6],

            ['admin_password_repeat', 'compare', 'compareAttribute'=>'admin_password', 'message' => '两次输入的密码不一致'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Adminuser();
        $user->admin_username = $this->admin_username;
        $user->admin_email = $this->admin_email;
        $user->setPassword($this->admin_password);
        $user->generateAuthKey();
        $user->admin_password='*';
        return $user->save() ? $user : null;
    }
}
