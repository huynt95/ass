<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\sanpham;

/**
 * sanphamSearch represents the model behind the search form about `app\models\sanpham`.
 */
class sanphamSearch extends sanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanpham_id', 'loaisanpham_id'], 'integer'],
            [['ten', 'masp', 'mota'], 'safe'],
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
        $query = sanpham::find();

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
            'sanpham_id' => $this->sanpham_id,
            'loaisanpham_id' => $this->loaisanpham_id,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'masp', $this->masp])
            ->andFilterWhere(['like', 'mota', $this->mota]);

        return $dataProvider;
    }
}
