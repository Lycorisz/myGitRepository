<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fillblank".
 *
 * @property int $fb_id
 * @property string $fb_info
 * @property string $fb_answer
 * @property string $fb_chapter
 * @property string $fb_profile
 */
class Fillblank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fillblank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fb_info', 'fb_answer', 'fb_chapter'], 'required'],
            [['fb_info', 'fb_answer'], 'string'],
            [['fb_chapter', 'fb_profile'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fb_id' => 'ID',
            'fb_info' => '题干',
            'fb_answer' => '答案',
            'fb_chapter' => '章节',
            'fb_profile' => 'Fb Profile',
        ];
    }

    public function getChapter(){
        return $this->hasOne(Chapter::className(),['ch_id'=>'fb_chapter']);
    }
}
