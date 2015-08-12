<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property integer $chitiethoadon_id
 * @property integer $sanpham_id
 * @property integer $hoadon_id
 * @property integer $soluongmua
 * @property string $khuyenmai
 * @property integer $baohanh
 *
 * @property Hoadon $hoadon
 * @property Sanpham $sanpham
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chitiethoadon_id', 'sanpham_id', 'hoadon_id', 'soluongmua', 'khuyenmai', 'baohanh'], 'required'],
            [['chitiethoadon_id', 'sanpham_id', 'hoadon_id', 'soluongmua', 'baohanh'], 'integer'],
            [['khuyenmai'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chitiethoadon_id' => 'Chitiethoadon ID',
            'sanpham_id' => 'Sanpham ID',
            'hoadon_id' => 'Hoadon ID',
            'soluongmua' => 'Soluongmua',
            'khuyenmai' => 'Khuyenmai',
            'baohanh' => 'Baohanh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadon()
    {
        return $this->hasOne(Hoadon::className(), ['hoadon_id' => 'hoadon_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanpham()
    {
        return $this->hasOne(Sanpham::className(), ['sanpham_id' => 'sanpham_id']);
    }
}
