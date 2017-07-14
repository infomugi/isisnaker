<?php
/* @var $this Pencari KerjaController */
/* @var $model Pencari Kerja */

$this->breadcrumbs=array(
	'Pencari Kerjas'=>array('index'),
	$model->id_pencarikerja,
	);

$this->pageTitle='Detail Pencari Kerja';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Tambah',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat','title'=>'Tambah Pencari Kerja'));
		?>
		<?php echo CHtml::link('List',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Pencari Kerja'));
			?>
			<?php echo CHtml::link('Kelola',
				array('kelola'),
				array('class' => 'btn btn-success btn-flat','title'=>'Kelola Pencari Kerja'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_pencarikerja,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pencari Kerja'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->id_pencarikerja,
								),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pencari Kerja'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'id_pencarikerja',
											'nomor',
											'tanggal',
											'nomorpencaker',
											'nomorktp',
											'nama',
											'tempattanggallahir',
											'tanggallahir',
											'jeniskelamin',
											'status',
											'agama',
											'alamat',
											'kecamatan',
											'sd',
											'smp',
											'sma',
											'diploma',
											's1',
											's2',
											'tahunlulus',
											'almamater',
											'jurusan',
											'ipk',
											'tb',
											'bb',
											'nomorhp',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

