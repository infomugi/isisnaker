<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=Yii::app()->name . ' - Dashboard';
?>

<?php if(YII::app()->user->record->level==2): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-stats">
                <div class="panel-heading">
                    <h3 class="panel-title">Laporan Statistik</h3>
                </div>
                <div class="panel-body no-padding">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="panel-data">
                                <?php
                                foreach (Event::getSumEvent() as $Count) {
                                    echo $Count["totalEvent"]; 
                                }
                                ?>
                                <span>Jadwal</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="panel-data">
                                <?php
                                foreach (Proposal::getSumProposal() as $Count) {
                                    echo $Count["totalProposal"]; 
                                }
                                ?>
                                <span>Proposal</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="panel-data">
                                <?php
                                foreach (User::getSumMember() as $Count) {
                                    echo $Count["totalMember"]; 
                                }
                                ?>
                                <span>Member</span>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="panel-data">
                                <?php
                                foreach (Proposal::getSumApproveProposal() as $Count) {
                                    echo $Count["totalProposal"]; 
                                }
                                ?>
                                <span>Prioritas Rendah</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="panel-data color-warning">
                                <?php
                                foreach (Proposal::getSumDisapproveProposal() as $Count) {
                                    echo $Count["totalProposal"]; 
                                }
                                ?>
                                <span class="color-warning">Prioritas Sedang</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="panel-data color-danger">
                                <?php
                                foreach (Proposal::getSumPendingProposal() as $Count) {
                                    echo $Count["totalProposal"]; 
                                }
                                ?>
                                <span class="color-danger">Prioritas Tinggi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    <span class="pull-left">
                        Update Terakhir: <?php echo date('d M Y'); ?>
                    </span>

                    <div class="dropup pull-right">
                        <button type="button" class="btn btn-reset dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'htmlOptions' => array('class' => 'dropdown-menu dropdown-menu-right'),
                            'encodeLabel'=>FALSE,
                            'items' => array(
                                array('label' => '<i class="fa fa-home"></i> Home', 'url' => array('/site/index'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => '<i class="fa fa-tasks"></i> Penjadwalan', 'url' => array('/event/index'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => '<i class="fa fa-file"></i> Proposal', 'url' => array('/proposal/index')),
                                array('label' => '<i class="fa fa-users"></i> Member', 'url' => array('/user/index')),
                                array('label' => '<i class="fa fa-user"></i> My Profile', 'url' => array('user/view&id='.YII::app()->user->id), 'visible' => !Yii::app()->user->isGuest),
                                )
                            ));
                            ?>       
                        </div>
                    </div>
                </div>
            </div>

          

            </div>

        <?php endif; ?>