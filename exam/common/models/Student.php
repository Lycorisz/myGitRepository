<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $stu_paperid
 * @property int $stu_userid
 * @property string $stu_answer
 * @property string $stu_createtime
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stu_userid'], 'integer'],
            [['stu_answer', 'stu_createtime'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stu_paperid' => 'Stu Paperid',
            'stu_userid' => 'Stu Userid',
            'stu_answer' => 'Stu Answer',
            'stu_createtime' => 'Stu Createtime',
        ];
    }


}
