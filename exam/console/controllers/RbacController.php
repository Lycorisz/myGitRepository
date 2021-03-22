<?php
namespace console\controllers;


use Yii;
use yii\console\Controller;

class RbacController extends Controller{
    public function actionInit(){
        $auth = Yii::$app->authManager;

        //添加权限

        $createQues = $auth->createPermission('createQues');
        $createQues->description='新增题目';
        $auth->add($createQues);

        $updateQues =$auth->createPermission('updateQues');
        $updateQues->description = '修改题目';
        $auth->add($updateQues);

        $deleteQues = $auth->createPermission('deleteQues');
        $deleteQues->description='删除题目';
        $auth->add($deleteQues);

        $QuesAdmin = $auth->createRole('QuesAdmin');
        $auth->add($QuesAdmin);
        $auth->addChild($QuesAdmin,$createQues);
        $auth->addChild($QuesAdmin,$updateQues);
        $auth->addChild($QuesAdmin,$deleteQues);

        $QuesOperator=$auth->createRole('QuesOperator');
        $auth->add($QuesOperator);
        $auth->addChild($QuesOperator,$deleteQues);

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->assign($admin,1);
        $auth->assign($QuesAdmin,2);
    }
}
