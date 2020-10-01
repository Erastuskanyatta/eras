<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property int $name
 * @property string $phone
 * @property string $project
 * @property string $description
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'project', 'description'], 'required'],
            [['name'], 'integer'],
            [['phone'], 'string', 'max' => 15],
            [['project'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 1000],
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
            'phone' => 'Phone',
            'project' => 'Project',
            'description' => 'Description',
        ];
    }
}
