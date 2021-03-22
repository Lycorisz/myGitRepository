<?php

namespace common\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "paper".
 *
 * @property int $p_id
 * @property string $p_name
 */
class Paper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paper';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'p_name' => 'P Name',
        ];
    }

    public function getUrl(){
        return  Yii::$app->urlManager->createUrl(
            ['paper/paper','id'=>$this->p_id,'title'=>$this->p_name]
        );
    }

    public function getAllChapters(){
        return (new Query())
            ->select(['p_name','p_id'])
            ->from('paper')
            ->column();
    }




}
