<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $khachhang_id
 * @property string $ten
 * @property string $email
 * @property integer $phone
 *
 * @property Hoadon[] $hoadons
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['khachhang_id', 'ten', 'email', 'phone'], 'required'],
            [['khachhang_id', 'phone'], 'integer'],
            [['ten', 'email'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'khachhang_id' => 'Khachhang ID',
            'ten' => 'Ten',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadons()
    {
        return $this->hasMany(Hoadon::className(), ['khachhang_id' => 'khachhang_id']);
    }
}
