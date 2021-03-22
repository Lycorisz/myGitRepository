<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tf".
 *
 * @property int $tf_id
 * @property string $tf_info
 * @property string $tf_answer
 * @property string $tf_chapter
 * @property int $tf_cretime
 * @property string $tf_profile
 */
class Tf extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tf';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tf_info', 'tf_answer', 'tf_chapter'], 'required'],
            [['tf_info'], 'string'],
            [['tf_cretime'], 'integer'],
            [['tf_answer', 'tf_chapter', 'tf_profile'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tf_id' => 'ID',
            'tf_info' => '题干',
            'tf_answer' => '答案',
            'tf_chapter' => '章节',
            'tf_cretime' => 'Tf Cretime',
            'tf_profile' => '简述',
        ];
    }

    public function getChapter(){
        return $this->hasOne(Chapter::className(),['ch_id'=>'tf_chapter']);
    }
}
