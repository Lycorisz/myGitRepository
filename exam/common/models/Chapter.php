<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chapter".
 *
 * @property int $ch_id
 * @property string $ch_name
 * @property string $ch_cretime
 * @property int $ch_position
 */
class Chapter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chapter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ch_id', 'ch_name', 'ch_cretime'], 'required'],
            [['ch_id', 'ch_position'], 'integer'],
            [['ch_cretime'], 'safe'],
            [['ch_name'], 'string', 'max' => 128],
            [['ch_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ch_id' => 'Ch ID',
            'ch_name' => 'Ch Name',
            'ch_cretime' => 'Ch Cretime',
            'ch_position' => 'Ch Position',
        ];
    }

    public function getUrl(){
        return Yii::$app->urlManager->createUrl([
           'paper/paper',
           'id'=>$this->ch_id,
           'name'=>$this->ch_name,
        ]);
    }
}
