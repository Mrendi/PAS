<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstGroup;

/**
 * MstGroupSearch represents the model behind the search form about `app\models\MstGroup`.
 */
class MstGroupSearch extends MstGroup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kodegrup', 'namagrup', 'createdby', 'createddate', 'modifiedby', 'modifieddate', 'description'], 'safe'],
            [['is_cancel'], 'integer'],
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
        $query = MstGroup::find();

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
            'createddate' => $this->createddate,
            'modifieddate' => $this->modifieddate,
            'is_cancel' => $this->is_cancel,
        ]);

        $query->andFilterWhere(['like', 'kodegrup', $this->kodegrup])
            ->andFilterWhere(['like', 'namagrup', $this->namagrup])
            ->andFilterWhere(['like', 'createdby', $this->createdby])
            ->andFilterWhere(['like', 'modifiedby', $this->modifiedby])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
