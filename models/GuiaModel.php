<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guia".
 *
 * @property int $idGuia
 * @property int $numeroGuia
 * @property string $nome
 * @property string $cpf
 * @property string $rg
 * @property string $matricula
 * @property int $idConsulta
 * @property int $idFundo
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property int $idEstado
 * @property string $cep
 * @property string $telefone1
 * @property string $telefone2
 * @property string $email
 *
 * @property ConsultaModel $consulta
 * @property FundoConsulta $fundo
 */
class GuiaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroGuia', 'nome', 'cpf', 'rg', 'matricula', 'idConsulta', 'idFundo', 'endereco', 'bairro', 'cidade', 'idEstado', 'cep', 'telefone1', 'telefone2', 'email'], 'required'],
            [['numeroGuia', 'idConsulta', 'idFundo', 'idEstado'], 'integer'],
            [['nome', 'endereco', 'bairro', 'cidade'], 'string', 'max' => 255],
            [['cpf', 'rg', 'matricula', 'cep', 'telefone1', 'telefone2'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 30],
            [['idConsulta'], 'exist', 'skipOnError' => true, 'targetClass' => ConsultaModel::className(), 'targetAttribute' => ['idConsulta' => 'idConsulta']],
            [['idFundo'], 'exist', 'skipOnError' => true, 'targetClass' => FundoModel::className(), 'targetAttribute' => ['idFundo' => 'idFundo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGuia' => 'Id Guia',
            'numeroGuia' => 'Numero Guia',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'rg' => 'Rg',
            'matricula' => 'Matricula',
            'idConsulta' => 'Id Consulta',
            'idFundo' => 'Id Fundo',
            'endereco' => 'Endereco',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'idEstado' => 'Id Estado',
            'cep' => 'Cep',
            'telefone1' => 'Telefone1',
            'telefone2' => 'Telefone2',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsulta()
    {
        return $this->hasOne(ConsultaModel::className(), ['idConsulta' => 'idConsulta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFundo()
    {
        return $this->hasOne(FundoModel::className(), ['idFundo' => 'idFundo']);
    }
}
