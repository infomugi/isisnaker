<?php

/**
 * This is the model class for table "perusahaan".
 *
 * The followings are the available columns in table 'perusahaan':
 * @property integer $id
 * @property string $klui
 * @property string $nama
 * @property string $alamat
 * @property string $pimpinan
 * @property string $kecamatan
 * @property string $jenis_usaha
 * @property string $jenis_pemodalan
 * @property integer $jumlah_tki_wanita
 * @property integer $jumlah_tki_pria
 * @property integer $jumlah_tka_wanita
 * @property integer $jumlah_tka_pria
 * @property string $klasifikasi
 * @property string $perusahaan_mulai_berlaku
 * @property string $perusahaan_akhir_berlaku
 * @property string $perusahaan_nomor_sk
 * @property string $serikat_nama
 * @property string $serikat_nomor
 * @property integer $serikat_jumlah_wanita
 * @property integer $serikat_jumlah_pria
 * @property string $serikat_ketua
 * @property string $bipartit_nomor
 * @property string $bipartit_mulai_berlaku
 * @property string $bipartit_akhir_berlaku
 * @property integer $apindo_anggota_aktif
 * @property string $apindo_no_kontak
 * @property integer $bpjs_ketenagakerjaan_wanita
 * @property integer $bpjs_ketenagakerjaan_pria
 * @property integer $bpjs_kesehatan_wanita
 * @property integer $bpjs_kesehatan_pria
 * @property string $kopkar_badan_hukum
 * @property string $kopkar_tidak_badan_hukum
 * @property string $keterangan
 * @property integer $status
 */
class Perusahaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perusahaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('klui, nama, alamat, pimpinan, kecamatan, jenis_usaha, jenis_pemodalan, jumlah_tki_wanita, jumlah_tki_pria, jumlah_tka_wanita, jumlah_tka_pria, klasifikasi, perusahaan_mulai_berlaku, perusahaan_akhir_berlaku, perusahaan_nomor_sk, serikat_nama, serikat_nomor, serikat_jumlah_wanita, serikat_jumlah_pria, serikat_ketua, bipartit_nomor, bipartit_mulai_berlaku, bipartit_akhir_berlaku, apindo_anggota_aktif, apindo_no_kontak, bpjs_ketenagakerjaan_wanita, bpjs_ketenagakerjaan_pria, bpjs_kesehatan_wanita, bpjs_kesehatan_pria, kopkar_badan_hukum, kopkar_tidak_badan_hukum, keterangan, status', 'required'),
			array('jumlah_tki_wanita, jumlah_tki_pria, jumlah_tka_wanita, jumlah_tka_pria, serikat_jumlah_wanita, serikat_jumlah_pria, apindo_anggota_aktif, bpjs_ketenagakerjaan_wanita, bpjs_ketenagakerjaan_pria, bpjs_kesehatan_wanita, bpjs_kesehatan_pria, status', 'numerical', 'integerOnly'=>true),
			array('klui', 'length', 'max'=>15),
			array('nama', 'length', 'max'=>150),
			array('pimpinan, jenis_usaha, jenis_pemodalan, klasifikasi, serikat_nomor, serikat_ketua, bipartit_nomor, kopkar_badan_hukum, kopkar_tidak_badan_hukum', 'length', 'max'=>50),
			array('kecamatan, perusahaan_nomor_sk, apindo_no_kontak', 'length', 'max'=>25),
			array('serikat_nama', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, klui, nama, alamat, pimpinan, kecamatan, jenis_usaha, jenis_pemodalan, jumlah_tki_wanita, jumlah_tki_pria, jumlah_tka_wanita, jumlah_tka_pria, klasifikasi, perusahaan_mulai_berlaku, perusahaan_akhir_berlaku, perusahaan_nomor_sk, serikat_nama, serikat_nomor, serikat_jumlah_wanita, serikat_jumlah_pria, serikat_ketua, bipartit_nomor, bipartit_mulai_berlaku, bipartit_akhir_berlaku, apindo_anggota_aktif, apindo_no_kontak, bpjs_ketenagakerjaan_wanita, bpjs_ketenagakerjaan_pria, bpjs_kesehatan_wanita, bpjs_kesehatan_pria, kopkar_badan_hukum, kopkar_tidak_badan_hukum, keterangan, status', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'klui' => 'KLUI',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'pimpinan' => 'Pimpinan',
			'kecamatan' => 'Kecamatan',
			'jenis_usaha' => 'Jenis Usaha',
			'jenis_pemodalan' => 'Jenis Pemodalan',
			'jumlah_tki_wanita' => 'Jumlah TKI Wanita',
			'jumlah_tki_pria' => 'Jumlah TKI Pria',
			'jumlah_tka_wanita' => 'Jumlah TKA Wanita',
			'jumlah_tka_pria' => 'Jumlah TKA Pria',
			'klasifikasi' => 'Klasifikasi',
			'perusahaan_mulai_berlaku' => 'Perusahaan Mulai Berlaku',
			'perusahaan_akhir_berlaku' => 'Perusahaan Akhir Berlaku',
			'perusahaan_nomor_sk' => 'Perusahaan Nomor Sk',
			'serikat_nama' => 'Serikat Nama',
			'serikat_nomor' => 'Serikat Nomor',
			'serikat_jumlah_wanita' => 'Serikat Jumlah Wanita',
			'serikat_jumlah_pria' => 'Serikat Jumlah Pria',
			'serikat_ketua' => 'Serikat Ketua',
			'bipartit_nomor' => 'Bipartit Nomor',
			'bipartit_mulai_berlaku' => 'Bipartit Mulai Berlaku',
			'bipartit_akhir_berlaku' => 'Bipartit Akhir Berlaku',
			'apindo_anggota_aktif' => 'Apindo Anggota Aktif',
			'apindo_no_kontak' => 'Apindo No Kontak',
			'bpjs_ketenagakerjaan_wanita' => 'Bpjs Ketenagakerjaan Wanita',
			'bpjs_ketenagakerjaan_pria' => 'Bpjs Ketenagakerjaan Pria',
			'bpjs_kesehatan_wanita' => 'Bpjs Kesehatan Wanita',
			'bpjs_kesehatan_pria' => 'Bpjs Kesehatan Pria',
			'kopkar_badan_hukum' => 'Kopkar Badan Hukum',
			'kopkar_tidak_badan_hukum' => 'Kopkar Tidak Badan Hukum',
			'keterangan' => 'Keterangan',
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
		$criteria->compare('klui',$this->klui,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('pimpinan',$this->pimpinan,true);
		$criteria->compare('kecamatan',$this->kecamatan,true);
		$criteria->compare('jenis_usaha',$this->jenis_usaha,true);
		$criteria->compare('jenis_pemodalan',$this->jenis_pemodalan,true);
		$criteria->compare('jumlah_tki_wanita',$this->jumlah_tki_wanita);
		$criteria->compare('jumlah_tki_pria',$this->jumlah_tki_pria);
		$criteria->compare('jumlah_tka_wanita',$this->jumlah_tka_wanita);
		$criteria->compare('jumlah_tka_pria',$this->jumlah_tka_pria);
		$criteria->compare('klasifikasi',$this->klasifikasi,true);
		$criteria->compare('perusahaan_mulai_berlaku',$this->perusahaan_mulai_berlaku,true);
		$criteria->compare('perusahaan_akhir_berlaku',$this->perusahaan_akhir_berlaku,true);
		$criteria->compare('perusahaan_nomor_sk',$this->perusahaan_nomor_sk,true);
		$criteria->compare('serikat_nama',$this->serikat_nama,true);
		$criteria->compare('serikat_nomor',$this->serikat_nomor,true);
		$criteria->compare('serikat_jumlah_wanita',$this->serikat_jumlah_wanita);
		$criteria->compare('serikat_jumlah_pria',$this->serikat_jumlah_pria);
		$criteria->compare('serikat_ketua',$this->serikat_ketua,true);
		$criteria->compare('bipartit_nomor',$this->bipartit_nomor,true);
		$criteria->compare('bipartit_mulai_berlaku',$this->bipartit_mulai_berlaku,true);
		$criteria->compare('bipartit_akhir_berlaku',$this->bipartit_akhir_berlaku,true);
		$criteria->compare('apindo_anggota_aktif',$this->apindo_anggota_aktif);
		$criteria->compare('apindo_no_kontak',$this->apindo_no_kontak,true);
		$criteria->compare('bpjs_ketenagakerjaan_wanita',$this->bpjs_ketenagakerjaan_wanita);
		$criteria->compare('bpjs_ketenagakerjaan_pria',$this->bpjs_ketenagakerjaan_pria);
		$criteria->compare('bpjs_kesehatan_wanita',$this->bpjs_kesehatan_wanita);
		$criteria->compare('bpjs_kesehatan_pria',$this->bpjs_kesehatan_pria);
		$criteria->compare('kopkar_badan_hukum',$this->kopkar_badan_hukum,true);
		$criteria->compare('kopkar_tidak_badan_hukum',$this->kopkar_tidak_badan_hukum,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perusahaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
