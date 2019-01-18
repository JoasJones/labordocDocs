<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuiaModel;

/**
 * GuiaSearch represents the model behind the search form of `app\models\GuiaModel`.
 */
class GuiaSearch extends GuiaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idGuia', 'numeroGuia', 'idConsulta', 'idEstado'], 'integer'],
            [['nome', 'cpf', 'rg', 'matricula', 'endereco', 'bairro', 'cidade', 'cep', 'telefone1', 'telefone2', 'email'], 'safe'],
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
        $query = GuiaModel::find();

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
            'idGuia' => $this->idGuia,
            'numeroGuia' => $this->numeroGuia,
            'idConsulta' => $this->idConsulta,
            'idEstado' => $this->idEstado,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'telefone1', $this->telefone1])
            ->andFilterWhere(['like', 'telefone2', $this->telefone2])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
