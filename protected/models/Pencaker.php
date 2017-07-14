<?php

/**
 * This is the model class for table "pencaker".
 *
 * The followings are the available columns in table 'pencaker':
 * @property integer $kd_pencaker
 * @property string $nama
 * @property string $tempatlahir
 * @property string $tgllahir
 * @property string $jeniskelamin
 * @property integer $kd_desa
 * @property integer $kd_statusnikah
 * @property integer $kd_pendidikan
 * @property integer $kd_jurusanpendidikan
 * @property string $instansi
 * @property string $tahun
 * @property integer $kd_agama
 * @property integer $kd_pekerjaan
 * @property string $nomorkartukuning
 * @property string $nik
 * @property string $telpongenggam
 * @property string $email
 * @property string $ipk
 * @property integer $tb
 * @property integer $bb
 * @property string $waktuupdate
 * @property integer $kd_operator
 * @property integer $migrasi
 * @property string $waktumigrasi
 * @property string $alamat
 */
class Pencaker extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pencaker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pencaker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, tempatlahir, tgllahir, jeniskelamin, kd_agama, kd_statusnikah, kd_pendidikan, kd_jurusanpendidikan, alamat, instansi, tahun', 'required'),
			array('kd_desa, kd_statusnikah, kd_pendidikan, kd_jurusanpendidikan, kd_agama, kd_pekerjaan, tb, bb, kd_operator, migrasi', 'numerical', 'integerOnly'=>true),
			array('alamat', 'length', 'max'=>255),
			array('nama, instansi', 'length', 'max'=>60),
			array('tempatlahir, email', 'length', 'max'=>50),
			array('jeniskelamin', 'length', 'max'=>1),
			array('tahun', 'length', 'max'=>4),
			array('nomorkartukuning, nik', 'length', 'max'=>16),
			array('telpongenggam', 'length', 'max'=>15),
			array('ipk', 'length', 'max'=>10),
			array('tgllahir, waktuupdate, waktumigrasi', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kd_pencaker, nama, tempatlahir, tgllahir, jeniskelamin, kd_desa, kd_statusnikah, kd_pendidikan, kd_jurusanpendidikan, instansi, tahun, kd_agama, kd_pekerjaan, nomorkartukuning, nik, telpongenggam, email, ipk, tb, bb, waktuupdate, kd_operator, migrasi, waktumigrasi', 'safe', 'on'=>'search'),
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
			'Jurusan'=>array(self::BELONGS_TO,'Jurusan','kd_jurusanpendidikan'),
			'Desa'=>array(self::BELONGS_TO,'Desa','kd_desa'),
			'Agama'=>array(self::BELONGS_TO,'agama','kd_agama'),
			'Operator'=>array(self::BELONGS_TO,'user','kd_operator'),
			'Statusnikah'=>array(self::BELONGS_TO,'statusnikah','kd_statusnikah'),
			'Pendidikan'=>array(self::BELONGS_TO,'pendidikan','kd_pendidikan'),
			'Pekerjaan'=>array(self::BELONGS_TO,'pekerjaan','kd_pekerjaan'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_pencaker' => 'Kd Pencaker',
			'nama' => 'Nama Lengkap',
			'tempatlahir' => 'Tempat Lahir',
			'tgllahir' => 'Tanggal Lahir',
			'jeniskelamin' => 'Jenis Kelamin',
			'kd_desa' => 'Desa',
			'kd_statusnikah' => 'Status',
			'kd_pendidikan' => 'Pendidikan Terakhir',
			'kd_jurusanpendidikan' => 'Jurusan',
			'instansi' => 'Instansi',
			'tahun' => 'Tahun',
			'kd_agama' => 'Agama',
			'kd_pekerjaan' => 'Kd Pekerjaan',
			'nomorkartukuning' => 'Nomor Kartu Kuning',
			'nik' => 'Nik',
			'telpongenggam' => 'HP',
			'email' => 'Email',
			'ipk' => 'IPK',
			'tb' => 'TB',
			'bb' => 'BB',
			'waktuupdate' => 'Waktu Update',
			'kd_operator' => 'Operator',
			'migrasi' => 'Migrasi',
			'waktumigrasi' => 'Waktu Migrasi',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('kd_pencaker',$this->kd_pencaker);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempatlahir',$this->tempatlahir,true);
		$criteria->compare('tgllahir',$this->tgllahir,true);
		$criteria->compare('jeniskelamin',$this->jeniskelamin,true);
		$criteria->compare('kd_desa',$this->kd_desa);
		$criteria->compare('kd_statusnikah',$this->kd_statusnikah);
		$criteria->compare('kd_pendidikan',$this->kd_pendidikan);
		$criteria->compare('kd_jurusanpendidikan',$this->kd_jurusanpendidikan);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('kd_agama',$this->kd_agama);
		$criteria->compare('kd_pekerjaan',$this->kd_pekerjaan);
		$criteria->compare('nomorkartukuning',$this->nomorkartukuning,true);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('telpongenggam',$this->telpongenggam,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ipk',$this->ipk,true);
		$criteria->compare('tb',$this->tb);
		$criteria->compare('bb',$this->bb);
		$criteria->compare('waktuupdate',$this->waktuupdate,true);
		$criteria->compare('kd_operator',$this->kd_operator);
		$criteria->compare('migrasi',$this->migrasi);
		$criteria->compare('waktumigrasi',$this->waktumigrasi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	protected function beforeSave()
	{
		$this->tgllahir = date('Y-m-d h:i:s', strtotime($this->tgllahir));
		$this->waktuupdate = date('Y-m-d h:i:s', strtotime($this->waktuupdate));
		$this->waktumigrasi = date('Y-m-d h:i:s', strtotime($this->waktumigrasi));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tgllahir = date('d-m-Y', strtotime($this->tgllahir));
		$this->waktuupdate = date('d-m-Y', strtotime($this->waktuupdate));
		$this->waktumigrasi = date('d-m-Y', strtotime($this->waktumigrasi));
		return TRUE;
	}   	

	public function countBirth($countBirth)
	{
		$diff = abs(strtotime(date('Y-m-d')) - strtotime($countBirth));
		return $years = floor($diff / (365*60*60*24)) . " tahun";
	}	

	public function countBmi($height,$weight)
	{
		$data = ($weight / ($height * $height));
		$bmi = number_format($data);
		if($bmi < 15.5) {
			return "Anoreksia";
		}elseif ($bmi < 18.5 ) {
			return "Kekurangan Gizi";
		}elseif ($bmi < 25 ) {
			return "Normal";
		}elseif ($bmi < 30 ) {
			return "Overweight";
		}elseif ($bmi < 35 ) {
			return "Obesitas Level 1";
		}elseif ($bmi < 40 ) {
			return "Obesitas Level 2";
		}else {
			return "Obesitas Akut";
		}
	}			


}