<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property string $skill
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skill'], 'required'],
            [['skill'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'skill' => 'Skill',
        ];
    }
}
