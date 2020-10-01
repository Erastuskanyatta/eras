<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $project_name
 * @property string $description
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_name', 'description'], 'required'],
            [['project_name'], 'string', 'max' => 50],
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
            'project_name' => 'Project Name',
            'description' => 'Description',
        ];
    }
}
