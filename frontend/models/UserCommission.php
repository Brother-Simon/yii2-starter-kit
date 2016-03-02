<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_commission".
 *
 * @property integer $id
 * @property integer $user_id
 * @property double $commission
 * @property string $status
 */
class UserCommission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_commission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['commission'], 'number'],
            [['status'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'commission' => 'Commission',
            'status' => 'Status',
        ];
    }

    public function setUserId(){
        return 10;
    }
}
