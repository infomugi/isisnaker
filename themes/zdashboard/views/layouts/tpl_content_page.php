<section id="content" class="two-col-content task-content">
  <div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left row-offcanvas-sm row-offcanvas-sm-left row-offcanvas-xs">

  <div class="col-sm-12">

    <ol class="breadcrumb bc-nav">
      <?php if(isset($this->breadcrumbs)):?>
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>$this->breadcrumbs,
        'homeLink'=>CHtml::link('Home'),
        'htmlOptions'=>array('class'=>'')
        )); ?><!-- breadcrumbs -->
    <?php endif?>     
  </ol>  

    <div class="panel panel-default panel-table no-margin">
      <div class="panel-heading">
             
    </div>
    <div class="panel-body no-margin">
      <?php echo $content; ?>
    </div>
  </div>
</div>

</div>
</div>
</section>