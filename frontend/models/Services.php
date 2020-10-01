<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $serviceuld
 * @property string $createddate
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'description', 'serviceuld'], 'required'],
            [['createddate'], 'safe'],
            [['name', 'title'], 'string', 'max' => 20],
            [['description', 'serviceuld'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'description' => 'Description',
            'serviceuld' => 'Serviceuld',
            'createddate' => 'Createddate',
        ];
    }
}
