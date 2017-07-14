<?php

/**
 * This is the model class for table "pencarikerja".
 *
 * The followings are the available columns in table 'pencarikerja':
 * @property integer $id_pencarikerja
 * @property integer $nomor
 * @property string $tanggal
 * @property string $nomorpencaker
 * @property string $nomorktp
 * @property string $nama
 * @property string $tempattanggallahir
 * @property string $tanggallahir
 * @property string $jeniskelamin
 * @property string $status
 * @property string $agama
 * @property string $alamat
 * @property string $kecamatan
 * @property string $sd
 * @property string $smp
 * @property string $sma
 * @property string $diploma
 * @property string $s1
 * @property string $s2
 * @property integer $tahunlulus
 * @property string $almamater
 * @property string $jurusan
 * @property string $ipk
 * @property integer $tb
 * @property integer $bb
 * @property string $nomorhp
 */
class Pencarikerja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pencarikerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor, tanggal, nomorpencaker, nomorktp, nama, tempattanggallahir, tanggallahir, jeniskelamin, status, agama, alamat, kecamatan, sd, smp, sma, diploma, s1, s2, tahunlulus, almamater, jurusan, ipk, tb, bb, nomorhp', 'required'),
			array('nomor, tahunlulus, tb, bb', 'numerical', 'integerOnly'=>true),
			array('nomorpencaker, nomorktp, agama, kecamatan, nomorhp', 'length', 'max'=>25),
			array('nama, almamater, jurusan', 'length', 'max'=>50),
			array('tempattanggallahir', 'length', 'max'=>255),
			array('jeniskelamin, status', 'length', 'max'=>2),
			array('sd, smp, sma, diploma, s1, s2', 'length', 'max'=>15),
			array('ipk', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pencarikerja, nomor, tanggal, nomorpencaker, nomorktp, nama, tempattanggallahir, tanggallahir, jeniskelamin, status, agama, alamat, kecamatan, sd, smp, sma, diploma, s1, s2, tahunlulus, almamater, jurusan, ipk, tb, bb, nomorhp', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pencarikerja' => 'Id Pencari Kerja',
			'nomor' => 'Nomor',
			'tanggal' => 'Tanggal',
			'nomorpencaker' => 'Nomor Pencari Kerja',
			'nomorktp' => 'NIK',
			'nama' => 'Nama Lengkap',
			'tempattanggallahir' => 'Tempat Tanggal Lahir',
			'tanggallahir' => 'Tanggal Lahir',
			'jeniskelamin' => 'Jenis Kelamin',
			'status' => 'Status Perkawinan',
			'agama' => 'Agama',
			'alamat' => 'Alamat',
			'kecamatan' => 'Kecamatan',
			'sd' => 'SD',
			'smp' => 'SMP',
			'sma' => 'SMA',
			'diploma' => 'Diploma',
			's1' => 'S1',
			's2' => 'S2',
			'tahunlulus' => 'Tahun Lulus',
			'almamater' => 'Almamater',
			'jurusan' => 'Jurusan',
			'ipk' => 'IPK',
			'tb' => 'TB',
			'bb' => 'BB',
			'nomorhp' => 'Nomor HP',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_pencarikerja',$this->id_pencarikerja);
		$criteria->compare('nomor',$this->nomor);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('nomorpencaker',$this->nomorpencaker,true);
		$criteria->compare('nomorktp',$this->nomorktp,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempattanggallahir',$this->tempattanggallahir,true);
		$criteria->compare('tanggallahir',$this->tanggallahir,true);
		$criteria->compare('jeniskelamin',$this->jeniskelamin,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kecamatan',$this->kecamatan,true);
		$criteria->compare('sd',$this->sd,true);
		$criteria->compare('smp',$this->smp,true);
		$criteria->compare('sma',$this->sma,true);
		$criteria->compare('diploma',$this->diploma,true);
		$criteria->compare('s1',$this->s1,true);
		$criteria->compare('s2',$this->s2,true);
		$criteria->compare('tahunlulus',$this->tahunlulus);
		$criteria->compare('almamater',$this->almamater,true);
		$criteria->compare('jurusan',$this->jurusan,true);
		$criteria->compare('ipk',$this->ipk,true);
		$criteria->compare('tb',$this->tb);
		$criteria->compare('bb',$this->bb);
		$criteria->compare('nomorhp',$this->nomorhp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pencarikerja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
