<?php

namespace frontend\models;

use Yii;
use common\models\Article;

/**
 * This is the model class for table "my_click".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $article_id
 */
class MyClick extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'my_click';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'article_id'], 'integer']
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
            'article_id' => 'Article ID',
        ];
    }

    public function getArticle(){
        return $this->hasMany(Article::className(), ['id' => 'article_id']);
    }
}
