<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "leave_message".
 *
 * @property integer $id
 * @property string $content
 * @property string $user_name
 * @property string $phone
 * @property string $email
 */
class LeaveMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'leave_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['user_name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'user_name' => 'User Name',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
