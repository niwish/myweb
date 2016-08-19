<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "motto".
 *
 * @property integer $id
 * @property string $english
 * @property string $chinese
 * @property string $add_time
 */
class Motto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['add_time'], 'required'],
            [['add_time'], 'safe'],
            [['english'], 'string', 'max' => 255],
            [['chinese'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'english' => 'English',
            'chinese' => 'Chinese',
            'add_time' => 'Add Time',
        ];
    }
}
