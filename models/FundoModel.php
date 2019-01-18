<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fundo_consulta".
 *
 * @property int $idFundo
 * @property string $fundo_nome
 *
 * @property ConsultaModel[] $consulta1s
 */
class FundoModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fundo_consulta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fundo_nome'], 'required'],
            [['fundo_nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFundo' => 'Id Fundo',
            'fundo_nome' => 'Fundo Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsulta1s()
    {
        return $this->hasMany(ConsultaModel::className(), ['idFundo' => 'idFundo']);
    }
}
