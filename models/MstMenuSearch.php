<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstMenu;

/**
 * MstMenuSearch represents the model behind the search form about `app\models\MstMenu`.
 */
class MstMenuSearch extends MstMenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cab', 'kode_menu', 'nama_menu', 'ket_1', 'upd_by', 'upd_dt_tm'], 'safe'],
            [['menu_order', 'is_cancel'], 'integer'],
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
        $query = MstMenu::find();

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
            'menu_order' => $this->menu_order,
            'upd_dt_tm' => $this->upd_dt_tm,
            'is_cancel' => $this->is_cancel,
        ]);

        $query->andFilterWhere(['like', 'kode_cab', $this->kode_cab])
            ->andFilterWhere(['like', 'kode_menu', $this->kode_menu])
            ->andFilterWhere(['like', 'nama_menu', $this->nama_menu])
            ->andFilterWhere(['like', 'ket_1', $this->ket_1])
            ->andFilterWhere(['like', 'upd_by', $this->upd_by]);

        return $dataProvider;
    }
}
