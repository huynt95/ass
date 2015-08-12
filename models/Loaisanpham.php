<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property integer $loaisanpham_id
 * @property string $ten
 *
 * @property Sanpham[] $sanphams
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loaisanpham_id', 'ten'], 'required'],
            [['loaisanpham_id'], 'integer'],
            [['ten'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loaisanpham_id' => 'Loaisanpham ID',
            'ten' => 'Ten',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanphams()
    {
        return $this->hasMany(Sanpham::className(), ['loaisanpham_id' => 'loaisanpham_id']);
    }
}
