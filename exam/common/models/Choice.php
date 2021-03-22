<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "choice".
 *
 * @property int $cho_id
 * @property string $cho_info
 * @property string $cho_op1
 * @property string $cho_op2
 * @property string $cho_op3
 * @property string $cho_op4
 * @property string $cho_answer
 * @property int $cho_chap
 * @property int $cho_cretime
 */
class Choice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cho_info', 'cho_op1', 'cho_op2', 'cho_op3', 'cho_op4', 'cho_answer', 'cho_chap'], 'required'],
            [['cho_info', 'cho_op1', 'cho_op2', 'cho_op3', 'cho_op4'], 'string'],
            [['cho_chap'], 'integer'],
            [['cho_answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cho_id' => 'ID',
            'cho_info' => '题干',
            'cho_op1' => '选项1',
            'cho_op2' => '选项2',
            'cho_op3' => '选项3',
            'cho_op4' => '选项4',
            'cho_answer' => '答案',
            'cho_chap' => '章节',
        ];
    }

    public function getChapter(){
        return $this->hasOne(Chapter::className(),['ch_id'=>'cho_chap']);
    }


}
