<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consulta1".
 *
 * @property int $idConsulta
 * @property string $caixa
 * @property int $idFundo
 * @property string $data
 * @property string $tipoDeDocumento
 * @property string $titulares
 * @property string $descricao
 * @property string $documento
 *
 * @property FundoModel $fundo
 * @property GuiaModel[] $guias
 */
class ConsultaModel extends \yii\db\ActiveRecord
{
    public $url;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consulta1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caixa', 'data','titulares'], 'required'],
            [['url'], 'file'],
            [['idFundo'], 'integer'],
            [['caixa', 'data'], 'string', 'max' => 50],
            [['tipoDeDocumento'], 'string', 'max' => 100],
            [['titulares', 'url','documento'], 'string', 'max' => 250],
            [['descricao'], 'string', 'max' => 600],
            [['idFundo'], 'exist', 'skipOnError' => true, 'targetClass' => FundoModel::className(), 'targetAttribute' => ['idFundo' => 'idFundo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idConsulta' => 'Id Consulta',
            'caixa' => 'Caixa',
            'idFundo' => 'Id Fundo',
            'data' => 'Data',
            'tipoDeDocumento' => 'Tipo De Documento',
            'titulares' => 'Titulares',
            'descricao' => 'Descricao',
            'url' => 'Documento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFundo()
    {
        return $this->hasOne(FundoModel::className(), ['idFundo' => 'idFundo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuias()
    {
        return $this->hasMany(GuiaModel::className(), ['idConsulta' => 'idConsulta']);
    }
}
