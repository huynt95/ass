<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $sanpham_id
 * @property integer $loaisanpham_id
 * @property string $ten
 * @property string $masp
 * @property string $mota
 *
 * @property Chitiethoadon[] $chitiethoadons
 * @property Loaisanpham $loaisanpham
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanpham_id', 'loaisanpham_id', 'ten', 'masp', 'mota'], 'required'],
            [['sanpham_id', 'loaisanpham_id'], 'integer'],
            [['ten', 'masp'], 'string', 'max' => 40],
            [['mota'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sanpham_id' => 'Sanpham ID',
            'loaisanpham_id' => 'Loaisanpham ID',
            'ten' => 'Ten',
            'masp' => 'Masp',
            'mota' => 'Mota',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChitiethoadons()
    {
        return $this->hasMany(Chitiethoadon::className(), ['sanpham_id' => 'sanpham_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaisanpham()
    {
        return $this->hasOne(Loaisanpham::className(), ['loaisanpham_id' => 'loaisanpham_id']);
    }
}
