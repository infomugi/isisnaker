<?php
/* @var $this UmpiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Umpis',
	);

$this->pageTitle='Daftar Umpi';
?>

<section class="col-xs-12">

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>