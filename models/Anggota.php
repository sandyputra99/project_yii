<?php

namespace app\models;

use Yii;
use app\models\Jabatan;
/**
 * This is the model class for table "anggota".
 *
 * @property int $id
 * @property int $nim
 * @property string $nama_anggota
 * @property int $id_jabatan
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama_anggota', 'id_jabatan'], 'required'],
            [['nim', 'id_jabatan'], 'integer'],
            [['nama_anggota'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama_anggota' => 'Nama Anggota',
            'id_jabatan' => 'Id Jabatan',
        ];
    }
    public function getJabatan()
    {
        return $this->hasOne(Jabatan::class, ['id_jabatan' => 'id_jabatan']);
    }
}
