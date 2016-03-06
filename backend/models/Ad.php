<?php

namespace backend\models;

use Yii;
use trntv\filekit\behaviors\UploadBehavior;
/**
 * This is the model class for table "ad".
 *
 * @property integer $id
 * @property string $img_url
 * @property string $title
 */
class Ad extends \yii\db\ActiveRecord
{
    public $img;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['img_path', 'img_base_url'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 45],
            [['img'],'safe']  
        ];
    }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'img'=>[
                'class' => UploadBehavior::className(),
                'attribute' => 'img',
                'pathAttribute' => 'img_path',
                'baseUrlAttribute' => 'img_base_url'
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img Url',
            'title' => 'Title',
        ];
    }


}
