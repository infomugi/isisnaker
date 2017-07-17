<section id="content" class="two-col-content task-content">
  <div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left row-offcanvas-sm row-offcanvas-sm-left row-offcanvas-xs">
     <?php  if(YII::app()->user->record->level==1 || YII::app()->user->record->level==2){ ?>
      <div class="col-sm-3">
       <?php  if(YII::app()->user->record->level==1): ?>
       <div class="panel panel-default panel-table no-margin">
        <div class="panel-heading">
          <h3 class="panel-title">Menu</h3>
        </div>
        <div class="panel-body no-margin">
         <?php
         $this->widget('zii.widgets.CMenu', array(
          'htmlOptions' => array('class' => 'nav nav-sidebar current active'),
          'encodeLabel'=>FALSE,
          'items' => array(
            array('label' => '<i class="fa fa-tasks"></i> Purchase Request', 'url' => array('/permintaan/admin')),
            array('label' => '<i class="fa fa-arrow-down"></i> Barang Masuk', 'url' => array('/barangmasuk/admin')),
            array('label' => '<i class="fa fa-arrow-up"></i> Barang Keluar', 'url' => array('/barangkeluar/admin')),
            array('label' => '<i class="fa fa-archive"></i> Kelola Barang', 'url' => array('/barang/admin')),
            array('label' => '<i class="fa fa-tags"></i> Kelola Kategori', 'url' => array('/kategori/admin')),
            array('label' => '<i class="fa fa-truck"></i> Kelola Supplier', 'url' => array('/supplier/admin')),
            array('label' => '<i class="fa fa-github-alt"></i> Kelola Petugas', 'url' => array('/user/admin')),
            )
          ));
         ?>
       </div>
     </div>
   <?php endif; ?>
   <?php  if(YII::app()->user->record->level==2): ?>
   <div class="panel panel-default panel-table no-margin">
    <div class="panel-heading">
      <h3 class="panel-title">Analisis AHP</h3>
    </div>
    
    <div class="panel-body no-margin">
     <?php
     $this->widget('zii.widgets.CMenu', array(
      'htmlOptions' => array('class' => 'nav nav-sidebar current active'),
      'encodeLabel'=>FALSE,
      'items' => array(
        array('label' => '<i class="fa fa-truck"></i> Supplier', 'url' => array('/supplier/admin')),
        array('label' => '<i class="fa fa-tag"></i> Kriteria', 'url' => array('/kriteria/admin')),
        array('label' => '<i class="fa fa-tag"></i> Nilai Bobot Kriteria', 'url' => array('/bobotkriteria/admin')),
        array('label' => '<i class="fa fa-tag"></i> Bobot Sub Kriteria', 'url' => array('/bobotsubkriteria/admin')),
        array('label' => '<i class="fa fa-tag"></i> Penilaian AHP', 'url' => array('/penilaianahp/admin')),
        array('label' => '<i class="fa fa-tag"></i> Analisis AHP', 'url' => array('/bobotkriteria/index')),
        )
      ));
     ?>
   </div>
 </div>
<?php endif; ?>

</div>


<div class="col-sm-9">
 
  <div class="panel panel-default panel-table no-margin">
    <div class="panel-heading">
      <h3 class="panel-title"><?php echo $this->pageTitle; ?></h3>
    </div>
    <div class="panel-body no-margin">
      <?php echo $content; ?>
    </div>
  </div>
</div>


<?php }else{ ?>

  <div class="col-sm-12">

    <div class="panel panel-default panel-table no-margin">
      <div class="panel-heading">
        <ol class="breadcrumb bc-nav">
          <?php if(isset($this->breadcrumbs)):?>
          <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>CHtml::link('<i class="fa fa-home"></i> Dashboard'),
            'htmlOptions'=>array('class'=>'')
            )); ?><!-- breadcrumbs -->
        <?php endif?>     
      </ol>                
    </div>
    <div class="panel-body no-margin">
      <?php echo $content; ?>
    </div>
  </div>
</div>


<?php }?>



</div>

</div>

</div>
</div>

</section>