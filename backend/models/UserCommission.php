<?php

namespace backend\models;

use Yii;
use common\models\User;
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
            [['id'], 'required'],
            [['id', 'user_id'], 'integer'],
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
            'user_id' => '用户名',
            'commission' => '佣金',
            'status' => '状态',
        ];
    }

    /**
     * @inheritdoc
     * @return UserCommissionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserCommissionQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'id']);
    }
}
