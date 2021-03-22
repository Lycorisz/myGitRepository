<?php
namespace backend\models;

use yii\base\Model;
use common\models\Adminuser;
use yii\helpers\VarDumper;

/**
 * Signup form
 */
class ResetpsdForm extends Model
{

    public $admin_password;
    public $admin_password_repeat;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [


            ['admin_password', 'required'],
            ['admin_password', 'string', 'min' => 6],

            ['admin_password_repeat', 'compare', 'compareAttribute'=>'admin_password', 'message' => '两次输入的密码不一致'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'admin_username' => '用户名',
            'admin_password' => '密码',
            'admin_password_repeat'=>'重复密码',
            'admin_email' => 'Email',
        ];
    }


    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function resetPassword($id)
    {
        if (!$this->validate()) {
            return null;
        }
        
        $admuser = Adminuser::findOne($id);

        $admuser->setPassword($this->admin_password);
        $admuser->removePasswordResetToken();
        return $admuser->save() ? true : false;
    }
}
