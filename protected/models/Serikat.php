<?php

/**
 * This is the model class for table "serikat".
 *
 * The followings are the available columns in table 'serikat':
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property string $alamat
 * @property string $kontak
 * @property integer $kategori_id
 * @property integer $kecamatan_id
 * @property integer $status
 */
class Serikat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'serikat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, nama, alamat, kontak, kategori_id, kecamatan_id, status', 'required'),
			array('kategori_id, kecamatan_id, status', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>30),
			array('nama', 'length', 'max'=>50),
			array('kontak', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode, nama, alamat, kontak, kategori_id, kecamatan_id, status', 'safe', 'on'=>'search'),
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
			'id' => 'Id Serikat',
			'kode' => 'Kode',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'kontak' => 'Kontak',
			'kategori_id' => 'Kategori',
			'kecamatan_id' => 'Kecamatan',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kontak',$this->kontak,true);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('kecamatan_id',$this->kecamatan_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Serikat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
