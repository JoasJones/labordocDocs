<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ConsultaModel;

/**
 * ConsultaSearch represents the model behind the search form of `app\models\ConsultaModel`.
 */
class ConsultaSearch extends ConsultaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idConsulta', 'caixa', 'idFundo'], 'integer'],
            [['data', 'tipoDeDocumento', 'titulares', 'descricao', 'documento'], 'safe'],
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
        $query = ConsultaModel::find();

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
            'idConsulta' => $this->idConsulta,
            'caixa' => $this->caixa,
        ]);

        $query->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'tipoDeDocumento', $this->tipoDeDocumento])
            ->andFilterWhere(['like', 'titulares', $this->titulares])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'documento', $this->documento]);

        return $dataProvider;
    }
}
