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
            ['commission', 'number', 'max'=>200, 'tooBig'=>'最高提现金额不能超过200元'],
            ['commission', 'number', 'min'=>50, 'tooSmall'=>'提现最低金额不能低于50元'],
            [['status'], 'string', 'max' => 45],
            ['commission', function ($attribute, $params) {
                if($this->$attribute > \Yii::$app->user->getIdentity()->userProfile['total_commission']){
                    $this->addError($attribute, '提现金额必须小于可提现金额！');

                }
            }],

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
