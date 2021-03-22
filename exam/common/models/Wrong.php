<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wrong".
 *
 * @property int $wrong_id
 * @property int $wrong_stuid
 * @property string $wrong_info
 * @property string $wrong_status
 * @property int $wrong_cretime
 */
class Wrong extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wrong';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wrong_stuid', 'wrong_info', 'wrong_status'], 'required'],
            [['wrong_stuid', 'wrong_cretime'], 'integer'],
            [['wrong_info'], 'string'],
            [['wrong_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wrong_id' => 'ID',
            'wrong_stuid' => '错题学生',
            'wrong_info' => '题干',
            'wrong_status' => '题目状态',
            'wrong_cretime' => '创建时间',
        ];
    }
}
