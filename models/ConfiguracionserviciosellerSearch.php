<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Configuracionservicioseller;

/**
 * ConfiguracionserviciosellerSearch represents the model behind the search form of `app\models\Configuracionservicioseller`.
 */
class ConfiguracionserviciosellerSearch extends Configuracionservicioseller
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servicio', 'horario', 'user', 'id', 'ciudad'], 'integer'],
            [['valor'], 'number'],
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
        $query = Configuracionservicioseller::find();

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
            'servicio' => $this->servicio,
            'horario' => $this->horario,
            'user' => $this->user,
            'id' => $this->id,
            'valor' => $this->valor,
            'ciudad' => $this->ciudad,
        ]);

        return $dataProvider;
    }
}
