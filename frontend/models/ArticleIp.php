<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "article_ip".
 *
 * @property integer $id
 * @property integer $article_id
 * @property string $ip
 */
class ArticleIp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_ip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'ip' => 'Ip',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // ...custom code here...
            $ip = $this->getAttribute('ip');
            $article_id = $this->getAttribute('article_id');
            if(empty($this->findOne(['ip'=>$ip,'article_id'=>$article_id]))){
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }
}
