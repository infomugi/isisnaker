<?php
/* @var $this PerusahaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perusahaan',
	);

$this->pageTitle='List Perusahaan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-success btn-flat','title'=>'Add Perusahaan'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-success btn-flat', 'title'=>'List Perusahaan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-success btn-flat','title'=>'Manage Perusahaan'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-success btn-flat','title'=>'Add Perusahaan'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-success btn-flat', 'title'=>'List Perusahaan'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-success btn-flat','title'=>'Manage Perusahaan'));
							?>
							<?php echo CHtml::link('Export ke Excel',
								array('reportexcel'),
								array('class' => 'btn btn-success btn-flat','title'=>'Export Perusahaan ke Excel'));
								?>

							</span>

							<HR>

								<?php $this->widget('zii.widgets.CListView', array(
									'dataProvider'=>$dataProvider,
									'itemView'=>'_view',
									)); ?>

