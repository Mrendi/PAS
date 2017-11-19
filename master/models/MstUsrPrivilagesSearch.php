<?php

namespace app\master\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\master\models\MstUsrPrivilages;

/**
 * MstUsrPrivilagesSearch represents the model behind the search form about `app\master\models\MstUsrPrivilages`.
 */
class MstUsrPrivilagesSearch extends MstUsrPrivilages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cab', 'kode_usr_priv', 'kodegrup', 'kode_menu', 'upd_by', 'upd_dt_tm', 'description'], 'safe'],
            [['accs_usr', 'is_cancel'], 'integer'],
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
        $query = MstUsrPrivilages::find();

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
            'accs_usr' => $this->accs_usr,
            'upd_dt_tm' => $this->upd_dt_tm,
            'is_cancel' => $this->is_cancel,
        ]);

        $query->andFilterWhere(['like', 'kode_cab', $this->kode_cab])
            ->andFilterWhere(['like', 'kode_usr_priv', $this->kode_usr_priv])
            ->andFilterWhere(['like', 'kodegrup', $this->kodegrup])
            ->andFilterWhere(['like', 'kode_menu', $this->kode_menu])
            ->andFilterWhere(['like', 'upd_by', $this->upd_by])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
