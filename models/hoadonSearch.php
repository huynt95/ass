<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\hoadon;

/**
 * hoadonSearch represents the model behind the search form about `app\models\hoadon`.
 */
class hoadonSearch extends hoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoadon_id', 'khachhang_id'], 'integer'],
            [['ngaymua'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = hoadon::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'hoadon_id' => $this->hoadon_id,
            'khachhang_id' => $this->khachhang_id,
            'ngaymua' => $this->ngaymua,
        ]);

        return $dataProvider;
    }
}
