<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        //添加creatPost权限

        $createPost =$auth->createPermission('createPost');
        $createPost->description = '新增文章';
        $auth->add($createPost);

        $updatePost =$auth->createPermission('updatePost');
        $updatePost->description = '修改文章';
        $auth->add($updatePost);

        $deletePost = $auth->createPermission('deletePost');
        $deletePost->description='删除文章';
        $auth->add($deletePost);

        $approveComment = $auth->createPermission('approveComment');
        $approveComment->description='评论审核';
        $auth->add($approveComment);

        $postAdmin = $auth->createRole('postAdmin');
        $auth->add($postAdmin);
        $auth->addChild($postAdmin,$createPost);
        $auth->addChild($postAdmin,$updatePost);
        $auth->addChild($postAdmin,$deletePost);

        $postOperator=$auth->createRole('postOperator');
        $auth->add($postOperator);
        $auth->addChild($postOperator,$deletePost);

        $commentAuditor = $auth->createRole('commentAuditor');
        $auth->add($commentAuditor);
        $auth->addChild($commentAuditor,$approveComment);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin,$createPost);
        $auth->addChild($admin,$updatePost);
        $auth->addChild($admin,$deletePost);
        $auth->addChild($admin,$approveComment);

    }
}