<?php

namespace common\models\Query;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LaporProgress;

/**
 * LaporProgressSearch represents the model behind the search form of `common\models\LaporProgress`.
 */
class LaporProgressSearch extends LaporProgress
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pembangunan_id'], 'integer'],
            [['image', 'tanggal', 'uraian_pekerjaan'], 'safe'],
            [['capaian_progress'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = LaporProgress::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'capaian_progress' => $this->capaian_progress,
            'pembangunan_id' => $this->pembangunan_id,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'uraian_pekerjaan', $this->uraian_pekerjaan]);

        return $dataProvider;
    }
}
