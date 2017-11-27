<?php

namespace app\timbangan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\timbangan\models\TrTimbangan;

/**
 * TrTimbanganSearch represents the model behind the search form about `app\timbangan\models\TrTimbangan`.
 */
class TrTimbanganSearch extends TrTimbangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cab', 'no_form', 'no_tr_timbangan', 'no_truck', 'tanggal', 'no_po', 'no_sj', 'nama_supir', 'kode_relasi', 'kode_barang', 'kode_supplier', 'kode_customer', 'kode_barcode', 'in_datetime', 'in_capture1', 'in_capture2', 'out_datetime', 'out_capture1', 'out_capture2', 'keterangan1', 'keterangan2', 'keterangan3', 'do_scan1', 'do_scan2', 'upd_by', 'cekpembayaran_upd_by', 'cekpembayaran_upd_dt_tm'], 'safe'],
            [['in_jml_berat', 'out_jml_berat', 'jml_netton', 'jml_bruto', 'jml_potongan'], 'number'],
            [['tr_status', 'is_cancel', 'cekpembayaran'], 'integer'],
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
        $query = TrTimbangan::find();

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
            'tanggal' => $this->tanggal,
            'in_datetime' => $this->in_datetime,
            'in_jml_berat' => $this->in_jml_berat,
            'out_datetime' => $this->out_datetime,
            'out_jml_berat' => $this->out_jml_berat,
            'jml_netton' => $this->jml_netton,
            'jml_bruto' => $this->jml_bruto,
            'jml_potongan' => $this->jml_potongan,
            'tr_status' => $this->tr_status,
            'is_cancel' => $this->is_cancel,
            'cekpembayaran' => $this->cekpembayaran,
            'cekpembayaran_upd_dt_tm' => $this->cekpembayaran_upd_dt_tm,
        ]);

        $query->andFilterWhere(['like', 'kode_cab', $this->kode_cab])
            ->andFilterWhere(['like', 'no_form', $this->no_form])
            ->andFilterWhere(['like', 'no_tr_timbangan', $this->no_tr_timbangan])
            ->andFilterWhere(['like', 'no_truck', $this->no_truck])
            ->andFilterWhere(['like', 'no_po', $this->no_po])
            ->andFilterWhere(['like', 'no_sj', $this->no_sj])
            ->andFilterWhere(['like', 'nama_supir', $this->nama_supir])
            ->andFilterWhere(['like', 'kode_relasi', $this->kode_relasi])
            ->andFilterWhere(['like', 'kode_barang', $this->kode_barang])
            ->andFilterWhere(['like', 'kode_supplier', $this->kode_supplier])
            ->andFilterWhere(['like', 'kode_customer', $this->kode_customer])
            ->andFilterWhere(['like', 'kode_barcode', $this->kode_barcode])
            ->andFilterWhere(['like', 'in_capture1', $this->in_capture1])
            ->andFilterWhere(['like', 'in_capture2', $this->in_capture2])
            ->andFilterWhere(['like', 'out_capture1', $this->out_capture1])
            ->andFilterWhere(['like', 'out_capture2', $this->out_capture2])
            ->andFilterWhere(['like', 'keterangan1', $this->keterangan1])
            ->andFilterWhere(['like', 'keterangan2', $this->keterangan2])
            ->andFilterWhere(['like', 'keterangan3', $this->keterangan3])
            ->andFilterWhere(['like', 'do_scan1', $this->do_scan1])
            ->andFilterWhere(['like', 'do_scan2', $this->do_scan2])
            ->andFilterWhere(['like', 'upd_by', $this->upd_by])
            ->andFilterWhere(['like', 'cekpembayaran_upd_by', $this->cekpembayaran_upd_by]);

        return $dataProvider;
    }
}
